<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("�����������");?>
<h1 class="ff-medium"> ����������� </h1>

<div class="detail-text-wrap flex">
	<div class="flex-item">
		<div class="h1">��������� H1</div>
		<div class="h1 ff-bold">��������� H1 ������</div>
		<br>
		<div class="h2">��������� H2</div>
		<div class="h2 ff-medium">��������� H2 (medium)</div>
		<br>
		<div class="h3">��������� H3</div>
		<div class="h3 ff-bold">��������� H3 ������</div>
		<br>
	</div>
	<div class="flex-item">
		<h3 class="h3 ff-bold">������������� ������</h3>
		<ul>
			<li>2 �������� ������� � ����� �������! </li>
			<li>�� ������ ����������  2 �����,</li>
			<li>���������� ��������� �� �������</li>
		</ul>
		<br>
		<h3 class="h3 ff-bold">������������ ������</h3>
		<ol>
			<li>2 �������� ������� � ����� �������! </li>
			<li>�� ������ ����������  2 �����,</li>
			<li>���������� ��������� �� �������</li>
		</ol>
		<br>
	</div>
</div>




<br/><br/><br/>
<div class="h2 ff-bold">������</div>





<div class="btn-wrap">
	<div class="btn-simple">�������� ������</div>

	<div class="btn-simple btn-border">������ � ��������</div>

	<div class="btn-simple btn-black">������ ������</div>

	<div class="btn-simple btn-black-border">������ � ��������</div>
</div>

<div class="btn-wrap">
	<div class="btn-simple btn-medium">������� ������</div>

	<div class="btn-simple btn-medium btn-border">������� ������</div>

	<div class="btn-simple btn-medium btn-black">������� ������</div>

	<div class="btn-simple btn-medium btn-black-border">������� ������</div>
</div>

<div class="btn-wrap">
	<div class="btn-simple btn-small">����� ������</div>

	<div class="btn-simple btn-small btn-border">����� ������</div>

	<div class="btn-simple btn-small btn-black">����� ������</div>

	<div class="btn-simple btn-small btn-black-border">����� ������</div>
</div>

<div class="btn-wrap">
	<div class="btn-simple btn-micro">����� ������</div>

	<div class="btn-simple btn-micro btn-border">����� ������</div>

	<div class="btn-simple btn-micro btn-black">����� ������</div>

	<div class="btn-simple btn-micro btn-black-border">����� ������</div>
</div>

<div class="btn-wrap">
	<div class="btn-simple add-cart">� �������</div>
</div>


<div class="btn-wrap">
	<a href="#" class="active-link">�������� ������</a><br/>
	<a href="#" class="inactive-link">���������� ������</a>
</div>

<div class="btn-wrap">
	<a href="#" class="big-text-link">���������</a>
</div>

<div class="btn-wrap">
	<a href="#" class="theme-link-dashed">���������</a>
</div>

<div class="btn-wrap">
	<a href="#" class="link-dashed">���������</a>
</div>



<br/><br/><br/>
<div class="h2 ff-bold">�������</div>



<div class="detail-text-wrap">
	<div class="table-simple-wrap">
		<table class="table-simple">
			<tr>
				<th>����� ��������</th>
				<th>������� ��������</th>
				<th>��������� </th>
			</tr>
			<tr>
				<td>�������� �� �����-����������</td>
				<td>��������� ��� ������ �� 3 000 ������</td>
				<td>350 ���</td>
			</tr>
			<tr>
				<td>�������� �� ������</td>
				<td>��������� ��� ������ �� 5 000 ������</td>
				<td>500 ���</td>
			</tr>
			<tr>
				<td>�������� �� ������ ������������ ���������</td>
				<td>�������� ������� ������������ ��������. �� ������ �� (������� ����� � ����) ���������</td>
				<td>350 ���</td>
			</tr>
		</table>
	</div>
</div>






<br/><br/><br/>
<div class="h2 ff-bold">��� ����� � 2 ����</div>







<div class="detail-text-wrap">
	<?$APPLICATION->IncludeComponent(
	"bitrix:form.result.new", 
	"twoColumns", 
	array(
		"CACHE_TIME" => "360000",
		"CACHE_TYPE" => "Y",
		"CHAIN_ITEM_LINK" => "",
		"CHAIN_ITEM_TEXT" => "",
		"COMPONENT_TEMPLATE" => "twoColumns",
		"EDIT_URL" => "",
		"IGNORE_CUSTOM_TEMPLATE" => "N",
		"LIST_URL" => "",
		"SEF_MODE" => "N",
		"SUCCESS_URL" => "",
		"USE_EXTENDED_ERRORS" => "Y",
		"WEB_FORM_ID" => "2",
		"VARIABLE_ALIASES" => array(
			"WEB_FORM_ID" => "WEB_FORM_ID",
			"RESULT_ID" => "RESULT_ID",
		)
	),
	false
);?>
</div>





