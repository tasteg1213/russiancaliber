<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("��� ����� ���������");?><h1>��� ����� ���������</h1>
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
		<img src="<?=SITE_TEMPLATE_PATH?>/images/optBanner.png" class="pagePicture" alt="">
		<h2 class="mediumText">�� �������� � �������� ������������ (��� � �����������, ��� � � ������������ ������).</h2>
		<h3>��������� �������� ��������������:</h3>
		<div class="priceTableContainer">
			<table class="priceTableStyle80">
				<thead>
					<tr>
						<th>��� ����</th>
						<th>��� �������� ������ </th>
						<th>������</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>��������� ����</td>
						<td>������� ���� ��� ���� �������������������� �������������</td>
						<td>������� ����</td>
					</tr>
					<tr>
						<td>���������� ������</td>
						<td>������ ������������� ��� ������� ����� ��� �� 15 000 ������</td>
						<td>������: 5%</td>
					</tr>
					<tr>
						<td>������ ���</td>
						<td>������ ������������� ��� ������� ����� ��� �� 45 000 ������</td>
						<td>������: 10%</td>
					</tr>
					<tr>
						<td>������� ���</td>
						<td>������ ������������� ��� ������� ����� ��� ��100 000 ������ ����������</td>
						<td>������: 15%</td>
					</tr>
				</tbody>
			</table>
		</div>

		<h3 class="mediumText">���� ������ �������� � ����!</h3>
		<ul>
			<li>�������� ����.</li>
			<li>������ ������� ������.</li>
			<li>������� ������� ����������.</li>
			<li>����������� �������� ������.</li>
			<li>������� �������� ������ �� �������.</li>
		</ul>

		<h3 class="mediumText">����� ��������� �����! - ������ �������� ���!</h3>
		<p>� ������ ���������� �������:</p>
		<ul>
			<li>��� ����������� ����</li>
			<li>����������� ����� </li>
			<li>������ ������������ �����������</li>
			<li>������������ ������</li>
			<li>���������� �������</li>
		</ul>
		<h4 class="mediumText">����� ���������� ����� ��� �����: <a href="mailto:<?=COption::GetOptionString("sale", "order_email")?>"><?=COption::GetOptionString("sale", "order_email")?></a></h4>
		�� ����� ���� ��������������� ��������������!
	</div>
	<div class="global-information-block">
		<?$APPLICATION->IncludeComponent(
			"bitrix:main.include", 
			".default", 
			array(
				"COMPONENT_TEMPLATE" => ".default",
				"AREA_FILE_SHOW" => "sect",
				"AREA_FILE_SUFFIX" => "information_block",
				"AREA_FILE_RECURSIVE" => "Y",
				"EDIT_TEMPLATE" => ""
			),
			false
		);?>
	</div>
</div>
<br><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>