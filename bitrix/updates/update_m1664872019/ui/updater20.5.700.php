<?
if(IsModuleInstalled('ui'))
{
	$updater->CopyFiles("install/components", "components");
	//Following copy was parsed out from module installer
	$updater->CopyFiles("install/js", "js");
}

if($updater->CanUpdateKernel())
{
	$arToDelete = array(
		"modules/ui/install/js/ui/alerts/ui.alerts.css",
		"modules/ui/install/js/ui/alerts/ui.alerts.js",
	);
	foreach($arToDelete as $file)
		CUpdateSystem::DeleteDirFilesEx($_SERVER["DOCUMENT_ROOT"].$updater->kernelPath."/".$file);
}