<?

class UserReg
{

    function SendEmail($arFields, $arTemplate){
        if ($arFields['ACTION_TYPE'] == 'Быстрый заказ' && $arFields['EMAIL'] == 'unregistered@unregistered.com') {
            return false;
        }
    }

    function CreateUserNewOrder($arFields, $arTemplate)
    {
        if ($arTemplate["EVENT_NAME"] == "USER_INFO") {
            return false;
        }
    }

    function infoNewUser($arFields)
    {

        if ($_REQUEST["act"] == "orderMake") {
            $FIO = array();
            $arFioId = array(20, 31);

            foreach ($arFioId as $id) {
                if (isset($_REQUEST["ORDER_PROP_{$id}"])) {
                    $FIO = explode(" ", $_REQUEST["ORDER_PROP_{$id}"]);
                    break;
                }
            }


            $arEventFields = array(
                "NAME" => !empty($arFields["NAME"]) ? $arFields["NAME"] : utf8win1251($FIO[0]),
                "LAST_NAME" => !empty($arFields["LAST_NAME"]) ? $arFields["LAST_NAME"] : utf8win1251($FIO[1]),
                "EMAIL" => $arFields["EMAIL"],
                "LOGIN" => $arFields["LOGIN"],
                "PASSWORD" => $arFields["PASSWORD"],
            );

            CEvent::Send("NEW_USER_REG", array(SITE_ID), $arEventFields, "N", 77);
        }
    }
}


class PropCustom extends CUserTypeIBlockElement
{
    public static function Element()
    {
        return array(
            "PROPERTY_TYPE" => "E",
            "USER_TYPE" => "ELEMENT_MULTI",
            "DESCRIPTION" => "Привязка к элементам (доп. название, сортировка)",
            "MULTIPLE" => "N",
            "GetPropertyFieldHtml" => array(__CLASS__, "GetPropertyFieldHtml"),
            "GetPropertyFieldHtmlMulty" => array(__CLASS__, "GetPropertyFieldHtmlMulty"),
            /*
                         "GetAdminListViewHTML" => array(__CLASS__,"GetAdminListViewHTML"),
                         "GetPublicViewHTML" => array(__CLASS__, "GetPublicViewHTML"),
                         "GetPublicEditHTML" => array(__CLASS__, "GetPublicEditHTML"),
                         "GetAdminFilterHTML" => array(__CLASS__,'GetAdminFilterHTML'),
                         "GetSettingsHTML" => array(__CLASS__,'GetSettingsHTML'),
                         "PrepareSettings" => array(__CLASS__,'PrepareSettings'),
                         "AddFilterFields" => array(__CLASS__,'AddFilterFields'),
                         "GetPublicFilterHTML" => array(__CLASS__,'GetPublicFilterHTML'),*/

        );

    }


