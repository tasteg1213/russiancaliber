<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();

use \Bitrix\Main\Data\Cache;

$arResult['INFO'] = array();
$cache = Cache::createInstance();
if ($cache->initCache(7200, "geo_data_".$_SERVER['HTTP_HOST'])) {
    $arResult['INFO'] = $cache->getVars();
}
elseif ($cache->startDataCache()) {

    global $APPLICATION;
    $res = CIBlockElement::GetList(
        Array(),
        Array(
            "IBLOCK_ID"=>'15',
            "ACTIVE_DATE"=>"Y",
            "ACTIVE"=>"Y",
            "PROPERTY_DOMAIN_ADDRESS" => $_SERVER['HTTP_HOST']
        ),
        false,
        Array( "nPageSize" => 1 ),
        Array(
            "ID", "NAME",
            "PROPERTY_DOMAIN_ADDRESS", "PROPERTY_OFFICE_ADDRESS_REGION", "PROPERTY_REGION_ACCUSATIVE_CASE",
            "PROPERTY_EMAIL_ADDRESS", "PROPERTY_YANDEX_MAP", "PROPERTY_TEL"
        )
    );
    while($ob = $res->GetNextElement()){
        $arResult['INFO'] = $ob->GetFields();
    }

    $cache->endDataCache($arResult['INFO']);
}

return $this->IncludeComponentTemplate();