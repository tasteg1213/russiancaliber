<?
$CEventManager = \Bitrix\Main\EventManager::getInstance();
$CEventManager->addEventHandler("iblock", "OnIBlockPropertyBuildList", array('PropCustom', "Element"));

AddEventHandler('main', 'OnBeforeEventSend', Array("UserReg", "CreateUserNewOrder"));
?>