    public static function GetPropertyFieldHtmlMulty($arProperty, $value, $strHTMLControlName)
    {
        $valueOld = $value;
        $max_n = 0;
        $values = array();
        if (is_array($value)) {
            foreach ($value as $property_value_id => $arValue) {
                if (is_array($arValue))
                    $values[$property_value_id] = $arValue["VALUE"];
                else
                    $values[$property_value_id] = $arValue;

                if (preg_match("/^n(\\d+)$/", $property_value_id, $match)) {
                    if ($match[1] > $max_n)
                        $max_n = intval($match[1]);
                }
            }
        }


        if (end($values) != "" || substr(key($values), 0, 1) != "n") {
            $values["n" . ($max_n + 1)] = "";
        }

        $name = $strHTMLControlName["VALUE"] . "VALUE";
        $id_block = md5($strHTMLControlName["VALUE"]);
        $html = '<table cellpadding="0" cellspacing="0" border="0" class="nopadding" width="100%" id="tb' . md5($name) . '">';
        foreach ($values as $property_value_id => $value) {

            $nameInpunt = htmlspecialcharsbx($strHTMLControlName["VALUE"] . '[' . $property_value_id . '][VALUE]');
            $nameDiscription = htmlspecialcharsbx($strHTMLControlName["VALUE"] . '[' . $property_value_id . '][DESCRIPTION]');


            if (!empty($value) && $property_value_id > 0) {

                $product = CIBlockElement::GetByID($value);
                $arrProduct = $product->Fetch();
                $prod = '<a href="/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=' . (int)$arProperty["LINK_IBLOCK_ID"] . '&type=info&ID=' . $arrProduct["ID"] . '&lang=' . LANGUAGE_ID . '&find_section_section=' . $arrProduct["IBLOCK_SECTION_ID"] . '&form_element_14_active_tab=edit1"><b>' . $arrProduct["NAME"] . '</b></a>';
            }

            $sort = "-";
            $short_name = "-";
            if (!empty(trim($valueOld[$property_value_id]["DESCRIPTION"]))) {

                $DESCRIPTION = str_replace("\"", "'", trim($valueOld[$property_value_id]["DESCRIPTION"]));

                $format = CUtil::JsObjectToPhp($DESCRIPTION);


                if ($format["SORT"]) {
                    $sort = $format["SORT"];
                }
                if ($format["SHORT_NAME"]) {
                    $short_name = $format["SHORT_NAME"];
                }
            }


            $html .= '<tr><td>';

            $windowTableId = 'iblockprop-' . \Bitrix\Iblock\PropertyTable::TYPE_ELEMENT . '-' . $arProperty['ID'] . '-' . $arProperty['LINK_IBLOCK_ID'];
            $fixIBlock = $arProperty["LINK_IBLOCK_ID"] > 0;


            $html .= '     
                        <div id="element_' . $id_block . '" class="product_model"> ';



            if(!empty($value)){
                $html .=  '<div class="product_model_name">
                                  <span>Товар: </span><span id="sp_' . $strHTMLControlName["VALUE"] . '" >
                                  ' . $prod . '
                                  </span>
                            </div>';
            }



            $html .= '       <span>                
                                <input type="text" name="' . $nameInpunt . '" id="' . $nameInpunt . '" value="' . $value . '" size="5">' .
                '<input type="button" value="..." onClick="jsUtils.OpenWindow(\'iblock_element_search.php?lang=' . LANGUAGE_ID . '&amp;IBLOCK_ID=' . (int)$arProperty["LINK_IBLOCK_ID"] . '&amp;n=' . urlencode($nameInpunt) . ($fixIBlock ? '&amp;iblockfix=y' : '') . '&amp;tableId=' . $windowTableId . '\', 900, 700);">' .
                '&nbsp;
                            </span>
                            <span>
                                <input class="DESC" name="' . $nameDiscription . ' " type="hidden" value="' . $DESCRIPTION . '">
                               <span>|</span>
                                <span>
                                    <label>Сортировка:</label>
                                    <input class="sort"  oninput="jsUtils.upadteSort(event,\'' . $id_block . '\',this);" name="sort" type="text" value="' . trim($sort) . '">
                                </span>  
                                 <span>|</span>
                                 <span> 
                                    <label>Короткое название:</label>
                                    <input class="short_name" oninput="jsUtils.upadteShortName(event,\'' . $id_block . '\',this);" name="short_name" type="text" value="' . trim($short_name) . '">
                                </span>
                            </span>
                            <span id="del_row' . $id_block . '" data-id_btn="' . $id_block . '"  onClick="jsUtils.dellRow(\'' . $id_block . '\');" class="del_row"><b>Удалить</b></span>
                        </div>
                        ';

            $html .= '</td></tr>';
        }
        $html .= '</table>';

        $html .= '<input type="button" value="' . \Bitrix\Main\Localization\Loc::getMessage("IBLOCK_PROP_ELEMENT_LIST_ADD") . '" onClick="jsUtils.addNewRow(\'tb' . md5($name) . '\', -1);">';

        return $html;
    }


