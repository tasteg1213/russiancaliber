<?
if(IsModuleInstalled('fileman'))
{
	$updater->CopyFiles("install/admin", "admin");
	$updater->CopyFiles("install/js", "js");
}