<?
if(IsModuleInstalled('ui'))
{
	$updater->CopyFiles("install/components", "components");
	$updater->CopyFiles("install/js", "js");
}

if($updater->CanUpdateDatabase())
{
	if (!$DB->TableExists('b_ui_entity_editor_config'))
	{
		$updater->Query('
			CREATE TABLE b_ui_entity_editor_config(
				ID INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
				CATEGORY VARCHAR(20) NOT NULL,
				ENTITY_TYPE_ID VARCHAR(50) NOT NULL,
				NAME VARCHAR(100) NOT NULL,
				CONFIG TEXT NOT NULL,
				COMMON VARCHAR(1) NOT NULL,
				PRIMARY KEY (ID)
			)
		');
	}

	if (!$DB->TableExists('b_ui_entity_editor_config_ac'))
	{
		$updater->Query('
			CREATE TABLE b_ui_entity_editor_config_ac(
				ID INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
				ACCESS_CODE VARCHAR(10) NOT NULL,
				CONFIG_ID INTEGER(10) NOT NULL,
				PRIMARY KEY (ID)
			)
		');
	}

	if ($DB->TableExists('b_ui_entity_editor_config'))
	{
		if (!$DB->IndexExists('b_ui_entity_editor_config', ['ENTITY_TYPE_ID'], true))
		{
			$updater->Query('CREATE INDEX ENTITY_TYPE_ID ON b_ui_entity_editor_config(ENTITY_TYPE_ID)');
		}
		if (!$DB->IndexExists('b_ui_entity_editor_config', ['CATEGORY'], true))
		{
			$updater->Query('CREATE INDEX CATEGORY ON b_ui_entity_editor_config(CATEGORY)');
		}
	}

	if ($DB->TableExists('b_ui_entity_editor_config_ac'))
	{
		if (!$DB->IndexExists('b_ui_entity_editor_config_ac', ['ACCESS_CODE'], true))
		{
			$updater->Query('CREATE INDEX ACCESS_CODE ON b_ui_entity_editor_config_ac(ACCESS_CODE)');
		}
		if (!$DB->IndexExists('b_ui_entity_editor_config_ac', ['CONFIG_ID'], true))
		{
			$updater->Query('CREATE INDEX CONFIG_ID ON b_ui_entity_editor_config_ac(CONFIG_ID)');
		}
	}
}
?><?
if(IsModuleInstalled('ui'))
{
	//Following copy was parsed out from module installer
	$updater->CopyFiles("install/js", "js");
}
if($updater->CanUpdateKernel())
{
	$arToDelete = array(
		"modules/ui/install/js/ui/icons/service/images/ui-service-toloka.svg",
		"modules/ui/install/js/ui/icons/service/images/ui-service-ya-toloka.png",
	);
	foreach($arToDelete as $file)
		CUpdateSystem::DeleteDirFilesEx($_SERVER["DOCUMENT_ROOT"].$updater->kernelPath."/".$file);
}
?>
