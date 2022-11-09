<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?
global $USER;
if ($USER->IsAdmin()) {


    foreach ($arResult["PROPERTIES"] as $infoProp) {
        foreach ($infoProp as $Prop) {
            if ($Prop["IS_LOCATION"] == "Y" && $Prop["PERSON_TYPE_ID"] == $arResult["PERSON_FIRST"]) {
                $idLocation = $Prop["DEFAULT_VALUE"];;
            }
        }
    }

    if ($idLocation > 0) {

    }
    $res = \Bitrix\Sale\Location\LocationTable::getList(array(
        'filter' => array(
            '=ID' => $idLocation,
            '=PARENTS.NAME.LANGUAGE_ID' => LANGUAGE_ID,
            '=PARENTS.TYPE.NAME.LANGUAGE_ID' => LANGUAGE_ID,
        ),
        'select' => array(
            'I_ID' => 'PARENTS.ID',
            'I_CODE' => 'PARENTS.CODE',
            'I_NAME_RU' => 'PARENTS.NAME.NAME',
            'I_TYPE_CODE' => 'PARENTS.TYPE.CODE',
            'I_TYPE_NAME_RU' => 'PARENTS.TYPE.NAME.NAME'
        ),
        'order' => array(
            'PARENTS.DEPTH_LEVEL' => 'asc'
        )
    ));

    $DefaultLocation = array();
    $arInfoDefLocation = array();
    while ($item = $res->fetch()) {
        $arInfoDefLocationp[$item["I_TYPE_CODE"]] = $item;
    }


    if (!empty($arInfoDefLocationp)) {
        $DefaultLocation = array(
            "ID" => $arInfoDefLocationp["CITY"]["I_ID"],
            "CODE" => $arInfoDefLocationp["CITY"]["I_CODE"],
            "COUNTRY_ID" => $arInfoDefLocationp["COUNTRY"]["I_ID"],
            "CITY_ID" => $arInfoDefLocationp["CITY"]["I_ID"],
            "REGION_ID" => $arInfoDefLocationp["REGION"]["I_ID"],
            "SORT" => 100,
            "LOC_DEFAULT" => "Y",
            "COUNTRY_NAME_ORIG" => $arInfoDefLocationp["COUNTRY"]["I_NAME_RU"],
            "COUNTRY_SHORT_NAME" => "",
            "COUNTRY_NAME" => $arInfoDefLocationp["COUNTRY"]["I_NAME_RU"],
            "COUNTRY_LID" => LANGUAGE_ID,
            "COUNTRY_NAME_LANG" => $arInfoDefLocationp["COUNTRY"]["I_NAME_RU"],
            "COUNTRY_SHORT_NAME_LANG" => "",
            "CITY_NAME_ORIG" => $arInfoDefLocationp["CITY"]["I_NAME_RU"],
            "CITY_SHORT_NAME" => "",
            "CITY_NAME" => $arInfoDefLocationp["CITY"]["I_NAME_RU"],
            "CITY_LID" => LANGUAGE_ID,
            "CITY_NAME_LANG" => $arInfoDefLocationp["CITY"]["I_NAME_RU"],
            "CITY_SHORT_NAME_LANG" => "",
            "REGION_NAME_ORIG" => $arInfoDefLocationp["REGION"]["I_NAME_RU"],
            "REGION_SHORT_NAME" => "",
            "REGION_NAME" => $arInfoDefLocationp["REGION"]["I_NAME_RU"],
            "REGION_LID" => LANGUAGE_ID,
            "REGION_NAME_LANG" => $arInfoDefLocationp["REGION"]["I_NAME_RU"],
            "REGION_SHORT_NAME_LANG" => "",
            "COUNTRY" => $arInfoDefLocationp["COUNTRY"]["I_NAME_RU"],
            "CITY" => $arInfoDefLocationp["CITY"]["I_NAME_RU"],
            "REGION" => $arInfoDefLocationp["REGION"]["I_NAME_RU"],
            "TYPE_ID" => "5"
        );

        $arResult["LOCATION"] = $DefaultLocation;

    }
}
?>
