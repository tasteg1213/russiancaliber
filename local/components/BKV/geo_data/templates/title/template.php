<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);

if($arResult['INFO']['NAME'])
    echo ' | '.$arResult['INFO']['NAME'];