<br/><br/><br/>
<div class="h2 ff-bold">���������� �����������</div>






<div class="list-advantages">
	<div class="list-item">
		<div class="tb">
			<div class="tc image">
				<img src="/bitrix/templates/dresscode/images/advantages-img1.png" alt="">
			</div>
			<div class="tc text-wrap">
				<div class="name">����������� ������ ��������</div>
				<div class="descr">�� ������ � �����-���������� �������� � ���� �������</div>
			</div>
		</div>
	</div>
	<div class="list-item">
		<div class="tb">
			<div class="tc image">
				<img src="/bitrix/templates/dresscode/images/advantages-img2.png" alt="">
			</div>
			<div class="tc text-wrap">
				<div class="name">�������� ����� � ����� �����</div>
				<div class="descr">�������� ����� ����� ������� ���������� �������</div>
			</div>
		</div>
	</div>
	<div class="list-item">
		<div class="tb">
			<div class="tc image">
				<img src="/bitrix/templates/dresscode/images/advantages-img3.png" alt="">
			</div>
			<div class="tc text-wrap">
				<div class="name">����������� ������ ��������</div>
				<div class="descr">�� ������ � �����-���������� �������� � ���� �������</div>
			</div>
		</div>
	</div>
	<div class="list-item">
		<div class="tb">
			<div class="tc image">
				<img src=/bitrix/templates/dresscode/images/advantages-img2.png" alt="">
			</div>
			<div class="tc text-wrap">
				<div class="name">�������� ����� � ����� �����</div>
				<div class="descr">�������� ����� ����� ������� ���������� �������</div>
			</div>
		</div>
	</div>
</div>







<br/><br/><br/>
<div class="h2 ff-bold">��������� ������</div>


	<div class="error-wrap">��������! ����������� ��������� ����� ��������, �������� ��� �������� ����� ����� �������� � �������������� ��������! ����������, ����������� ���������� ���� ������������ ������ ��� ����������� � ���������� ������.������������������ ����� ��������������� ������ �������������.</div>





<br/><br/><br/>
<div class="h2 ff-bold">������</div>




	<div class="blockquote-wrap">
		<blockquote>��������� ����� ��������, ����� ������������ ����������� �������������� ������������ ���, ������� ������ ������, ��� ���������������� ���������, ������ ��� ������� � ��� ������� ������� �������, �������������, ������, ������� ��������� ���������� ������� � ����������, ��������� ��������������� ��������� ��������.</blockquote>
		<p>- ������� ����� � ��������. "���� ����". ������ ������</p>
	</div>




<br/><br/><br/>
<div class="h2 ff-bold">��������� ������</div>






<div class="blockquote-wrap">
                <p>����������� ���������� ���������� �������, ������� ����������� ��� ���. ����� ������� ������������ ������ � 2�� ����������, ��������� ������������ ��������� �������� � �������, ������������ ������� ����� ����� ������ ��������, � ����� ����� ����� � ��������� ����� ����� ��������. ���������� ������� �������� ��� �������� ���������� ������� � ����������� ������ �������, � ����� ����� ��������� ����� ��������� �� ����� ��������� ��������</p>
      </div>



<br/><br/><br/>
<div class="h2 ff-bold">�������� ������������</div>






	<div class="consultation-wrap">
		<div class="tb">
			<div class="tc">
				<div class="tb">
					<div class="tc image">
						<img src="/bitrix/templates/dresscode/images/consultation-img.png" alt="">
					</div>
					<div class="tc">
						<div class="consultation-heading">�������� ������������</div>
						<div class="text">�������� ���� ���������� ������ � �� �������� � ���� � ��������� �����</div>
					</div>
				</div>
			</div>
			<div class="tc consultation-btn-wrap">
				<div class="btn-simple btn-medium consultation-btn">�������� �����</div>
			</div>
		</div>
	</div>






