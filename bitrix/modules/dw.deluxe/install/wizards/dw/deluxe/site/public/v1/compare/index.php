<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("��������� �������");
?><h1>������ ���������</h1>
<?$APPLICATION->IncludeComponent("dresscode:catalog.compare", ".default", Array(
		"IBLOCK_TYPE" => "#CATALOG_IBLOCK_TYPE#",
		"IBLOCK_ID" => "#CATALOG_IBLOCK_ID#",
		"CACHE_TYPE" => "A",	// ��� �����������
		"CACHE_TIME" => "360000",	// ����� ����������� (���.)
	),
	false
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>