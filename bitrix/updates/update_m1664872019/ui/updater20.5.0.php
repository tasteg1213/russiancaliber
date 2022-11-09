<?
if(IsModuleInstalled('ui'))
{
	$updater->CopyFiles("install/components", "components");
	$updater->CopyFiles("install/js", "js");
}
if($updater->CanUpdateKernel())
{
	$arToDelete = array(
		"modules/ui/install/js/ui/vue/vendor/v2/dist/dev.vue.bundle.js",
		"modules/ui/install/js/ui/vue/vendor/v2/dist/dev.vue.bundle.js.map",
		"modules/ui/install/js/ui/vue/vendor/v2/dist/vue.bundle.js",
		"modules/ui/install/js/ui/vue/vendor/v2/dist/vue.bundle.js.map",
		"modules/ui/install/js/ui/vue/vendor/v2/src/dev/bundle.config.js",
		"modules/ui/install/js/ui/vue/vendor/v2/src/dev/config.php",
		"modules/ui/install/js/ui/vue/vendor/v2/src/dev/vue-dev.js",
		"modules/ui/install/js/ui/vue/vendor/v2/src/prod/bundle.config.js",
		"modules/ui/install/js/ui/vue/vendor/v2/src/prod/config.php",
		"modules/ui/install/js/ui/vue/vendor/v2/src/prod/vue.js",
	);
	foreach($arToDelete as $file)
		CUpdateSystem::DeleteDirFilesEx($_SERVER["DOCUMENT_ROOT"].$updater->kernelPath."/".$file);
}
?>
