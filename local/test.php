<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<?
$APPLICATION->IncludeComponent(
	"BKV:modelnyy_ryad.list", 
	".default", 
	array(
		"IBLOCK_ID" => "10",
		"PRODUCT_ID" => (!empty($arResult["VARIABLES"]["ELEMENT_ID"])?$arResult["VARIABLES"]["ELEMENT_ID"]:(!empty($arResult["EXTRA"]["ID"])?$arResult["EXTRA"]["ID"]:"-")),
		"IBLOCK_TYPE" => "catalog",
		"COMPONENT_TEMPLATE" => ".default",
		"PRODUCT_PRICE_CODE" => array(
			0 => "BASE",
		),
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000"
	),
	false
);
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>