<br/><br/><br/>
<div class="h2 ff-bold">���� 1</div>






	<div class="tabs-wrap">
		<div class="tabs-links">
			<div class="tab-link tab-btn-link active">�������� ���</div>
			<div class="tab-link tab-btn-link">���������� ���</div>
			<div class="tab-link tab-btn-link">���������� ���</div>
		</div>
		<div class="tabs-content">
			<div class="tab-content active">
				��������� ����� ��������, ����� ������������ ����������� �������������� ������������ ���, ������� ������ ������, ��� ���������������� ���������, ������ ��� ������� � ��� ������� ������� �������, �������������, ������, ������� ��������� ���������� ������� � ����������, ��������� ��������������� ��������� ��������.
			</div>
			<div class="tab-content">
				����������� ����� ��������, ����� ������������ ����������� �������������� ������������ ���, ������� ������ ������, ��� ���������������� ���������, ������ ��� ������� � ��� ������� ������� �������, �������������, ������, ������� ��������� ���������� ������� � ����������, ��������� ��������������� ��������� ��������.
			</div>
			<div class="tab-content">
				��������� �� ����� ��������, ����� ������������ ����������� �������������� ������������ ���, ������� ������ ������, ��� ���������������� ���������, ������ ��� ������� � ��� ������� ������� �������, �������������, ������, ������� ��������� ���������� ������� � ����������, ��������� ��������������� ��������� ��������.
			</div>
		</div>
	</div>




<br/><br/><br/>
<div class="h2 ff-bold">���� 2</div>



<div class="detail-text-wrap">
	<div class="tabs-wrap">
		<div class="tabs-links">
			<div class="tab-link tab-dashed-link active">�������� ���</div>
			<div class="tab-link tab-dashed-link">���������� ���</div>
		</div>
		<div class="tabs-content">
			<div class="tab-content active">
				��������� ����� ��������, ����� ������������ ����������� �������������� ������������ ���, ������� ������ ������, ��� ���������������� ���������, ������ ��� ������� � ��� ������� ������� �������, �������������, ������, ������� ��������� ���������� ������� � ����������, ��������� ��������������� ��������� ��������.
			</div>
			<div class="tab-content">
				����� ������������ ����������� �������������� ������������ ���, ������� ������ ������, ��� ���������������� ���������, ������ ��� ������� � ��� ������� ������� �������, �������������, ������, ������� ��������� ���������� ������� � ����������, ��������� ��������������� ��������� ��������.
			</div>
		</div>
	</div>
</div>



<br/><br/><br/>
<div class="h2 ff-bold">������ ����� (������� ��� ���������)</div>
<br/>





				<div class="questions-answers-list">
					<div class="question-answer-wrap">
						<div class="question">�������� �� �����-���������� � ������������� �������
							<div class="open-answer"><span class="hide-answer-text">������</span><span class="open-answer-text">���������</span><div class="open-answer-btn"></div></div>
						</div>
						<div class="answer">�� ����� ���� ��������� �������� ������������� ������������� lorem ipsum, ������� �������� � �������� ����� ���������� ��� �������� ��������� ���� �����. � ������� �� lorem ipsum, ����� ���� �� ������� ����� �������� ����� ����� ���������� ������� � ������� ������������ ������� ��������� ������.</div>
					</div>
					<div class="question-answer-wrap">
						<div class="question">�������� ������� �� ������
							<div class="open-answer"><span class="hide-answer-text">������</span><span class="open-answer-text">���������</span><div class="open-answer-btn"></div></div>
						</div>
						<div class="answer">�� ����� ���� ��������� �������� ������������� ������������� lorem ipsum, ������� �������� � �������� ����� ���������� ��� �������� ��������� ���� �����. � ������� �� lorem ipsum, ����� ���� �� ������� ����� �������� ����� ����� ���������� ������� � ������� ������������ ������� ��������� ������.</div>
					</div>
					<div class="question-answer-wrap">
						<div class="question">�������� ������� � �������
							<div class="open-answer"><span class="hide-answer-text">������</span><span class="open-answer-text">���������</span><div class="open-answer-btn"></div></div>
						</div>
						<div class="answer">�� ����� ���� ��������� �������� ������������� ������������� lorem ipsum, ������� �������� � �������� ����� ���������� ��� �������� ��������� ���� �����. � ������� �� lorem ipsum, ����� ���� �� ������� ����� �������� ����� ����� ���������� ������� � ������� ������������ ������� ��������� ������.</div>
					</div>
					<div class="question-answer-wrap">
						<div class="question">������� ������
							<div class="open-answer"><span class="hide-answer-text">������</span><span class="open-answer-text">���������</span><div class="open-answer-btn"></div></div>
						</div>
						<div class="answer">�� ����� ���� ��������� �������� ������������� ������������� lorem ipsum, ������� �������� � �������� ����� ���������� ��� �������� ��������� ���� �����. � ������� �� lorem ipsum, ����� ���� �� ������� ����� �������� ����� ����� ���������� ������� � ������� ������������ ������� ��������� ������.</div>
					</div>
				</div>
<br/><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>