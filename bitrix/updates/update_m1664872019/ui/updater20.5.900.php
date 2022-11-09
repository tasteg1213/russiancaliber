<?
if(IsModuleInstalled('ui'))
{
	$updater->CopyFiles("install/components", "components");
	//Following copy was parsed out from module installer
	$updater->CopyFiles("install/js", "js");
}
if(\Bitrix\Main\Loader::includeModule('crm'))
{
    \CAgent::AddAgent('\\Bitrix\\Crm\\SiteButton\\Manager::updateScriptCacheAgent();', "crm", "N", 60, "", "Y", \ConvertTimeStamp(time()+\CTimeZone::GetOffset()+600, "FULL"));
}
?>