    function GetPropertyFieldHtml($arProperty, $arValues, $strHTMLControlName)
    {

        //PROP[190][n2][DESCRIPTION]

        CJSCore::Init();

        $id_block = md5($strHTMLControlName["VALUE"]);

        if ($arValues["VALUE"]) {
            $product = CIBlockElement::GetByID($arValues["VALUE"]);
            $arrProduct = $product->Fetch();
            $prod = '<a href="/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=' . (int)$arProperty["LINK_IBLOCK_ID"] . '&type=info&ID=' . $arrProduct["ID"] . '&lang=' . LANGUAGE_ID . '&find_section_section=' . $arrProduct["IBLOCK_SECTION_ID"] . '&form_element_14_active_tab=edit1"><b>' . $arrProduct["NAME"] . '</b></a>';
        }


        if (trim($arValues["DESCRIPTION"])) {

            $DESCRIPTION = str_replace("\"", "'", trim($arValues["DESCRIPTION"]));

            $format = CUtil::JsObjectToPhp($DESCRIPTION);

            $sort = "-";
            $short_name = "-";
            if ($format["SORT"]) {
                $sort = $format["SORT"];
            }
            if ($format["SHORT_NAME"]) {
                $short_name = $format["SHORT_NAME"];
            }
        }

        $windowTableId = 'iblockprop-' . \Bitrix\Iblock\PropertyTable::TYPE_ELEMENT . '-' . $arProperty['ID'] . '-' . $arProperty['LINK_IBLOCK_ID'];
        $fixIBlock = $arProperty["LINK_IBLOCK_ID"] > 0;
        $nameDiscription = htmlspecialcharsbx($strHTMLControlName["DESCRIPTION"]);
        $html = "";


        $html .= '     
        <div id="element_' . $id_block . '" class="product_model">
             <div class="product_model_name">
                  <span>Товар: </span><span id="sp_' . $strHTMLControlName["VALUE"] . '" >
                  ' . $prod . '
                  </span>
            </div>
            <span>                   
                <input type="text" name="' . htmlspecialcharsbx($strHTMLControlName["VALUE"]) . '" id="' . $strHTMLControlName["VALUE"] . '" value="' . $arValues["VALUE"] . '" size="5">' .
            '<input type="button" value="..." onClick="jsUtils.OpenWindow(\'iblock_element_search.php?lang=' . LANGUAGE_ID . '&amp;IBLOCK_ID=' . (int)$arProperty["LINK_IBLOCK_ID"] . '&amp;n=' . urlencode($strHTMLControlName["VALUE"]) . ($fixIBlock ? '&amp;iblockfix=y' : '') . '&amp;tableId=' . $windowTableId . '\', 900, 700);">' .
            '&nbsp;
            </span>
            <span>
                <input class="DESC" name="' . $nameDiscription . '" type="hidden" value="' . $DESCRIPTION . '">
               <span>|</span>
                <span>
                    <label>Сортировка:</label>
                    <input class="sort"  oninput="jsUtils.upadteSort(event,\'' . $id_block . '\',this);" name="sort" type="text" value="' . trim($sort) . '">
                </span>  
                 <span>|</span>
                 <span> 
                    <label>Короткое название:</label>
                    <input class="short_name" oninput="jsUtils.upadteShortName(event,\'' . $id_block . '\',this);" name="short_name" type="text" value="' . trim($short_name) . '">
                </span>
            </span>
            <span id="del_row' . $id_block . '" data-id_btn="' . $id_block . '"  onClick="jsUtils.dellRow(\'' . $id_block . '\');" class="del_row"><b>Удалить</b></span>
        </div>
        ';

        return $html;
    }

}

