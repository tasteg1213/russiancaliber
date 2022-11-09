<?
$CEventManager = \Bitrix\Main\EventManager::getInstance();
$CEventManager->addEventHandler("iblock", "OnIBlockPropertyBuildList", array('PropCustom', "Element"));

AddEventHandler('main', 'OnBeforeEventSend', Array("UserReg", "CreateUserNewOrder"));
AddEventHandler('main', 'OnBeforeEventSend', Array("UserReg", "SendEmail"));

// AddEventHandler("main", "OnBeforeProlog", "MyOnBeforePrologHandler");

AddEventHandler("sale", "OnOrderNewSendEmail", "ModifyOrderSaleMailsClientId");


?>