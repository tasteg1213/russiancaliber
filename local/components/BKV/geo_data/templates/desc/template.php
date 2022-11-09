<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);

$meta_des = $APPLICATION->GetPageProperty("description");
$meta_des = str_replace("по Москве", 'по '.$arResult['INFO']['PROPERTY_REGION_ACCUSATIVE_CASE_VALUE'], $meta_des);
$APPLICATION->SetPageProperty("description", $meta_des);