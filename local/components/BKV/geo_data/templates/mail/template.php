<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);

$str = '<a href="mailto:#mail#">#mail#</a>';
$mail = 'info@russiancaliber.ru';

if($arResult['INFO']['PROPERTY_EMAIL_ADDRESS_VALUE'])
    $mail = $arResult['INFO']['PROPERTY_EMAIL_ADDRESS_VALUE'];

echo str_replace('#mail#', $mail, $str);
