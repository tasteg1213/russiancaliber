<div id="appFastBuy" data-load="<?=SITE_TEMPLATE_PATH?>/images/picLoad.gif">
	<div id="appFastBuyContainer">
		<div class="heading">������ � ���� ���� <a href="#" class="close closeWindow"></a></div>
		<div class="container" id="fastBuyOpenContainer">
			<div class="column">
				<div id="fastBuyPicture"><a href="#" class="url"><img src="<?=SITE_TEMPLATE_PATH?>/images/picLoad.gif" alt="" class="picture"></a></div>
				<div id="fastBuyName"><a href="" class="name url"><span class="middle"></span></a></div>
				<div id="fastBuyPrice" class="price"></div>
			</div>
			<div class="column">
				<div class="title">��������� ������ ��� ������</div>
				<form action="<?=SITE_DIR?>callback/" id="fastBuyForm" method="GET">
					<input name="id" type="hidden" id="fastBuyFormId" value="">
					<input name="act" type="hidden" id="fastBuyFormAct" value="fastBack">
					<input name="SITE_ID" type="hidden" id="fastBuyFormSiteId" value="<?=SITE_ID?>">
					<div class="formLine"><input name="name" type="text" placeholder="���*" value="" id="fastBuyFormName"></div>
					<div class="formLine"><input name="phone" type="text" placeholder="�������*" value="" id="fastBuyFormTelephone"></div>
					<div class="formLine"><textarea name="message" cols="30" rows="10" placeholder="���������" id="fastBuyFormMessage"></textarea></div>
					<div class="formLine"><input type="checkbox" name="personalInfoFastBuy" id="personalInfoFastBuy"><label for="personalInfoFastBuy">� �������� �� <a href="/personal-info/" class="pilink">��������� ������������ ������.</a>*</label></div>
					<div class="formLine"><a href="#" id="fastBuyFormSubmit"><img src="<?=SITE_TEMPLATE_PATH?>/images/incart.png" alt="������ � ���� ����"> ������ � ���� ����</a></div>
				</form>
			</div>
		</div>
		<div id="fastBuyResult">
			<div id="fastBuyResultTitle"></div>
			<div id="fastBuyResultMessage"></div>
			<a href="" id="fastBuyResultClose" class="closeWindow">������� ����</a>
        </div>		
	</div>
</div>