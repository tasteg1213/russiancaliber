<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); $this->setFrameMode(true);?>
<?if(!empty($arResult["ITEMS"])):?>

<?
//    echo "<pre>";
//    print_r($arResult);
//    echo "</pre>";
    ?>

<div id="compare">
    
	<div id="compareBlock">

		<table>
			<tr>
				<td class="left">
                    <!-- <div id="topScroll">
                        <div id="fakeScroll"></div>
                    </div> -->
					<div class="wrap">
						<img src="<?=SITE_TEMPLATE_PATH?>/images/empty.png" alt="" class="compareImage">
						<div class="headingTools">
							<div class="leftTools">
								<a href="#" class="all"><?=GetMessage("ALLFEATURES");?></a>
								<a href="#" class="different"><?=GetMessage("DISTINGUISHED");?></a>
							</div>
						</div>
						<ul class="propList">
							<?if(!empty($arResult["PROPERTIES"])):?>
								<?foreach ($arResult["PROPERTIES"] as $index => $arProp):?>
									<li data-id="<?=$arProp["ID"]?>" title="<?=$arProp["NAME"]?>">
                                        <?if ($arResult['FILTER_HINT'][$arProp['ID']]['FILTER_HINT']){?>
                                            <noindex>
                                                <div class="hint">
                                                    <div class="hintValue hint_hide" >
                                                        <?=$arResult['FILTER_HINT'][$arProp['ID']]['FILTER_HINT']?>
                                                        <ins class="close">x</ins>
                                                    </div>
                                                </div>
                                            </noindex>
                                        <?}?>
                                        <?=$arProp["NAME"]?>
                                    </li>
								<?endforeach;?>
							<?endif;?>
						</ul>
					</div>
				</td>

				<td class="right">
					<div id="topScroll">
						<div id="fakeScroll"></div>
					</div>
					<div id="scrollTable">
						<ul>
							<?foreach($arResult["ITEMS"] as $index => $arElement):?>
                                <?
