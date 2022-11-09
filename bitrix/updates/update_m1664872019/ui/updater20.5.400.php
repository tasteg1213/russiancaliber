<?
if(IsModuleInstalled('ui'))
{
	$updater->CopyFiles("install/components", "components");
	//Following copy was parsed out from module installer
	$updater->CopyFiles("install/js", "js");
}
?>
