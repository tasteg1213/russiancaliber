<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("������ ����");?><h1>������ ����</h1>
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
);?><?$APPLICATION->IncludeComponent("bitrix:sale.personal.account", ".default", Array(
	
	),
	false
);?><?$APPLICATION->IncludeComponent(
	"bitrix:sale.account.pay", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"REFRESHED_COMPONENT_MODE" => "Y",
		"PATH_TO_BASKET" => "/personal/cart",
		"PATH_TO_PAYMENT" => "/personal/order/payment",
		"SELL_CURRENCY" => "RUB",
		"PERSON_TYPE" => "1",
		"ELIMINATED_PAY_SYSTEMS" => array(
			0 => "1",
			1 => "2",
		),
		"SELL_VALUES_FROM_VAR" => "N",
		"SELL_SHOW_FIXED_VALUES" => "Y",
		"SELL_TOTAL" => array(
			0 => "100",
			1 => "200",
			2 => "500",
			3 => "1000",
			4 => "5000",
			5 => "",
		),
		"SELL_USER_INPUT" => "Y",
		"SET_TITLE" => "Y"
	),
	false
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>