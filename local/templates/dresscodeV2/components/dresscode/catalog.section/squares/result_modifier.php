<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();



$request = Bitrix\Main\Application::getInstance()->getContext()->getRequest();
$val = $request->getQuery("em");
if (!empty($val)) {
    $arResult["MOVE_TO"] = $val;
}