<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "�������� � ������ | ������� ������");
$APPLICATION->SetTitle("�������� � ������");
?><div>
</div>
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
			 <?if($_SERVER['HTTP_HOST'] != 'russiancaliber.ru'){?> <?$APPLICATION->IncludeComponent(
	"BKV:geo_data",
	"sdek",
Array()
);?> <?}else{?>
			<h1> <b>�������� �������� �� ������ � ���������� �������</b> </h1>
			<p>
				 �� ���������� ������ � 9:00 �� 21:00 ��� ��������
			</p>
			<h2><b>�������� ����������� ��������������</b></h2>
			 �� ������ � ���������� ������� ������������� ���������� � ���� ���������. ����������� �������� � ������� ������������ ������������� �������� ������ �� ����������, � ����� � ���� ��������� �������� ������������� �� ������� ������ � ��������� ��� ������, � ���� ��� ����� ������������� ������ ������������� ����� �������.
			<p>
				 ������ ��� �������� �������� ��� ���������� � ������ ������������ ��������.
			</p>
 <br>
		</div>
		<h2> <b>�������� � �������� ����</b> </h2>
		<p>
			 ���� �������� 1-2 ������� ��� <br>
			 ��������� 350&#8381;<br>
		</p>
 <br>
		<h2> <b>�������� �� ���� � �������� ��</b> </h2>
		<p>
			 ���� �������� 1-4 ������� ���<br>
			 ��������� 500&#8381;<br>
		</p>
 <br>
		<h2> <b>������ ��� ��������:</b> </h2>
		<ul>
			<li>������������ �������� ����������������� ������� � ������������</li>
			<li>����� ����������� ��������, ��������� ��� � �� ������������ (�� �������������)</li>
			<li>��������� ������ ��������� � �� ���������� �����</li>
		</ul>
		 <?}?>
		<div>
 <br>
 <br>
		</div>
		<h1><b>�������� �� ������</b></h1>
		<p>
			 ���������� ����� ������� ��� ��������.
		</p>
		<h2><b>���� / PONY EXPRESS ���������� ��������</b></h2>
		<div>
			 ���� �������� 2-7 ������� ����<br>
			 ��������� �� 350&#8381;<br>
		</div>
		<p>
		</p>
		<h2><b>DHL � UPS (�������������� ����� �� 5 ��) �� �� � ������� ���</b></h2>
		 ���� �������� 1-3 ������� ��� ����� ������ ������<br>
		 ��������� 600&#8381;&nbsp;<br>
 <br>
 <br>
		<p>
		</p>
		<h1><b>��� �������� �����</b></h1>
		 ��� ���������� ������ �� ����� �� 5 000&#8381;, ���������� ���������� �� �����, ��� ��� ������� �������� �� ����� ��� � ����������.<b><br>
 </b>
		<ul>
			<li>
			<p>
				 ��������� �������
			</p>
 </li>
			<li>
			<p>
				 ����������&nbsp;�������� (�������� ��� ������ �� ����� ������ 5 000&#8381;)
			</p>
 </li>
			<li>
			<p>
				 ������ ���������� ������
			</p>
 </li>
			<li>
			<p>
				 ������ �� �����&nbsp;<br>
				 ����� �������� � ���������� ��������� ��� ����� ��������� ���������� ����� �� ����������. �������� ����� ����� ������� ����� � ��� �� ����. ������ �� ��� ������ 1-2 ���.
			</p>
 </li>
			<li>����������� ������ ��� �� ���<br>
			 �������� ����� ��� ����������� ����, ���������� ��� ������� ���� ���������. ����� �������� ������ �� ������� �� ��� email ����. �������� ����� ����� ������� ����� � ��� �� ����. ������ �� ��� ������ 1-2 ���.<br>
			 ����������� ��������� �������� � �������� ��� ������ ������.</li>
		</ul>
 <br>
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