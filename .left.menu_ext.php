<? 
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); 
global $APPLICATION;
$aMenuLinksExt = $APPLICATION->IncludeComponent(
	"dresscode_castom:menu.sections",
	"", 
	array(
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "10",
		"DEPTH_LEVEL" => "3",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600000",
		"IS_SEF" => "N",
		"ID" => $_REQUEST["ID"],
		"SECTION_URL" => ""
	),
	false
); 
$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt); 
?>