function MyOnBeforePrologHandler(){
    // Bitrix\Main\Diag\Debug
    global $USER;
    global $APPLICATION;

//use \Bitrix\Main\Loader::includeModule('sale');


    $dir = $APPLICATION->GetCurDir();
    $dir = reset(array_filter(explode("/", $dir)));

    if ($dir == "testagent") {
        if (!\Bitrix\Main\Loader::includeModule("sale")) return;

//        if (!isset($CLIENT_MC_ID) || empty($CLIENT_MC_ID))
//            $CLIENT_MC_ID = "NOT DETECT";


//        $orderId = 240;


//        $order = Bitrix\Sale\Order::load($orderId);




//        echo \Bitrix\Main\Localization\Loc::getMessage("INIT_MESS_DELIVERY");
//        foreach ($paymentCollection as $k => $v){
//            echo "<pre>";
//            print_r($k);
//            echo "<br>";
//            print_r($v);
//            echo "</pre>";
//        }
//    )

//echo "<pre>";
//print_r(get_class_methods($paymentCollection->current()));


//print_r();

//echo "</pre>";

    }

}

function setElementStatus ($mode = ""){
    CModule::IncludeModule('iblock');
    $iblockId = 10;


    $arFilter = Array("IBLOCK_ID"=>IntVal($iblockId), "ACTIVE"=>"Y");
    $arSelect = Array("ID", "NAME", "CURRENCY", "IBLOCK_ID", "CATALOG_AVAILABLE", "PROPERTY_*");
    $res = CIBlockElement::GetList(Array(), $arFilter, false, /*Array("nPageSize"=>20)*/ false, $arSelect);

    while($ob = $res->GetNextElement()){
        $arFields = $ob->GetFields();
        $arProps = $ob->GetProperties();

        $elementPrice  = CPrice::GetBasePrice($arFields["ID"]);

        // if ($mode == "debug") {
        //     $tmp = array(
        //         "ID" => $arFields["ID"],
        //         "NAME" => $arFields["NAME"],
        //         "AVAILABLE" => $arFields["CATALOG_AVAILABLE"],
        //         "QUANTITY" => $arFields["CATALOG_QUANTITY"],
        //         "PRICE" => $elementPrice,
        //         "STATUS" => reset($arProps["OFFERS"]["VALUE_ENUM_ID"])
        //     );
        // }


        if (!empty($arFields) && !empty($arProps)){
            if ($arFields["CATALOG_QUANTITY"] > 0 ){
                if ((int) $arFields["CATALOG_PURCHASING_PRICE"] > 0 && !empty($arFields["CATALOG_PURCHASING_PRICE"]))
                    $sort = 1;
                else
                    $sort = 2;
            }else{
                if (reset($arProps["OFFERS"]["VALUE_ENUM_ID"]) !== "211"){
                    if((int) $elementPrice["PRICE"] > 0 && !empty($elementPrice["PRICE"]))
                        $sort = 3;
                    else
                        $sort = 4;
                }else {
                    if ((int)$elementPrice["PRICE"] > 0 && !empty($elementPrice["PRICE"]))
                        $sort = 5;
                    else
                        $sort = 6;
                }
            }
        }

        CIBlockElement::SetPropertyValuesEx($arFields["ID"], $iblockId, array("ELEMEN_SORT_TURN" => $sort));

        // if ($mode == "debug") {
        //     $tmp["SORT"] = $sort;
        //     echo "<pre>";
        //     print_r($tmp);
        //     echo "</pre>";
        // }
    }

    return 'setElementStatus();';
}


