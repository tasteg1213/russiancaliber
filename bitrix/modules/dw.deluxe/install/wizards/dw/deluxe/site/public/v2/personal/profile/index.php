<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("��������� �������� ����������");
?><h1>��������� �������� ����������</h1>
<?$APPLICATION->IncludeComponent("bitrix:menu", "personal", Array(
	"COMPONENT_TEMPLATE" => ".default",
		"ROOT_MENU_TYPE" => "personal",	// ��� ���� ��� ������� ������
		"MENU_CACHE_TYPE" => "A",	// ��� �����������
		"MENU_CACHE_TIME" => "3600000",	// ����� ����������� (���.)
		"MENU_CACHE_USE_GROUPS" => "Y",	// ��������� ����� �������
		"MENU_CACHE_GET_VARS" => "",	// �������� ���������� �������
		"MAX_LEVEL" => "1",	// ������� ����������� ����
		"CHILD_MENU_TYPE" => "",	// ��� ���� ��� ��������� �������
		"USE_EXT" => "N",	// ���������� ����� � ������� ���� .���_����.menu_ext.php
		"DELAY" => "N",	// ����������� ���������� ������� ����
		"ALLOW_MULTI_SELECT" => "N",	// ��������� ��������� �������� ������� ������������
	),
	false
);?><?$APPLICATION->IncludeComponent(
	"bitrix:sale.personal.profile", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"SEF_MODE" => "N",
		"PER_PAGE" => "20",
		"USE_AJAX_LOCATIONS" => "N",
		"PAGER_TEMPLATE" => "round",
		"SET_TITLE" => "N"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>