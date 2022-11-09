<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle(" ак стать оптовиком");?><div>
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
		<p class="bx_page">
			 <?if($_SERVER['HTTP_HOST'] != 'russiancaliber.ru'){?> <?$APPLICATION->IncludeComponent(
	"BKV:geo_data",
	"sdek",
Array()
);?> <?}else{?>
		</p>
		<h1> <b>–асчет стоимости аренды кислородных концентраторов</b></h1>
		<p>
			 ¬ зависимости от срока аренды мен€етс€ стоимость.
		</p>
		<p>
			 *–аботаем без залога&nbsp; <br>
			 *ѕри аренде на любой срок пульсоксиметр предоставл€етс€ бесплатно
		</p>
		<h2> <b>
		—тоимость концентратора производительностью до 5 литров/мин </b> </h2>
		<p>
		</p>
		<table border="1" cellpadding="1" cellspacing="1">
		<tbody>
		<tr>
			<td>
				 &nbsp;—рок аренды
			</td>
			<td>
				 &nbsp;—тоимость, руб
			</td>
		</tr>
		<tr>
			<td>
				 &nbsp;7 суток
			</td>
			<td>
				 &nbsp;5000
			</td>
		</tr>
		<tr>
			<td>
				 &nbsp;14 суток
			</td>
			<td>
				 &nbsp;7500
			</td>
		</tr>
		<tr>
			<td>
				 &nbsp;30 суток
			</td>
			<td>
				 &nbsp;10000
			</td>
		</tr>
		</tbody>
		</table>
 <br>
		<p>
		</p>
		<h2><b>—тоимость концентратора производительностью до 10 литров/мин</b></h2>
		<table border="1" cellpadding="1" cellspacing="1">
		<tbody>
		<tr>
			<td>
				 &nbsp;—рок аренды
			</td>
			<td>
				 &nbsp;—тоимость, руб
			</td>
		</tr>
		<tr>
			<td>
				 &nbsp;7 суток
			</td>
			<td>
				 &nbsp;12000
			</td>
		</tr>
		<tr>
			<td>
				 &nbsp;14 суток
			</td>
			<td>
				 &nbsp;18500
			</td>
		</tr>
		<tr>
			<td>
				 &nbsp;30 суток
			</td>
			<td>
				 &nbsp;28500<br>
			</td>
		</tr>
		</tbody>
		</table>
		<h2> <b>—тоимость доставки</b></h2>
		<p>
		</p>
		<p>
			 ƒоставка концентратора осуществл€етс€ в день обращени€ или на следующий день и рассчитываетс€ менеджером индивидуально в зависимости от вашего адреса&nbsp;и времени доставки.
		</p>
 <a href="/catalog/arenda_kislorodnykh_kontsentratorov/">¬ернутьс€ к выбору концентратора</a><br>
		<h2><br>
 </h2>
		<ul>
		</ul>
		 <?}?>
		<div>
 <br>
 <br>
		</div>
		<h1><br>
 </h1>
		<ul>
		</ul>
		<p>
		</p>
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