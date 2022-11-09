<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
use Bitrix\Main\Localization\Loc;
?>

<h1><?=Loc::getMessage("sdek_h1").' '.$arResult['INFO']['PROPERTY_REGION_ACCUSATIVE_CASE_VALUE']?></h1>
<?=Loc::getMessage("sdek_text")?>

<div style="clear: both"></div>
<br>

<div id="forpvz" style="width:100%; height:600px;"></div>

<?php
$url_site = 'https://'.$_SERVER['HTTP_HOST'].$this->GetFolder();
$str = "
    <script id='ISDEKscript' type='text/javascript' src='".$url_site."/widget/widjet.js'></script>
    <script type='text/javascript'>
        var ourWidjet = new ISDEKWidjet ({
            defaultCity: '".$arResult['INFO']['NAME']."', //какой город отображается по умолчанию
            cityFrom: 'Москва', // из какого города будет идти доставка
            country: 'Россия', // можно выбрать страну, для которой отображать список ПВЗ
            link: 'forpvz', // id элемента страницы, в который будет вписан виджет
            path: '".$url_site."/widget/scripts/', //директория с библиотеками виджета
            servicepath: '".$url_site."/widget/scripts/service.php', //ссылка на файл service.php на вашем сайте
            apikey: '25123348-53d3-483e-a294-d51cd9d40e04' // ключ для корректной работы Яндекс.Карт, получить необходимо тут
        });
    </script>
";
\Bitrix\Main\Page\Asset::getInstance()->addString($str);
?>