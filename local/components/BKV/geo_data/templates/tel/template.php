<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);

$str = '<a class="zphone" href="tel:#tel#">#tels#</a>';
$tels = '+7 (499) 113-15-68';

if($arResult['INFO']['PROPERTY_TEL_VALUE'])
    $tels = $arResult['INFO']['PROPERTY_TEL_VALUE'];

$tel = preg_replace("/[^,.0-9]/", '', $tels);

$str = str_replace('#tel#', $tel, $str);
$str = str_replace('#tels#', $tels, $str);

echo $str;