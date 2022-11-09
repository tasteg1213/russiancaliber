<?
if(IsModuleInstalled('ui'))
{
	$updater->CopyFiles("install/components", "components");
	$updater->CopyFiles("install/js", "js");
}
if($updater->CanUpdateKernel())
{
	$arToDelete = array(
		"modules/ui/install/js/ui/userfieldfactory/src/field.js",
		"modules/ui/install/js/ui/userfieldfactory/src/userfieldfactory.js",
		"modules/ui/install/js/ui/counter/ui.counter.ie.css",
	);
	foreach($arToDelete as $file)
		CUpdateSystem::DeleteDirFilesEx($_SERVER["DOCUMENT_ROOT"].$updater->kernelPath."/".$file);
}
?><?
if(IsModuleInstalled('ui'))
{
	$updater->CopyFiles("install/components", "components");
}
?>
