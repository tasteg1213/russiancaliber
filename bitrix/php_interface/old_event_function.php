<?

class UserReg
{
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
                                    <label>Сортировка</label>
                                    <input class="sort"  oninput="jsUtils.upadteSort(event,\'' . $id_block . '\',this);" name="sort" type="text" value="' . trim($sort) . '">
                                </span>  
                                 <span>|</span>
                                 <span> 
                                    <label>Короткое название</label>
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
                    <label>Сортировка</label>
                    <input class="sort"  oninput="jsUtils.upadteSort(event,\'' . $id_block . '\',this);" name="sort" type="text" value="' . trim($sort) . '">
                </span>  
                 <span>|</span>
                 <span> 
                    <label>Короткое название</label>
                    <input class="short_name" oninput="jsUtils.upadteShortName(event,\'' . $id_block . '\',this);" name="short_name" type="text" value="' . trim($short_name) . '">
                </span>
            </span>
            <span id="del_row' . $id_block . '" data-id_btn="' . $id_block . '"  onClick="jsUtils.dellRow(\'' . $id_block . '\');" class="del_row"><b>Удалить</b></span>
        </div>
        ';

        return $html;
    }

}


?>