//                                echo "<pre>";
//                                print_r($arElement);
//                                echo "<pre>";
                                ?>

								<?$this->AddEditAction($arElement['ID'], $arElement['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));?>
								<?$this->AddDeleteAction($arElement['ID'], $arElement['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array());?>
								<li>

									<div class="scrollElement" id="<?=$this->GetEditAreaId($arElement['ID']);?>">
                                        <ins data-id="<?=$arElement["ID"]?>"></ins>
                                        <div class="imgBlock"><a href="<?=$arElement["DETAIL_PAGE_URL"]?>"><img src="<?=!empty($arElement["PICTURE"]["src"]) ? $arElement["PICTURE"]["src"] : SITE_TEMPLATE_PATH."/images/empty.png" ?>" alt="<?=$arElement["NAME"]?>"></a></div>
                                        <a href="<?=$arElement["DETAIL_PAGE_URL"]?>" class="name"><span class="middle"><?=$arElement["NAME"]?></span></a>
                                        

<!-- $arElement["PROPERTY_OFFERS_ENUM_ID"] !== "211" -->

                                        <?if(!empty($arElement["PRICE"])):?>
                                            <span class="price"><?if(!empty($arElement["SKU_SHOW_FROM"])): echo GetMessage("FROM"); endif;?><?=$arElement["PRICE"];?></span>
                                            



                                            <?/*if($arElement["CATALOG_AVAILABLE"] != "Y" ):?>
                                                <?//addCart button?>
                                                <?if($arElement["CATALOG_SUBSCRIBE"] == "Y"):?>
                                                    <a href="#" class="addCart subscribe" data-ibl="<?=$arElement["IBLOCK_ID"]?>" data-id="<?=$arElement["ID"]?>"><img src="<?=SITE_TEMPLATE_PATH?>/images/subscribe.png" alt="<?=GetMessage("SUBSCRIBE_LABEL")?>" class="icon"><?=GetMessage("SUBSCRIBE_LABEL")?></a>
                                                <?else:?>
                                                    <a href="#" class="addCart disabled" data-ibl="<?=$arElement["IBLOCK_ID"]?>" data-id="<?=$arElement["ID"]?>"><img src="<?=SITE_TEMPLATE_PATH?>/images/incart.png" alt="<?=GetMessage("ADDCART_LABEL")?>" class="icon"><?=GetMessage("ADDCART_LABEL")?></a>
                                                <?endif;?>
                                            <?else:?>
                                                <a href="#" class="addCart" data-id="<?=$arElement["ID"]?>"><img src="<?=SITE_TEMPLATE_PATH?>/images/incart.png" alt="<?=GetMessage("ADDCART_LABEL")?>" class="icon"><?=GetMessage("ADDCART_LABEL")?></a>
                                            <?endif;*/?>

                                            <?if($arElement["CATALOG_AVAILABLE"] != "Y" && $arElement["CATALOG_QUANTITY"] > 0):?> 111
                                                <?//addCart button?>
                                                <?if($arElement["CATALOG_SUBSCRIBE"] == "Y"):?>
                                                    <a href="#" class="addCart subscribe" data-ibl="<?=$arElement["IBLOCK_ID"]?>" data-id="<?=$arElement["ID"]?>">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/images/subscribe.png" alt="<?=GetMessage("SUBSCRIBE_LABEL")?>" class="icon">
                                                        <?=GetMessage("SUBSCRIBE_LABEL")?>
                                                    </a>
                                                <?else:?>
                                                    <a href="#" class="addCart disabled" data-ibl="<?=$arElement["IBLOCK_ID"]?>" data-id="<?=$arElement["ID"]?>">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/images/incart.png" alt="<?=GetMessage("ADDCART_LABEL")?>" class="icon">
                                                        <?=GetMessage("ADDCART_LABEL")?>
                                                    </a>
                                                <?endif;?>
                                            <?else:?>
                                                <?if($arElement["CATALOG_QUANTITY"] < 1 && $arElement["PROPERTY_OFFERS_ENUM_ID"] !== "211"):?>
                                                    <a href="#" class="addCart changeID changeQty on_u_order" data-item-name='<?=$arElement["NAME"]?>'
                                                       data-item-image = '<?=$arElement["PICTURE"]["src"]?>' data-item-price = '<?=$arElement["PRICE"]["PRICE"]["PRICE"]?>'>
                                                        <?echo GetMessage("ON_ORDER_LABEL");?>
                                                    </a>
                                                <?elseif($arElement["CATALOG_QUANTITY"] == 0 && $arElement["PROPERTY_OFFERS_ENUM_ID"] == "211"):?>
                                                    <span class="addCart notAvaible">
                                                        <?=GetMessage("NOT_AVAIBLE_LABEL")?>
                                                    </span>
                                                <?else:?>
                                                    <a href="#" class="addCart changeID changeQty changeCart" data-id="<?=$arElement["ID"]?>"
                                                       data-quantity="<?=$arElement["EXTRA_SETTINGS"]["BASKET_STEP"]?>">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/images/incart.png" alt="<?=GetMessage("ADDCART_LABEL")?>" class="icon">
                                                        <?=GetMessage("ADDCART_LABEL")?>
                                                    </a>
                                                <?endif;?>
                                            <?endif;?>


                                        <?else:?>
                                            <span class="price"><?=GetMessage("REQUEST_PRICE_LABEL")?></span>
                                            <a href="#" class="addCart disabled requestPrice" data-ibl="<?=$arElement["IBLOCK_ID"]?>" data-id="<?=$arElement["ID"]?>"><img src="<?=SITE_TEMPLATE_PATH?>/images/request.png" alt="" class="icon"><?=GetMessage("REQUEST_PRICE_BUTTON_LABEL")?></a>
                                        <?endif;?>
                                    </div>
									<ul class="propList check">
										<?if(!empty($arElement["PROPERTIES"])):?>
											<?foreach ($arElement["PROPERTIES"] as $index => $arProp):?>
												<li data-hint="<?= $arProp["DISPLAY_VALUE"] ?>" data-id="<?=$arProp["ID"]?>"><?=$arProp["DISPLAY_VALUE"]?></li>
											<?endforeach;?>
										<?endif;?>
									</ul>
								</li>
							<?endforeach;?>
						</ul>
					</div>
				</td>
			</tr>
		</table>
</div>
    <div id="hintCompare"></div>
</div>
<?else:?>
	<div id="empty">
		<div class="emptyWrapper">
			<div class="pictureContainer">
				<img src="<?=SITE_TEMPLATE_PATH?>/images/emptyFolder.png" alt="<?=GetMessage("EMPTY_HEADING")?>" class="emptyImg">
			</div>
			<div class="info">
				<h3><?=GetMessage("EMPTY_HEADING")?></h3>
				<p><?=GetMessage("EMPTY_TEXT")?></p>
				<a href="<?=SITE_DIR?>" class="back"><?=GetMessage("MAIN_PAGE")?></a>
			</div>
		</div>
		<?$APPLICATION->IncludeComponent("bitrix:menu", "emptyMenu", Array(
			"ROOT_MENU_TYPE" => "left",
				"MENU_CACHE_TYPE" => "N",
				"MENU_CACHE_TIME" => "3600",
				"MENU_CACHE_USE_GROUPS" => "Y",
				"MENU_CACHE_GET_VARS" => "",
				"MAX_LEVEL" => "1",
				"CHILD_MENU_TYPE" => "left",
				"USE_EXT" => "Y",
				"DELAY" => "N",
				"ALLOW_MULTI_SELECT" => "N",
			),
			false
		);?>
	</div>
<?endif;?>