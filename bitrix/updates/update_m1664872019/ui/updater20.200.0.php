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
		"modules/ui/install/js/ui/tilegrid/templates/original/item.js",
		"modules/ui/install/js/ui/tilegrid/templates/original/style.css",
		"modules/ui/install/js/ui/entity-selector/src/css/images/recent-tab-selected-icon.svg",
	);
	foreach($arToDelete as $file)
		CUpdateSystem::DeleteDirFilesEx($_SERVER["DOCUMENT_ROOT"].$updater->kernelPath."/".$file);
}
?>
