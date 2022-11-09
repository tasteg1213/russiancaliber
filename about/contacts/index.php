<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Задайте вопрос");
?><h1>Контактная информация</h1>
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
<ul class="contactList">
	<li>
	<table>
	<tbody>
	<tr>
		<td>
 <img alt="cont1.png" src="/local/templates/dresscodeV2/images/cont1.png" title="cont1.png">
		</td>
		<td>
			 <?$APPLICATION->IncludeComponent(
	"BKV:geo_data",
	"tel",
Array()
);?>
		</td>
	</tr>
	</tbody>
	</table>
 </li>
	<li>
	<table>
	<tbody>
	<tr>
		<td>
 <img alt="cont2.png" src="/local/templates/dresscodeV2/images/cont2.png" title="cont2.png">
		</td>
		<td>
			 <?$APPLICATION->IncludeComponent(
	"BKV:geo_data",
	"mail",
Array()
);?> <br>
		</td>
	</tr>
	</tbody>
	</table>
 </li>
	<li>
	<table>
	<tbody>
	<tr>
		<td>
 <img alt="cont3.png" src="/local/templates/dresscodeV2/images/cont3.png" title="cont3.png">
		</td>
		<td>
			 <?$APPLICATION->IncludeComponent(
	"BKV:geo_data",
	"adres",
Array()
);?>
		</td>
	</tr>
	</tbody>
	</table>
 </li>
	<li>
	<table>
	<tbody>
	<tr>
		<td>
 <img alt="cont4.png" src="/local/templates/dresscodeV2/images/cont4.png" title="cont4.png">
		</td>
		<td>
			 Пн-Пт : с 9:00 до 21:00<br>
		</td>
	</tr>
	</tbody>
	</table>
 </li>
	<div style="clear: both">
	</div>
 <br>
 <br>
	<h2><span style="color: #ee1d24;">Приезд в офис предварительно согласуйте с менеджером</span></h2>
	 Реквизиты:<br>
	 ООО Русский калибр, ОГРН 1197746189761, ИНН 7707428347<br>
	 Реквизиты АО "АЛЬФА-БАНК"<br>
	 БИК: 044525593<br>
	 К/с: 30101810200000000593 в ГУ БАНКА РОССИИ ПО ЦФО <br>
	 Номер счета: 40702810502620004060 <br>
</ul>
 <?$APPLICATION->IncludeComponent(
	"BKV:geo_data",
	"MAP_DATA",
Array()
);?> <?global $YANDEX_MAP_VALUE;?> <?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view",
	".default",
	Array(
		"API_KEY" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"CONTROLS" => array(0=>"ZOOM",1=>"SMALLZOOM",2=>"SCALELINE",),
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => $YANDEX_MAP_VALUE,
		"MAP_HEIGHT" => "500",
		"MAP_ID" => "",
		"MAP_WIDTH" => "70%",
		"OPTIONS" => array(0=>"ENABLE_DBLCLICK_ZOOM",1=>"ENABLE_DRAGGING",)
	)
);?><br>
 <br>
 <br>
		<?$APPLICATION->IncludeComponent(
	"bitrix:form.result.new",
	".default",
	Array(
		"CACHE_TIME" => "360000",
		"CACHE_TYPE" => "Y",
		"CHAIN_ITEM_LINK" => "",
		"CHAIN_ITEM_TEXT" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"EDIT_URL" => "",
		"IGNORE_CUSTOM_TEMPLATE" => "N",
		"LIST_URL" => "",
		"SEF_MODE" => "N",
		"SUCCESS_URL" => "",
		"USE_EXTENDED_ERRORS" => "Y",
		"VARIABLE_ALIASES" => array("WEB_FORM_ID"=>"WEB_FORM_ID","RESULT_ID"=>"RESULT_ID",),
		"WEB_FORM_ID" => "2"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php")?>