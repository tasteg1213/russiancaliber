<?
if(IsModuleInstalled('ui'))
{
	$updater->CopyFiles("install/js", "js");
	$updater->CopyFiles("install/components", "components");

	if($updater->CanUpdateKernel())
	{
		$arToDelete = array(
			"modules/ui/install/components/bitrix/ui.info.helper/templates/.default/template.php",
			"components/bitrix/ui.info.helper/templates/.default/template.php",
		);
		foreach($arToDelete as $file)
			CUpdateSystem::DeleteDirFilesEx($_SERVER["DOCUMENT_ROOT"].$updater->kernelPath."/".$file);
	}
}
?>
