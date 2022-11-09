<? namespace Intervolga\Recaptcha\EventHandlers;

use Bitrix\Main\Application;
use Bitrix\Main\Config\Option;
use Bitrix\Main\Context;
use Bitrix\Main\IO\File;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Page\Asset;
use Bitrix\Main\Page\AssetLocation;
use Intervolga\Recaptcha\ReCaptcha;
use Bitrix\Main\IO;
use Bitrix\Main\Security;

Loc::loadMessages(__FILE__);

/**
 * Class Main
 * @package Intervolga\Recaptcha\EventHandlers
 */
class Main
{
    const MODULE_ID = 'intervolga.recaptcha';

    /**
     * Hack: check reCaptcha and patch captcha_word before $USER created
     */
    public static function OnPageStart()
    {
        try {
            if (defined("ADMIN_SECTION") || !ReCaptcha::checkRecaptchaActive()) {
                return;
            }
            // Check reCaptcha user response
            $application = Application::getInstance();
            $request = $application->getContext()->getRequest();
            $post = $request->getPostList()->toArray();

            // Some components hide request parameters in sub-array.
            // order[*] in sale.order.ajax for example
            foreach ($post as $key => $value) {
                if (!is_array($value)) {
                    continue;
                }

                $captchaCode = self::CheckReCaptcha($value);
                if (null === $captchaCode) {
                    continue;
                }

                if (false === $captchaCode) {
                    $captchaCode = 'WRONG_CAPTCHA_CODE';
                }

                $_REQUEST[$key]['captcha_word'] = $_POST[$key]['captcha_word'] = $captchaCode;

                $requestValues = $request->toArray();
                $requestValues[$key]['captcha_word'] = $captchaCode;
                $request->set($requestValues);

                $postValues = $request->getPostList()->toArray();
                $postValues[$key]['captcha_word'] = $captchaCode;
                $request->getPostList()->set($postValues);
            }

            // By default search captcha parameters in the root of POST
            $captchaCode = self::CheckReCaptcha($post);
            if (null === $captchaCode) {
                return;
            }

            if (false === $captchaCode) {
                $captchaCode = 'WRONG_CAPTCHA_CODE';
            }

            $_REQUEST['captcha_word'] = $_POST['captcha_word'] = $captchaCode;

            $requestValues = $request->toArray();
            $requestValues['captcha_word'] = $captchaCode;
            $request->set($requestValues);

            $postValues = $request->getPostList()->toArray();
            $postValues['captcha_word'] = $captchaCode;
            $request->getPostList()->set($postValues);
        } catch (\Exception $e) {
            \CEventLog::Add(array(
                "SEVERITY" => "WARNING",
                "AUDIT_TYPE_ID" => 'INTERVOLGA.RECAPTCHA_ERROR',
                "MODULE_ID" => self::MODULE_ID,
                "ITEM_ID" => self::MODULE_ID,
                "DESCRIPTION" => $e->getMessage(),
            ));
        }
    }

    /**
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public static function OnBeforeProlog()
    {
        try {
            if (defined("ADMIN_SECTION") || !ReCaptcha::checkRecaptchaActive()) {
                return;
            }

            static::includeScriptJs();

        } catch (\Exception $e) {
            \CEventLog::Add(array(
                "SEVERITY" => "WARNING",
                "AUDIT_TYPE_ID" => 'INTERVOLGA.RECAPTCHA_ERROR',
                "MODULE_ID" => self::MODULE_ID,
                "ITEM_ID" => self::MODULE_ID,
                "DESCRIPTION" => $e->getMessage(),
            ));
        }
    }

    protected static function includeScriptJs()
    {
        // Add module options as inline script
        $recaptchaOptions = array(
            'size' => Option::get("intervolga.recaptcha", "recaptchaSize"),
            'theme' => Option::get("intervolga.recaptcha", "recaptchaTheme"),
            'type' => Option::get("intervolga.recaptcha", "recaptchaType"),
            'lang' => LANGUAGE_ID,
            'key' => ReCaptcha::getPublicKey(),
        );

        $script = "<script type='text/javascript' data-skip-moving='true'>";
        $script .= "window['recaptchaOptions']=" . \CUtil::PhpToJsObject($recaptchaOptions) . ";";
        $script .= "</script>";
        Asset::getInstance()->addString($script, false, AssetLocation::AFTER_CSS);

        // Add core JS for reCaptcha as inline script
        $scriptPath = Application::getDocumentRoot() . static::getPathJs('inline');
        $scriptCode = File::getFileContents($scriptPath);
        $scriptDef = '<script type="text/javascript" data-skip-moving="true">' . $scriptCode . '</script>';
        Asset::getInstance()->addString($scriptDef, false, AssetLocation::AFTER_CSS);

        // Add dynamic replacement script
        Asset::getInstance()->addJs(static::getPathJs('dynamic'));
    }

    /**
     * Get path to js
     *
     * @param string $fileName
     * @return string
     */
    protected static function getPathJs($fileName)
    {
        $path = "/bitrix/js/intervolga.recaptcha/";
        $path .= Asset::canUseMinifiedAssets() ? $fileName . '.min.js' : $fileName . '.js';
        return $path;
    }

