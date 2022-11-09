<?
if (\Bitrix\Main\ModuleManager::isModuleInstalled('ui'))
{
	$updater->CopyFiles("install/js", "js");
	$updater->CopyFiles("install/components", "components");
}