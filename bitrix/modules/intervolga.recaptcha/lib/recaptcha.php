<? namespace Intervolga\Recaptcha;

use Bitrix\Main\ArgumentTypeException;
use Bitrix\Main\Web\HttpClient;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Web\Json;
use Bitrix\Main\Config\Option;
use Bitrix\Main\SystemException;

Loc::loadMessages(__FILE__);

/**
 * Class ReCaptcha
 * @package Intervolga\Recaptcha
 */
class ReCaptcha
{
    const URL = 'https://www.google.com/recaptcha/api/siteverify';
    const MODULE_ID = 'intervolga.recaptcha';

    /**
     * @return bool|string
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public static function getPublicKey()
    {
        if ($key = Option::get(self::MODULE_ID, 'recaptchaPublicKey')) {
            return $key;
        }

        return false;
    }

    /**
     * @return bool|string
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public static function getSecretKey()
    {
        if ($key = Option::get(self::MODULE_ID, "recaptchaSecretKey")) {
            return $key;
        }

        return false;
    }

    /**
     * Check reCaptcha through Google reCaptcha remote server
     *
     * @param String $captchaResponse
     * @return bool
     */
    public static function checkClientResponse($captchaResponse)
    {
        try {
            if (!is_string($captchaResponse) || strlen($captchaResponse) == 0) {
                throw new \Bitrix\Main\ArgumentNullException('Missing input parameter "response"');
            }

            $data = array(
                'secret' => static::getSecretKey(),
                'response' => $captchaResponse,
            );

            $httpClient = new HttpClient();
            $response = $httpClient->post(self::URL, $data);

            if (empty($response)) {
                throw new ArgumentTypeException('Wrong argument type, "json" expected');
            }

            $response = Json::decode($response);

            if (!$response['success']) {
                if (!$response['error-codes']) {
                    throw new SystemException($response['error-codes']);
                } else {
                    throw new ArgumentTypeException('Wrong argument type, "array" expected');
                }
            }

            return true;

        } catch (\Exception $exception) {
            \CEventLog::Add(array(
                "SEVERITY" => "WARNING",
                "AUDIT_TYPE_ID" => 'INTERVOLGA.RECAPTCHA_ERROR',
                "MODULE_ID" => self::MODULE_ID,
                "ITEM_ID" => self::MODULE_ID,
                "DESCRIPTION" => $exception->getMessage(),
            ));
        }

        return false;
    }

    /**
     * Check if reCaptcha properly configured
     * 
     * @return bool
     */
    public static function checkRecaptchaActive()
    {
        return self::getSecretKey() && self::getPublicKey();
    }
}