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
            defaultCity: '".$arResult['INFO']['NAME']."', //����� ����� ������������ �� ���������
            cityFrom: '������', // �� ������ ������ ����� ���� ��������
            country: '������', // ����� ������� ������, ��� ������� ���������� ������ ���
            link: 'forpvz', // id �������� ��������, � ������� ����� ������ ������
            path: '".$url_site."/widget/scripts/', //���������� � ������������ �������
            servicepath: '".$url_site."/widget/scripts/service.php', //������ �� ���� service.php �� ����� �����
            apikey: '25123348-53d3-483e-a294-d51cd9d40e04' // ���� ��� ���������� ������ ������.����, �������� ���������� ���
        });
    </script>
";
\Bitrix\Main\Page\Asset::getInstance()->addString($str);
?>