    /**
     * Replace captcha images and inputs
     *
     * @param $content
     */
    public static function OnEndBufferContent(&$content)
    {
        try {
            if (defined("ADMIN_SECTION") || !ReCaptcha::checkRecaptchaActive()) {
                return;
            }
            $changedContent = preg_replace_callback(
                '/<img[^>]+?src\s*=\s*["\']([^"\']*?\/bitrix\/tools\/captcha\.php\?(captcha_code|captcha_sid)=[0-9a-z]+)["\'][^>]*?>/',
                function ($matches) {
                    $img = $matches[0];
                    $src = $matches[1];

                    $img = str_replace($src, 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7', $img);
                    $img = str_replace(array('style', 'width', 'height'), array('_style', '_width', '_height'), $img);
                    $img = str_replace('<img', '<img style="display:none"', $img);

                    return $img;
                },
                $content
            );


            $changedContent = preg_replace_callback(
                '/<input[^>]+?name\s*=[^>]*?captcha_word[^>]+?>/',
                function ($matches) {
                    $input = $matches[0];
                    $isHidden = (strpos($input, 'type="hidden"') !== false) || (strpos($input, "type='hidden'") !== false);

                    if ($input && $isHidden) {
                        return $input;
                    }

                    $uniqueId = randString(4);
                    $reCaptchaDiv = '<div id="recaptcha-' . $uniqueId . '" class="g-recaptcha"></div>';


                    if ($_POST['AJAX_CALL']) {
                        return $reCaptchaDiv;
                    } else {
                        return $reCaptchaDiv .
                        '<script type="text/javascript" data-skip-moving="true">
                        renderRecaptchaById("recaptcha-' . $uniqueId . '");
                        </script>';
                    }
                },
                $changedContent
            );


            $arSearchMessages = array(
                Loc::getMessage('INTERVOLGA_RECAPTCHA.SEARCH_TEXT_INPUT_1'),
                Loc::getMessage('INTERVOLGA_RECAPTCHA.SEARCH_TEXT_INPUT_2'),
                Loc::getMessage('INTERVOLGA_RECAPTCHA.SEARCH_TEXT_INPUT_3'),
                Loc::getMessage('INTERVOLGA_RECAPTCHA.SEARCH_TEXT_INPUT_4'),
                Loc::getMessage('INTERVOLGA_RECAPTCHA.SEARCH_TEXT_INPUT_5'),
                Loc::getMessage('INTERVOLGA_RECAPTCHA.SEARCH_TEXT_INPUT_6'),
                Loc::getMessage('INTERVOLGA_RECAPTCHA.SEARCH_TEXT_INPUT_7'),
                Loc::getMessage('INTERVOLGA_RECAPTCHA.SEARCH_TEXT_INPUT_8'),
                Loc::getMessage('INTERVOLGA_RECAPTCHA.SEARCH_TEXT_INPUT_9'),
                Loc::getMessage('INTERVOLGA_RECAPTCHA.SEARCH_TEXT_INPUT_10'),
            );
            $changedContent = str_replace($arSearchMessages, Loc::getMessage('INTERVOLGA_RECAPTCHA.REPLACE_TEXT_INPUT'), $changedContent);

            $arMessagesDelete = array(
                Loc::getMessage('INTERVOLGA_RECAPTCHA.SEARCH_TEXT_HEAD_1'),
                Loc::getMessage('INTERVOLGA_RECAPTCHA.SEARCH_TEXT_HEAD_2'),
                Loc::getMessage('INTERVOLGA_RECAPTCHA.SEARCH_TEXT_HEAD_3'),
                Loc::getMessage('INTERVOLGA_RECAPTCHA.SEARCH_TEXT_HEAD_4'),
                Loc::getMessage('INTERVOLGA_RECAPTCHA.SEARCH_TEXT_HEAD_5'),
                Loc::getMessage('INTERVOLGA_RECAPTCHA.SEARCH_TEXT_HEAD_6'),
            );
            $changedContent = str_replace($arMessagesDelete, Loc::getMessage('INTERVOLGA_RECAPTCHA.REPLACE_TEXT_HEAD'), $changedContent);


            $content = $changedContent;
        } catch (\Exception $e) {
            \CEventLog::Add(array(
                "SEVERITY" => "WARNING",
                "AUDIT_TYPE_ID" => 'INTERVOLGA.RECAPTCHA_ERROR',
                "MODULE_ID" => self::MODULE_ID,
                "ITEM_ID" => self::MODULE_ID,
                "DESCRIPTION" => $e->getMessage(),
            ));
        }
    }

    /**
     * Check reCAPTCHA guessed correct
     *
     * @param array $post
     * @return null|Boolean|String
     */
    protected static function CheckReCaptcha($post)
    {
        // No bitrix captcha code
        $captchaSid = $post['captcha_sid'] ? $post['captcha_sid'] : $post['captcha_code'];
        if (!$captchaSid) {
            return null;
        }

        // No reCaptcha code
        $reCaptchaCode = $post['g-recaptcha-response'];
        if (!$reCaptchaCode) {
            return null;
        }

        // ReCaptcha code is wrong
        if (!ReCaptcha::checkClientResponse($reCaptchaCode)) {
            return false;
        }

        $sqlHelper = Application::getConnection()->getSqlHelper();
        $codeQuery = 'SELECT CODE FROM b_captcha WHERE id="' . $sqlHelper->forSql($captchaSid) . '"';
        $queryResult = Application::getConnection()->query($codeQuery)->fetch();
        if ($queryResult && $queryResult['CODE'] && strlen($queryResult['CODE'])) {
            return $queryResult['CODE'];
        }

        return false;
    }

    /**
     * Lang message for custom Log event type
     * @return array
     */
    public static function OnEventLogGetAuditTypes()
    {
        return array('INTERVOLGA.RECAPTCHA_ERROR' => Loc::getMessage('INTERVOLGA.RECAPTCHA_ERROR'));
    }
}