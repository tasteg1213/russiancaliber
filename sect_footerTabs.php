<div id="footerTabsCaption">
	<div class="wrapper">
		<div class="items">
			 <?$APPLICATION->ShowViewContent("catalog_top_view_content_tab");?> <?$APPLICATION->ShowViewContent("sale_viewed_product_view_content_tab");?>
		</div>
	</div>
</div>
<div id="footerTabs">
	<div class="wrapper">
		<div class="items">
			 <?$APPLICATION->IncludeComponent(
	"dresscode:products.by.filter",
	"",
	Array(
		"ADAPTIVE_VERSION" => "V2",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPONENT_TITLE" => "",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"CONVERT_CURRENCY" => "N",
		"CURRENCY_ID" => "RUB",
		"ELEMENTS_COUNT" => "20",
		"FILTER_TYPE" => "PROPERTY",
		"HIDE_MEASURES" => "N",
		"HIDE_NOT_AVAILABLE" => "N",
		"IBLOCK_ID" => "10",
		"IBLOCK_TYPE" => "catalog",
		"PICTURE_HEIGHT" => "200",
		"PICTURE_WIDTH" => "220",
		"PRODUCT_PRICE_CODE" => array("BASE"),
		"PROP_NAME" => "SALE_BEST_PROD",
		"PROP_VALUE" => "257",
		"SECTION_ID" => "437",
		"SORT_PROPERTY_NAME" => "RAND",
		"SORT_VALUE" => "ASC"
	),
false,
Array(
	'ACTIVE_COMPONENT' => 'Y'
)
);?> <?$APPLICATION->IncludeComponent(
	"dresscode:catalog.viewed.product",
	".default",
	Array(
		"ACTION_VARIABLE" => "action",
		"ADAPTIVE_VERSION" => "V2",
		"BASKET_URL" => "/personal/basket.php",
		"CACHE_TIME" => "12",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => ".default",
		"CONVERT_CURRENCY" => "N",
		"CURRENCY_ID" => "EUR",
		"ELEMENTS_COUNT" => "19",
		"HIDE_MEASURES" => "N",
		"HIDE_NOT_AVAILABLE" => "N",
		"IBLOCK_ID" => "10",
		"IBLOCK_TYPE" => "catalog",
		"PICTURE_HEIGHT" => "200",
		"PICTURE_WIDTH" => "220",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PRICE_CODE" => array(0=>"BASE",1=>"OPT_1",2=>"OPT_2",3=>"OPT1",),
		"PROP_NAME" => "OFFERS",
		"SET_TITLE" => "N",
		"SORT_PROPERTY_NAME" => "timestamp_x",
		"SORT_VALUE" => "DESC",
		"VIEWED_CANBASKET" => "N",
		"VIEWED_CANBUY" => "N",
		"VIEWED_COUNT" => "10",
		"VIEWED_CURRENCY" => "default",
		"VIEWED_IMAGE" => "Y",
		"VIEWED_IMG_HEIGHT" => "150",
		"VIEWED_IMG_WIDTH" => "150",
		"VIEWED_NAME" => "Y",
		"VIEWED_PRICE" => "Y"
	),
false,
Array(
	'ACTIVE_COMPONENT' => 'Y'
)
);?>
		</div>
	</div>
</div>
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.bigdata.products",
	".default",
	Array(
		"ACTION_VARIABLE" => "action_cbdp",
		"ADDITIONAL_PICT_PROP_17" => "MORE_PHOTO",
		"ADDITIONAL_PICT_PROP_18" => "MORE_PHOTO",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"BASKET_URL" => "/personal/basket.php",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "Y",
		"CART_PROPERTIES_17" => array(0=>"",1=>"",),
		"CART_PROPERTIES_18" => array(0=>"",1=>"",),
		"COMPONENT_TEMPLATE" => ".default",
		"CONVERT_CURRENCY" => "Y",
		"CURRENCY_ID" => "RUB",
		"DEPTH" => "",
		"DETAIL_URL" => "",
		"HIDE_NOT_AVAILABLE" => "N",
		"IBLOCK_ID" => "10",
		"IBLOCK_TYPE" => "catalog",
		"ID" => $_REQUEST["PRODUCT_ID"],
		"LABEL_PROP_17" => "-",
		"LINE_ELEMENT_COUNT" => "3",
		"MESS_BTN_BUY" => "",
		"MESS_BTN_DETAIL" => "",
		"MESS_BTN_SUBSCRIBE" => "",
		"OFFER_TREE_PROPS_18" => array(),
		"PAGE_ELEMENT_COUNT" => "10",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(0=>"BASE",1=>"OPT1",2=>"OPT_1",3=>"OPT_2",),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "",
		"PRODUCT_SUBSCRIPTION" => "N",
		"PROPERTY_CODE_17" => array(0=>"",1=>"",),
		"PROPERTY_CODE_18" => array(0=>"",1=>"",),
		"RCM_TYPE" => "personal",
		"SECTION_CODE" => "",
		"SECTION_ELEMENT_CODE" => "",
		"SECTION_ELEMENT_ID" => "",
		"SECTION_ID" => "",
		"SHOW_DISCOUNT_PERCENT" => "Y",
		"SHOW_FROM_SECTION" => "N",
		"SHOW_IMAGE" => "Y",
		"SHOW_NAME" => "Y",
		"SHOW_OLD_PRICE" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_PRODUCTS_17" => "Y",
		"TEMPLATE_THEME" => "blue",
		"USE_PRODUCT_QUANTITY" => "N"
	)
);?>