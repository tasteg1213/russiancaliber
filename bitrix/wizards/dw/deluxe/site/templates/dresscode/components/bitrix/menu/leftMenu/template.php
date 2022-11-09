<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if(CModule::IncludeModule("currency")):?> 
<?$this->setFrameMode(true);?>
	<?if (!empty($arResult)):?>
		<ul id="leftMenu">
			<?foreach($arResult["ITEMS"] as $nextElement):?>
				<li<?if(count($nextElement["ELEMENTS"][1]) || count($nextElement["ELEMENTS"][2])):?> class="eChild"<?endif;?>>
					<a href="<?=$nextElement["LINK"]?>" class="menuLink<?if ($nextElement["SELECTED"]):?> selected<?endif?>">
						<span class="tb">
							<?if(!empty($nextElement["PICTURE"])):?>
								<span class="pc">
									<img src="<?=$nextElement["PICTURE"]["src"]?>" alt="<?=$nextElement["TEXT"]?>">
								</span>
							<?endif;?>
							<span class="tx">
								<?=$nextElement["TEXT"]?>
							</span>
						</span>
					</a>
					<?if(count($nextElement["ELEMENTS"][1]) || count($nextElement["ELEMENTS"][2])):?>
						<div class="drop">
							<?if(count($nextElement["ELEMENTS"][1])):?>
								<ul class="menuItems">
									<?foreach($nextElement["ELEMENTS"][1] as $next2Elements):?>
										<li>
											<?if(!empty($next2Elements["PICTURE"]["src"])):?>
												<a href="<?=$next2Elements["LINK"]?>" class="menuLink">
													<img src="<?=$next2Elements["PICTURE"]["src"]?>" alt="<?=$next2Elements["TEXT"]?>">
												</a>
											<?endif;?>
											<a href="<?=$next2Elements["LINK"]?>" class="menuLink">
												<span><?=$next2Elements["TEXT"]?></span><small><?=$next2Elements["ELEMENT_CNT"]?></small>
											</a>
											
										</li>
											<?if(!empty($next2Elements["ELEMENTS"])):?>
												<?foreach($next2Elements["ELEMENTS"] as $next3Elements):?>
													<li><a href="<?=$next3Elements["LINK"]?>" class="menuLink"><?=$next3Elements["TEXT"]?><small><?=$next3Elements["ELEMENT_CNT"]?></small></a></li>
												<?endforeach;?>
											<?endif;?>
									<?endforeach?>
								</ul>
							<?endif;?>
							<?if(count($nextElement["ELEMENTS"][2])):?>
								<ul class="menuItems">
									<?foreach($nextElement["ELEMENTS"][2] as $next2Elements):?>
										<li>
											<?if(!empty($next2Elements["PICTURE"]["src"])):?>
												<a href="<?=$next2Elements["LINK"]?>" class="menuLink">
													<img src="<?=$next2Elements["PICTURE"]["src"]?>" alt="<?=$next2Elements["TEXT"]?>">
												</a>
											<?endif;?>
											<a href="<?=$next2Elements["LINK"]?>" class="menuLink"><span><?=$next2Elements["TEXT"]?></span><small><?=$next2Elements["ELEMENT_CNT"]?></small></a>
										</li>
										<?if(!empty($next2Elements["ELEMENTS"])):?>
											<?foreach($next2Elements["ELEMENTS"] as $next3Elements):?>
												<li><a href="<?=$next3Elements["LINK"]?>" class="menuLink"><?=$next3Elements["TEXT"]?><small><?=$next3Elements["ELEMENT_CNT"]?></small></a></li>
											<?endforeach;?>
										<?endif;?>
									<?endforeach?>
								</ul>
							<?endif;?>
							<?if(!empty($arResult["PRODUCTS"][$nextElement["ID"]])):?>
								<div id="menuSlider_<?=$nextElement["ID"]?>" class="menuSlider">
									<ul class="productList slideBox">
										<?foreach ($arResult["PRODUCTS"][$nextElement["ID"]] as $x => $arElement):?>
											<li>
												<div class="item product sku" id="<?=$this->GetEditAreaId($arElement["ID"]);?>" data-product-id="<?=!empty($arElement["~ID"]) ? $arElement["~ID"] : $arElement["ID"]?>" data-iblock-id="<?=$arElement["SKU_INFO"]["IBLOCK_ID"]?>" data-prop-id="<?=$arElement["SKU_INFO"]["SKU_PROPERTY_ID"]?>" data-product-width="180" data-product-height="240" data-hide-measure="<?=$arParams["HIDE_MEASURES"]?>">
													<div class="tabloid">
														<a href="#" class="removeFromWishlist" data-id="<?=$arElement["~ID"]?>"></a>
														<?if(!empty($arElement["PROPERTIES"]["OFFERS"]["VALUE"])):?>
															<div class="markerContainer">
																<?foreach ($arElement["PROPERTIES"]["OFFERS"]["VALUE"] as $ifv => $marker):?>
																    <div class="marker" style="background-color: <?=strstr($arElement["PROPERTIES"]["OFFERS"]["VALUE_XML_ID"][$ifv], "#") ? $arElement["PROPERTIES"]["OFFERS"]["VALUE_XML_ID"][$ifv] : "#424242"?>"><?=$marker?></div>
																<?endforeach;?>
															</div>
														<?endif;?>
														<?if(isset($arElement["PROPERTIES"]["RATING"]["VALUE"])):?>
														    <div class="rating">
														      <i class="m" style="width:<?=($arElement["PROPERTIES"]["RATING"]["VALUE"] * 100 / 5)?>%"></i>
														      <i class="h"></i>
														    </div>
													    <?endif;?>
														<a href="<?=$arElement["DETAIL_PAGE_URL"]?>" class="picture">
															<img src="<?=$arElement["PICTURE"]["src"]?>" alt="<?=$arElement["NAME"]?>">
															<span class="getFastView" data-id="<?=$arElement["ID"]?>"><?=GetMessage("FAST_VIEW_PRODUCT_LABEL")?></span>
														</a>
														<a href="<?=$arElement["DETAIL_PAGE_URL"]?>" class="name"><span class="middle"><?=$arElement["NAME"]?></span></a>
														<?if(!empty($arElement["PRICE"])):?>
															<?if($arElement["COUNT_PRICES"] > 1):?>
																<a href="#" class="price getPricesWindow" data-id="<?=$arElement["ID"]?>">
																	<span class="priceIcon"></span><?=CCurrencyLang::CurrencyFormat($arElement["PRICE"]["RESULT_PRICE"]["DISCOUNT_PRICE"], $arElement["PRICE"]["RESULT_PRICE"]["CURRENCY"])?>
																	<?if($arParams["HIDE_MEASURES"] != "Y" && !empty($arResult["MEASURES"][$arElement["CATALOG_MEASURE"]]["SYMBOL_RUS"])):?>
																		<span class="measure"> / <?=$arResult["MEASURES"][$arElement["CATALOG_MEASURE"]]["SYMBOL_RUS"]?></span>
																	<?endif;?>
																	<?if(!empty($arElement["PRICE"]["RESULT_PRICE"]["DISCOUNT"])):?>
																		<s class="discount"><?=CCurrencyLang::CurrencyFormat($arElement["PRICE"]["RESULT_PRICE"]["BASE_PRICE"], $arElement["PRICE"]["RESULT_PRICE"]["CURRENCY"])?></s>
																	<?endif;?>
																</a>
															<?else:?>
																<a class="price"><?=CCurrencyLang::CurrencyFormat($arElement["PRICE"]["RESULT_PRICE"]["DISCOUNT_PRICE"], $arElement["PRICE"]["RESULT_PRICE"]["CURRENCY"])?>
																	<?if($arParams["HIDE_MEASURES"] != "Y" && !empty($arResult["MEASURES"][$arElement["CATALOG_MEASURE"]]["SYMBOL_RUS"])):?>
																		<span class="measure"> / <?=$arResult["MEASURES"][$arElement["CATALOG_MEASURE"]]["SYMBOL_RUS"]?></span>
																	<?endif;?>
																	<?if(!empty($arElement["PRICE"]["RESULT_PRICE"]["DISCOUNT"])):?>
																		<s class="discount"><?=CCurrencyLang::CurrencyFormat($arElement["PRICE"]["RESULT_PRICE"]["BASE_PRICE"], $arElement["PRICE"]["RESULT_PRICE"]["CURRENCY"])?></s>
																	<?endif;?>
																</a>
															<?endif;?>
															<a href="#" class="addCart" data-id="<?=$arElement["ID"]?>"><img src="<?=SITE_TEMPLATE_PATH?>/images/incart.png" alt="" class="icon"><?=GetMessage("ADDCART_LABEL")?></a>
														<?else:?>
															<a class="price"><?=GetMessage("REQUEST_PRICE_LABEL")?></a>
															<a href="#" class="addCart disabled requestPrice" data-id="<?=$arElement["ID"]?>"><img src="<?=SITE_TEMPLATE_PATH?>/images/request.png" alt="" class="icon"><?=GetMessage("REQUEST_PRICE_BUTTON_LABEL")?></a>
														<?endif;?>
														<div class="optional">
															<div class="row">
																<a href="#" class="fastBack label<?if(empty($arElement["PRICE"]) || $arElement["CAN_BUY"] === "N" || $arElement["CAN_BUY"] === false):?> disabled<?endif;?>" data-id="<?=$arElement["ID"]?>"><img src="<?=SITE_TEMPLATE_PATH?>/images/fastBack.png" alt="" class="icon"><?=GetMessage("FASTBACK_LABEL")?></a>
																<a href="#" class="addCompare label" data-id="<?=$arElement["ID"]?>"><img src="<?=SITE_TEMPLATE_PATH?>/images/compare.png" alt="" class="icon"><?=GetMessage("COMPARE_LABEL")?></a>
															</div>
															<div class="row">
																<a href="#" class="addWishlist label" data-id="<?=$arElement["~ID"]?>"><img src="<?=SITE_TEMPLATE_PATH?>/images/wishlist.png" alt="" class="icon"><?=GetMessage("WISHLIST_LABEL")?></a>
																<?if($arElement["CATALOG_QUANTITY"] > 0):?>
																	<?if(!empty($arElement["STORES"])):?>
																		<a href="#" data-id="<?=$arElement["ID"]?>" class="inStock label changeAvailable getStoresWindow"><img src="<?=SITE_TEMPLATE_PATH?>/images/inStock.png" alt="<?=GetMessage("AVAILABLE")?>" class="icon"><span><?=GetMessage("AVAILABLE")?></span></a>
																	<?else:?>
																		<span class="inStock label changeAvailable"><img src="<?=SITE_TEMPLATE_PATH?>/images/inStock.png" alt="<?=GetMessage("AVAILABLE")?>" class="icon"><span><?=GetMessage("AVAILABLE")?></span></span>
																	<?endif;?>
																<?else:?>
																	<?if($arElement["CAN_BUY"] == true):?>
																		<a class="onOrder label changeAvailable"><img src="<?=SITE_TEMPLATE_PATH?>/images/onOrder.png" alt="" class="icon"><?=GetMessage("ON_ORDER")?></a>
																	<?else:?>
																		<a class="outOfStock label changeAvailable"><img src="<?=SITE_TEMPLATE_PATH?>/images/outOfStock.png" alt="" class="icon"><?=GetMessage("NOAVAILABLE")?></a>
																	<?endif;?>
																<?endif;?>
															</div>						
														</div>
														<?if(!empty($arElement["OFFERS"])):?>
															<?if(!empty($arElement["SKU_PROPERTIES"]) && $level = 1):?>
																<?foreach ($arElement["SKU_PROPERTIES"] as $propName => $arNextProp):?>
																	<?if(!empty($arNextProp["VALUES"])):?>
																		<div class="skuProperty" data-name="<?=$propName?>" data-level="<?=$level++?>" data-highload="<?=$arNextProp["HIGHLOAD"]?>">
																			<div class="skuPropertyName"><?=$arNextProp["NAME"]?></div>
																			<ul class="skuPropertyList">
																				<?foreach ($arNextProp["VALUES"] as $xml_id => $arNextPropValue):?>
																					<li class="skuPropertyValue<?if($arNextPropValue["DISABLED"] == "Y"):?> disabled<?elseif($arNextPropValue["SELECTED"] == "Y"):?> selected<?endif;?>" data-name="<?=$propName?>" data-value="<?=$arNextPropValue["VALUE"]?>">
																						<a href="#" class="skuPropertyLink">
																							<?if(!empty($arNextPropValue["IMAGE"])):?>
																								<img src="<?=$arNextPropValue["IMAGE"]["src"]?>" alt="">
																							<?else:?>
																								<?=$arNextPropValue["DISPLAY_VALUE"]?>
																							<?endif;?>
																						</a>
																					</li>
																				<?endforeach;?>
																			</ul>
																		</div>
																	<?endif;?>
																<?endforeach;?>
															<?endif;?>
														<?endif;?>
													</div>
												</div>
											</li>
										<?endforeach;?>
									</ul>
									<a href="#" class="slideBtnLeft"></a>
									<a href="#" class="slideBtnRight"></a>
								</div>
								<script type="text/javascript">
									$(document).ready(function(){
										$("#menuSlider_<?=$nextElement["ID"]?>").dwSlider({
											speed: 200,
											delay: 5000,
											leftButton: "#menuSlider_<?=$nextElement["ID"]?> .slideBtnLeft",
											rightButton: "#menuSlider_<?=$nextElement["ID"]?> .slideBtnRight",
										});
									});
								</script>
							<?endif;?>
						</div>
					<?endif;?>
				</li>
			<?endforeach;?>
		</ul>
	<?endif;?>
<?endif;?>