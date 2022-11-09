<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О магазине");
?><h1>О нас</h1>
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
				С 2017 года занимаемся&nbsp;продажей и монтажем медицинских приборов, бактерицидных рециркуляторов, кислородных аппаратов и тепловизионных систем контроля температуры людей со СКУД и Face ID. Являемся официальным дилером торговых марок представленных на сайте. <b><br>
 </b>
			</p>
			 Преимущества работы с нами<b>:</b><br>
			<ol>
				<li>
				<p>
 <b>Компетентные консультации при выборе изделий</b>. Мы занимались разработкой и испытаниями приборов которые продаем, нам есть что вам рассказать.
				</p>
 </li>
				<li>
				<p>
					 Осуществляем <b>услуги по ремонтно-восстановительным работам</b> и гарантийному обслуживанию.
				</p>
 </li>
				<li>
				<p>
 <b>Осуществляем доставку день в день.</b>
				</p>
 </li>
				<li>
				<p>
					 Наша бизнес-модель: <b>выгодные цены</b> по низу рынка и качественное оборудование .&nbsp;
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