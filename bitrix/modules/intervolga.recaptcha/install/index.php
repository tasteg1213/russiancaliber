<?
use Bitrix\Main;
use Bitrix\Main\EventManager;
use Bitrix\Main\IO\File;
use Bitrix\Main\IO\Directory;

IncludeModuleLangFile(__FILE__);

Class intervolga_recaptcha extends CModule
{
    var $MODULE_ID = 'intervolga.recaptcha';
    var $MODULE_VERSION;
    var $MODULE_VERSION_DATE;
    var $MODULE_NAME;
    var $MODULE_DESCRIPTION;

    public function __construct()
    {
        $arModuleVersion = array();
        include(dirname(__FILE__) . '/version.php');

        $this->MODULE_VERSION = $arModuleVersion['VERSION'];
        $this->MODULE_VERSION_DATE = $arModuleVersion['VERSION_DATE'];
        $this->MODULE_NAME = GetMessage('INTERVOLGA_RECAPTCHA.MODULE_NAME');
        $this->MODULE_DESCRIPTION = GetMessage('INTERVOLGA_RECAPTCHA.MODULE_DESC');
        $this->PARTNER_NAME = GetMessage('INTERVOLGA_RECAPTCHA.PARTNER_NAME');
        $this->PARTNER_URI = GetMessage('INTERVOLGA_RECAPTCHA.PARTNER_URI');
    }

    function DoInstall()
    {
        try {
            $this->InstallFiles();
            $this->InstallDB();
            $this->InstallEvents();
            Main\ModuleManager::registerModule($this->MODULE_ID);
        } catch (\Exception $e) {
            /**
             * @var \CMAin
             */
            global $APPLICATION;
            $APPLICATION->ThrowException($e->getMessage());

            return false;
        }

        return true;
    }

    function DoUninstall()
    {
        try {
            Main\ModuleManager::unRegisterModule($this->MODULE_ID);
            $this->UnInstallEvents();
            $this->UnInstallDB();
            $this->UnInstallFiles();
        } catch (\Exception $e) {
            global $APPLICATION;
            $APPLICATION->ThrowException($e->getMessage());
        }
    }

    function InstallEvents()
    {
        EventManager::getInstance()->registerEventHandler(
            'main', 'OnPageStart',
            $this->MODULE_ID, 'Intervolga\Recaptcha\EventHandlers\Main', 'OnPageStart'
        );
        EventManager::getInstance()->registerEventHandler(
            'main', 'OnBeforeProlog',
            $this->MODULE_ID, 'Intervolga\Recaptcha\EventHandlers\Main', 'OnBeforeProlog'
        );
        EventManager::getInstance()->registerEventHandler(
            'main', 'OnEndBufferContent',
            $this->MODULE_ID, 'Intervolga\Recaptcha\EventHandlers\Main', 'OnEndBufferContent'
        );
        EventManager::getInstance()->registerEventHandler(
            'main', 'OnEventLogGetAuditTypes',
            $this->MODULE_ID, 'Intervolga\Recaptcha\EventHandlers\Main', 'OnEventLogGetAuditTypes'
        );

        return true;
    }

    function UnInstallEvents()
    {
        EventManager::getInstance()->unRegisterEventHandler(
            'main', 'OnPageStart',
            $this->MODULE_ID, 'Intervolga\Recaptcha\EventHandlers\Main', 'OnPageStart'
        );
        EventManager::getInstance()->unRegisterEventHandler(
            'main', 'OnBeforeProlog',
            $this->MODULE_ID, 'Intervolga\Recaptcha\EventHandlers\Main', 'OnBeforeProlog'
        );
        EventManager::getInstance()->unRegisterEventHandler(
            'main', 'OnEndBufferContent',
            $this->MODULE_ID, 'Intervolga\Recaptcha\EventHandlers\Main', 'OnEndBufferContent'
        );
        EventManager::getInstance()->unRegisterEventHandler(
            'main', 'OnEventLogGetAuditTypes',
            $this->MODULE_ID, 'Intervolga\Recaptcha\EventHandlers\Main', 'OnEventLogGetAuditTypes'
        );

        return true;
    }

    function InstallDB()
    {
        return true;
    }

    function UnInstallDB()
    {
        return true;
    }

    function InstallFiles()
    {
        if (Directory::isDirectoryExists(__DIR__ . '/js')) {
            CopyDirFiles(__DIR__ . '/js', Main\Application::getDocumentRoot() . '/bitrix/js/' . $this->MODULE_ID, true, true);
        }

        self::changeLangFiles();

        $arLang = array(
            'ru', 'en'
        );

        foreach ($arLang as $lang) {
            if ($path = self::getPathExistFileUserLang($lang)) {
                if (!self::isIdenticalFiles($lang, $path)) {
                    self::mergeFilesContent($lang, $path);
                }
            } else {
                CopyDirFiles(
                    dirname(__DIR__) . '/public/' . $lang,
                    $_SERVER['DOCUMENT_ROOT'] . '/bitrix/php_interface/user_lang/' . $lang,
                    true, true
                );
            }
        }

        return true;
    }

    function UnInstallFiles()
    {
        if (Directory::isDirectoryExists(Main\Application::getDocumentRoot() . '/bitrix/js/' . $this->MODULE_ID)) {
            DeleteDirFilesEx('/bitrix/js/' . $this->MODULE_ID);
        }
    }

    /**
     * Get path
     *
     * @param $lang
     * @return string
     */
    private static function getPathModuleFiles($lang)
    {
        return dirname(__DIR__) . '/public/' . $lang . '/lang.php';
    }

    /**
     * Compare files
     *
     * @param $lang
     * @param $path
     * @return bool
     */
    private static function isIdenticalFiles($lang, $path)
    {
        $md5ExistFile = md5_file($path);
        $md5ModuleFile = md5_file(self::getPathModuleFiles($lang));

        if ($md5ExistFile == $md5ModuleFile) {
            return true;
        }

        return false;
    }

    /**
     * Merge files
     *
     * @param $lang
     * @param $path
     * @return bool
     */
    private static function mergeFilesContent($lang, $path)
    {
        $content = File::getFileContents($path);
        $content .= File::getFileContents(self::getPathModuleFiles($lang));
        $content = str_replace(array('<?', '?>', '<?php'), '', $content);
        $content = '<?' . $content;

        if (strlen($content) > 0) {
            File::putFileContents($path, $content);
        }

        return true;
    }

    /**
     * @param $lang
     * @return bool|string
     */
    private static function getPathExistFileUserLang($lang)
    {
        if (File::isFileExists($path = $_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/user_lang/' . $lang . '/lang.php')) {
            return $path;
        } elseif (File::isFileExists($path = $_SERVER['DOCUMENT_ROOT'] . '/bitrix/php_interface/user_lang/' . $lang . '/lang.php')) {
            return $path;
        }

        return false;
    }

    /**
     * @return bool
     */
    private static function changeLangFiles()
    {
        $arFiles = array(
            '/local/templates/.default/components/bitrix/catalog/.articles/bitrix/forum.topic.reviews/.default/lang/ru/template.php',
            '/local/templates/.default/components/bitrix/forum.topic.reviews/default/lang/ru/template.php',
            '/local/templates/.default/components/bitrix/voting.form/default/lang/ru/template.php',
            '/local/templates/.default/components/bitrix/iblock.element.add.form/default/lang/ru/template.php',
            '/local/templates/.default/components/bitrix/main.feedback/default/lang/ru/template.php',
            '/local/templates/.default/components/bitrix/main.register/default/lang/ru/template.php',
            '/local/templates/.default/components/bitrix/subscribe.edit/default/lang/ru/template.php',
            '/local/templates/.default/components/bitrix/system.auth.registration/.default/lang/ru/template.php',
            '/local/templates/.default/components/bitrix/voting.form/default/lang/ru/template.php',
        );

        $arReplace = array(
            'SEARCH' => array(
                GetMessage('INTERVOLGA_RECAPTCHA.SEARCH_1'),
                GetMessage('INTERVOLGA_RECAPTCHA.SEARCH_2'),
            ),
            'REPLACE' => array(
                GetMessage('INTERVOLGA_RECAPTCHA.REPLACE_1'),
                GetMessage('INTERVOLGA_RECAPTCHA.REPLACE_2'),
            )
        );

        foreach ($arFiles as $file) {
            $path = $_SERVER['DOCUMENT_ROOT'] . $file;

            if (File::isFileExists($path)) {
                $content = File::getFileContents($path);

                if (strlen($content) > 0) {
                    File::putFileContents(
                        $path,
                        str_replace(
                            $arReplace['SEARCH'],
                            $arReplace['REPLACE'],
                            $content
                        )
                    );
                }
            }
        }

        return true;
    }
}

?>