function ModifyOrderSaleMailsClientId($orderID, &$eventName, &$arFields)
{
    $order = Bitrix\Sale\Order::load($orderID);
    $user = $order->getUserId();
    $propPerson = $order->getPersonTypeId();
    $request = Bitrix\Main\Application::getInstance()->getContext()->getRequest();




    if ($request["act"] == "fastBack" || $request["act"] ==  "sendFastForm"){
        $CLIENT_MC_ID = $request["CLIENT_MC_ID"];
        $actionType = Bitrix\Main\Localization\Loc::getMessage("FAST_ORDER");

        if ($request["act"] == "sendFastForm")
            $propsToStr = "Ф.И.О: ".iconv("UTF-8", "windows-1251", $request["basket-form-name"])."<br> Телефон ".$request["basket-form-telephone"];
        elseif ($request["act"] ==  "fastBack")
            $propsToStr = "Ф.И.О: ".iconv("UTF-8", "windows-1251", $request["name"])."<br> Телефон ".$request["phone"]."<br> Сообщение ".iconv("UTF-8", "windows-1251", $request["message"]);

    }else{
        if ($propPerson == 3){
            $mcPropId = 39;
            $personType = Bitrix\Main\Localization\Loc::getMessage("INIT_MESS_PERSON_TYPE_3");
        }elseif ($propPerson == 4){
            $mcPropId = 40;
            $personType = Bitrix\Main\Localization\Loc::getMessage("INIT_MESS_PERSON_TYPE_4");

        }
        $CLIENT_MC_ID = $order->getPropertyCollection()->getItemByOrderPropertyId($mcPropId)->getValue();
        $actionType = Bitrix\Main\Localization\Loc::getMessage("CLASSIC_ORDER");
    }

    $flag = "false";
    if ($request["act"] == "orderMake") {
        $propsToStr = "";
        $list = $request->getQueryList()->toArray();

        foreach ($list as $key => $val) {
            $keyPos = strpos($key, "ORDER_PROP_");
            if ($keyPos === false || empty($val)){
                continue;
            }else{
                $fKey = str_replace("ORDER_PROP_", "", $key);
                $orderProps = $order->getPropertyCollection()->getItemByOrderPropertyId($fKey);

                $orderPropsName = $orderProps->getName();
                $orderPropsValue = $orderProps->getValue();

                $propsToStr .= $orderPropsName.": ".$orderPropsValue."<br>";
            }
        }

        // \Bitrix\Main\Localization\Loc::getMessage("INIT_MESS_DELIVERY");
        // \Bitrix\Main\Localization\Loc::getMessage("INIT_MESS_PAYMENT");

        // shippment
        $shipmentCollection = $order->getShipmentCollection();
        $shipmentName = $shipmentCollection->getSystemShipment()->getDeliveryName();

        foreach ($shipmentCollection as $shipment) {
            $shName = $shipment->getDeliveryName();
            if (!empty($shName))
                break;
        }

        // payment
        $paymentCollection = $order->getPaymentCollection();
        foreach ($paymentCollection as $payment) {
            $psName = $payment->getPaymentSystemName(); // ???????? ????????? ???????
            if (!empty($psName))
                break;
        }

        $flag = "true";
    }

    if (!isset($CLIENT_MC_ID) || empty($CLIENT_MC_ID))
        $CLIENT_MC_ID = "NOT DETECT";

    // if ($request["act"] == "fastBack" || $request["act"] ==  "sendFastForm")
    //     $actionType = Bitrix\Main\Localization\Loc::getMessage("FAST_ORDER");
    // else
    //     $actionType = Bitrix\Main\Localization\Loc::getMessage("CLASSIC_ORDER");


    if (!empty($CLIENT_MC_ID)){
        $newFields = $arFields;
        $newFields["ACTION_TYPE"] = $actionType; // ??? ???????
        $newFields["CLIENT_MC_ID"] = $CLIENT_MC_ID;
        $newFields["ALL_USER_DATA"] = $propsToStr;
        $newFields["SHIPMENT_NAME"] = !empty($shName) ? $shName : "Не определено " ;
        $newFields["PAYMENT_NAME"] = !empty($psName) ? $psName : "Не определено" ;
        $newFields["PERSON_TYPE"] = !empty($personType) ? $personType : "Не определено" ;

        Bitrix\Main\Mail\Event::send(array(
            "EVENT_NAME" => "SALE_NEW_ORDER_CLIENTID",
            "LID" => "s2",
            "C_FIELDS" => $newFields
        ));
    }

    $ff = fopen($_SERVER['DOCUMENT_ROOT'].'/local/TEST.txt' , 'w');
    fwrite($ff, print_r(array(
        "FLAG" => $flag,
        "propsToStr" => $propsToStr,
        "request_act"=> $request["act"],
        "newFields" => $newFields,
        "arFields" => $arFields,
        "REQUEST" => $request
    ), 1));
    fclose($ff);
}