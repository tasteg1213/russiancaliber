<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);

if(empty($arResult['INFO']['PROPERTY_YANDEX_MAP_VALUE'])){
    $str = "a:4:{s:10:\"yandex_lat\";d:55.80915314327107;s:10:\"yandex_lon\";d:37.517022369102136;s:12:\"yandex_scale\";i:12;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:37.517201658344;s:3:\"LAT\";d:55.812136380403;s:4:\"TEXT\";s:33:\"Шоу-рум магазина \"Русский калибр\"\";}}}";
}else{
    $arMap = explode(',', $arResult['INFO']['PROPERTY_YANDEX_MAP_VALUE']);

    $str = "a:4:{s:10:\"yandex_lat\";d:#yandex_lat#;s:10:\"yandex_lon\";d:#yandex_lon#;s:12:\"yandex_scale\";i:12;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:#yandex_lon#;s:3:\"LAT\";d:#yandex_lat#;s:4:\"TEXT\";s:33:\"Шоу-рум магазина \"Русский калибр\"\";}}}";

    $str = str_replace('#yandex_lat#', $arMap['0'], $str);
    $str = str_replace('#yandex_lon#', $arMap['1'], $str);
}

global $YANDEX_MAP_VALUE;
$YANDEX_MAP_VALUE = $str;