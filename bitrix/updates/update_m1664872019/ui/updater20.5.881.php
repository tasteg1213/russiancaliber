<?
if ($updater->CanUpdateDatabase() && $updater->TableExists('b_ui_entity_editor_config'))
{
	if ($DB->type == "MYSQL")
	{
		$DB->Query("
			ALTER TABLE `b_ui_entity_editor_config` 
			CHANGE `ENTITY_TYPE_ID` `ENTITY_TYPE_ID` VARCHAR(60) NOT NULL;
		");
	}
}

?><?
if(IsModuleInstalled('ui'))
{
	//Following copy was parsed out from module installer
	$updater->CopyFiles("install/js", "js");
}
?>
