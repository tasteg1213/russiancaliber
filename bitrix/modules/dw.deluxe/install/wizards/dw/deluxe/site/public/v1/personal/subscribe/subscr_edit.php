<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("�������� �� ��������");
?><h1>�������� �� ��������</h1><?$APPLICATION->IncludeComponent("bitrix:menu", "personal", Array(
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
	"bitrix:subscribe.edit",
	"",
	Array(
		"SHOW_HIDDEN" => "N",
		"ALLOW_ANONYMOUS" => "Y",
		"SHOW_AUTH_LINKS" => "Y",
		"CACHE_TIME" => "36000000",
		"SET_TITLE" => "Y"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>