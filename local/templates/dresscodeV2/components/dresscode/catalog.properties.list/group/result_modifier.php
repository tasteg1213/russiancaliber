<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$ar_res = CIBlockElement::GetByID($arParams['PRODUCT_ID'])->GetNext();
$arResult['FILTER_HINT'] = CIBlockSectionPropertyLink::GetArray( $ar_res['IBLOCK_ID'] );

