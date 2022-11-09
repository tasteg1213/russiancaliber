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
		"modules/ui/install/js/ui/timeline/src/animation/itemhide.js",
		"modules/ui/install/js/ui/timeline/src/animation/itempin.js",
		"modules/ui/install/js/ui/timeline/src/animation/itemshow.js",
		"modules/ui/install/components/bitrix/ui.feedback.form/templates/.default/lang/de/template.php",
		"components/bitrix/ui.feedback.form/templates/.default/lang/de/template.php",
		"modules/ui/install/components/bitrix/ui.feedback.form/templates/.default/lang/en/template.php",
		"components/bitrix/ui.feedback.form/templates/.default/lang/en/template.php",
		"modules/ui/install/components/bitrix/ui.feedback.form/templates/.default/lang/ru/template.php",
		"components/bitrix/ui.feedback.form/templates/.default/lang/ru/template.php",
		"modules/ui/install/components/bitrix/ui.feedback.form/templates/.default/lang/ua/template.php",
		"components/bitrix/ui.feedback.form/templates/.default/lang/ua/template.php",
	);
	foreach($arToDelete as $file)
		CUpdateSystem::DeleteDirFilesEx($_SERVER["DOCUMENT_ROOT"].$updater->kernelPath."/".$file);
}
?>