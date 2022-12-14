<?php

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\ModuleManager;
use Bitrix\Main\SystemException;

Loc::loadMessages(__FILE__);

if (class_exists("ui"))
{
	return;
}

class UI extends \CModule
{
	public $MODULE_ID = 'ui';
	public $MODULE_VERSION;
	public $MODULE_VERSION_DATE;
	public $MODULE_NAME;
	public $MODULE_DESCRIPTION;
	private $errors;

	public function __construct()
	{
		$arModuleVersion = array();

		include(__DIR__.'/version.php');

		if (is_array($arModuleVersion) && array_key_exists("VERSION", $arModuleVersion))
		{
			$this->MODULE_VERSION = $arModuleVersion["VERSION"];
			$this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];
		}

		$this->MODULE_NAME = Loc::getMessage("UI_INSTALL_NAME");
		$this->MODULE_DESCRIPTION = Loc::getMessage("UI_INSTALL_DESCRIPTION");
	}

	function doInstall()
	{
		$this->installDB();
		$this->installFiles();
		$this->installEvents();
	}

	function doUninstall()
	{

	}

	function installFiles()
	{
		CopyDirFiles(
			$_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/".$this->MODULE_ID."/install/js",
			$_SERVER["DOCUMENT_ROOT"]."/bitrix/js", true, true
		);
		CopyDirFiles(
			$_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/".$this->MODULE_ID."/install/components",
			$_SERVER["DOCUMENT_ROOT"]."/bitrix/components", true, true
		);

		return true;
	}

	function installDB()
	{
		global $DB;

		$this->errors = false;
		if (!$DB->Query("SELECT 'x' FROM b_ui_entity_editor_config", true))
		{
			$this->errors = $DB->RunSQLBatch(
				$_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/ui/install/db/mysql/install.sql'
			);
		}

		if (is_array($this->errors))
		{
			throw new SystemException(implode(' ', $this->errors));
		}

		ModuleManager::registerModule($this->MODULE_ID);

		\CAgent::addAgent('\Bitrix\UI\FileUploader\TempFileAgent::clearOldRecords();', 'ui', 'N', 1800);

		return true;
	}

	function installEvents()
	{
		return true;
	}

	function uninstallDB()
	{
		global $DB;

		$this->errors = $DB->RunSQLBatch(
			$_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/ui/install/db/mysql/uninstall.sql'
		);

		if (is_array($this->errors))
		{
			throw new SystemException(implode(' ', $this->errors));
		}

		return true;
	}

	function uninstallEvents()
	{
		return true;
	}

	function uninstallFiles()
	{
		return true;
	}

}
