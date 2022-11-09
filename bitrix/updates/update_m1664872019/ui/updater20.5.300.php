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
		"modules/ui/install/js/ui/cntr/config.php",
		"modules/ui/install/js/ui/cntr/ui.cntr.css",
		"modules/ui/install/js/ui/cntr/ui.cntr.js",
	);
	foreach($arToDelete as $file)
		CUpdateSystem::DeleteDirFilesEx($_SERVER["DOCUMENT_ROOT"].$updater->kernelPath."/".$file);
}
?>
