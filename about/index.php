<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("� ��������");
?><h1>� ���</h1>
 <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"personal",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "",
		"COMPONENT_TEMPLATE" => "personal",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(),
		"MENU_CACHE_TIME" => "3600000",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "about",
		"USE_EXT" => "N"
	)
);?>
<div class="global-block-container">
	<div class="global-content-block">
		<div class="bx_page">
			<p>
				� 2017 ���� ����������&nbsp;�������� � �������� ����������� ��������, ������������� ��������������, ����������� ��������� � �������������� ������ �������� ����������� ����� �� ���� � Face ID. �������� ����������� ������� �������� ����� �������������� �� �����. <b><br>
 </b>
			</p>
			 ������������ ������ � ����<b>:</b><br>
			<ol>
				<li>
				<p>
 <b>������������ ������������ ��� ������ �������</b>. �� ���������� ����������� � ����������� �������� ������� �������, ��� ���� ��� ��� ����������.
				</p>
 </li>
				<li>
				<p>
					 ������������ <b>������ �� ��������-����������������� �������</b> � ������������ ������������.
				</p>
 </li>
				<li>
				<p>
 <b>������������ �������� ���� � ����.</b>
				</p>
 </li>
				<li>
				<p>
					 ���� ������-������: <b>�������� ����</b> �� ���� ����� � ������������ ������������ .&nbsp;
				</p>
 </li>
			</ol>
 <br>
		</div>
	</div>
	<div class="global-information-block">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_RECURSIVE" => "Y",
		"AREA_FILE_SHOW" => "sect",
		"AREA_FILE_SUFFIX" => "information_block",
		"COMPONENT_TEMPLATE" => ".default",
		"EDIT_TEMPLATE" => ""
	)
);?>
	</div>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>