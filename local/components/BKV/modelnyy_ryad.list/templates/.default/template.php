<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
global $USER;

 ?>

<?if (!empty($arResult["ITEMS"])):
    $arParams["HIDE_MEASURES"] = "Y";
    ?>
    <div class="modelTableList_title hidden-m">
        <span class="heading"><?= $arParams["TEXT_NAME_MODEL"] ?> <?= $arResult["MODEL_RAD_NAME"] ?></span>
    </div>
    <div id="mobile_column">
        <a href="#" class="show_model_line-mobele"><?= GetMessage("MODEL_MOBILE_BUTTON_LIST_TITLE"); ?> <?= $arResult["MODEL_RAD_NAME"]?></a>
    </div>


    <?if ($arParams["DISPLAY_TOP_PAGER"]){
        ?><? echo $arResult["NAV_STRING"]; ?><?
    }?>

    <div id="modelTableList">
        <?foreach($arResult["ITEMS"] as $arElement):?>
            <?$APPLICATION->IncludeComponent(
                "dresscode:catalog.item",
                "table",
                array(
                    "CACHE_TIME" => $arParams["CACHE_TIME"],
                    "CACHE_TYPE" => $arParams["CACHE_TYPE"],
                    "HIDE_MEASURES" => $arParams["HIDE_MEASURES"],
                    "HIDE_NOT_AVAILABLE" => $arParams["HIDE_NOT_AVAILABLE"],
                    "IBLOCK_ID" => $arParams["IBLOCK_ID"],
                    "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
                    "PRODUCT_SKU_FILTER" => $arResult["FILTER"],
                    "PRODUCT_ID" => $arElement["ID"],
                    "PICTURE_HEIGHT" => "",
                    "PICTURE_WIDTH" => "",
                    "CONVERT_CURRENCY" => $arParams["CONVERT_CURRENCY"],
                    "CURRENCY_ID" => $arParams["CURRENCY_ID"],
                    "PRODUCT_PRICE_CODE" => $arParams["PRICE_CODE"],
                    "PRODUCT_DISPLAY_PROPERTIES" => $arParams["PROPERTY_CODE"],
                    "SHOW_PRICES_IN_OPTION_COLUMN" => "Y" // Отображение цены в колонке опций
                ),
                false,
                array("HIDE_ICONS" => "Y")
            );?>
        <?endforeach;?>
        <a href="#" class="model_btn"><?= GetMessage("MODEL_BUTTON_LIST_TITLE"); ?> <?= $arResult["MODEL_RAD_NAME"]?></a>
    </div>

    <?
    if ($arParams["DISPLAY_BOTTOM_PAGER"]){
        ?><? echo $arResult["NAV_STRING"]; ?><?
    }
    ?>

    <?if(empty($arParams["HIDE_DESCRIPTION_TEXT"]) || $arParams["HIDE_DESCRIPTION_TEXT"] != "Y"):?>
        <?if(empty($_GET["PAGEN_".$arResult["NAV_NUM_PAGE"]])):?>
            <div><?=$arResult["~DESCRIPTION"]?></div>
        <?endif;?>
    <?endif;?>





<? //<div id="model_ryd" class=""> ?>
    <div id="model_ryd" class="hidden">
        <div class="heading"><?/*= $arParams["TEXT_NAME_MODEL"] ?> <?= $arResult["MODEL_RAD_NAME"] */?></div>

        <div id="compare">

            <div id="compareBlock">

                <table>
                    <tr>
                        <td class="left">
                            <div class="wrap">
                                <div class="headingTools">
                                    <div class="leftTools">
                                        <a href="#" class="all"><?= GetMessage("ALLFEATURES"); ?></a>
                                        <a href="#" class="different"><?= GetMessage("DISTINGUISHED"); ?></a>
                                    </div>
                                </div>
                                <ul class="propList">
                                    <? if (!empty($arResult["PROPERTIES"])): ?>
                                        <? foreach ($arResult["PROPERTIES"] as $index => $arProp): ?>
                                            <?if ($index == "OFFERS") continue;?>
                                            <li data-id="<?= $arProp["ID"] ?>" class="<?//=$dop_class?>"
                                                title="<?= $arProp["NAME"] ?>">
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
                                                <?= $arProp["NAME"] ?>
                                            </li>
                                        <? endforeach; ?>
                                    <? endif; ?>
                                </ul>
                            </div>
                        </td>
                        <td class="right">
                            <div id="topScroll">
                                <div id="fakeScroll"></div>
                            </div>
                            <div id="scrollTable">
                                <ul>
                                    <? foreach ($arResult["ITEMS"] as $index => $arElement): ?>
                                        <? $this->AddEditAction($arElement['ID'], $arElement['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT")); ?>
                                        <? $this->AddDeleteAction($arElement['ID'], $arElement['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array()); ?>
                                        <li>

                                            <div class="scrollElement"
                                                 id="<?= $this->GetEditAreaId($arElement['ID']); ?>">


                                                <a href="<?= $arElement["DETAIL_PAGE_URL"] ?>" class="name"><span
                                                            class="middle">
                                                        <?
                                                        $name = $arElement["NAME"];
                                                        if($arResult["MODEL_RAD_INFO"][$index]["SHORT_NAME"])
                                                            $name = $arResult["MODEL_RAD_INFO"][$index]["SHORT_NAME"];
                                                        echo substr($name, 0, 33);
                                                        ?>
                                                    </span></a>


                                                <?/* if (!empty($arElement["PRICE"])): ?>
                                                    <span class="price"><? if (!empty($arElement["SKU_SHOW_FROM"])): echo GetMessage("FROM"); endif; ?><?= $arElement["PRICE"]; ?></span>
                                                    <? if ($arElement["CATALOG_AVAILABLE"] != "Y"): ?>
                                                        <? //addCart button?>
                                                        <? if ($arElement["CATALOG_SUBSCRIBE"] == "Y"): ?>
                                                            <a href="#" class="addCart subscribe"
                                                               data-ibl="<?= $arElement["IBLOCK_ID"] ?>"
                                                               data-id="<?= $arElement["ID"] ?>"><img
                                                                        src="<?= SITE_TEMPLATE_PATH ?>/images/subscribe.png"
                                                                        alt="<?= GetMessage("SUBSCRIBE_LABEL") ?>"
                                                                        class="icon"><?= GetMessage("SUBSCRIBE_LABEL") ?>
                                                            </a>
                                                        <? else: ?>
                                                            <a href="#" class="addCart disabled"
                                                               data-ibl="<?= $arElement["IBLOCK_ID"] ?>"
                                                               data-id="<?= $arElement["ID"] ?>"><img
                                                                        src="<?= SITE_TEMPLATE_PATH ?>/images/incart.png"
                                                                alt="<?= GetMessage("ADDCART_LABEL") ?>"
                                                                class="icon"><?= GetMessage("ADDCART_LABEL") ?>
                                                            </a>
                                                        <? endif; ?>
                                                    <? else: ?>
                                                        <a href="#" class="addCart"
                                                           data-id="<?= $arElement["ID"] ?>"><img
                                                           src="<?= SITE_TEMPLATE_PATH ?>/images/incart.png"
                                                           alt="<?= GetMessage("ADDCART_LABEL") ?>"
                                                           class="icon"><?= GetMessage("ADDCART_LABEL") ?>
                                                        </a>
                                                    <? endif; ?>
                                                <? else: ?>

                                                    <span class="price"><?= GetMessage("REQUEST_PRICE_LABEL") ?></span>
                                                    <a  href="#" class="addCart disabled requestPrice"
                                                        data-ibl="<?= $arElement["IBLOCK_ID"] ?>"
                                                        data-id="<?= $arElement["ID"] ?>">
                                                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/request.png"
                                                        alt=""
                                                        class="icon"><?= GetMessage("REQUEST_PRICE_BUTTON_LABEL") ?>
                                                    </a>
                                                <? endif; */?>


                                                

                                                <? if ($arElement["CATALOG_QUANTITY"] > 0): ?>
                                                    <? if (!empty($arElement["EXTRA_SETTINGS"]["STORES"]) && $arElement["EXTRA_SETTINGS"]["STORES_MAX_QUANTITY"] > 0): ?>
                                                        <a href="#" data-id="<?= $arResult["ID"] ?>"
                                                           class="inStock label eChangeAvailable getStoresWindow"><img
                                                            src="<?= SITE_TEMPLATE_PATH ?>/images/inStock.png"
                                                            alt="<?= GetMessage("AVAILABLE") ?>"
                                                            class="icon"><span><?= GetMessage("AVAILABLE") ?></span></a>
                                                    <?/* elseif (reset($arElement["PROPERTIES"]["OFFERS"]["VALUE_ENUM_ID"]) == "211"): ?>
                                                        <a class="outOfStock label eChangeAvailable">
                                                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/outOfStock.png" alt="<?= GetMessage("NOT_AVAIBLE_LABEL") ?>" class="icon"> <?= GetMessage("NOT_AVAIBLE_LABEL") ?>
                                                        </a>
                                                    <?*/ else: ?>
                                                        <span class="inStock label eChangeAvailable"><img
                                                            src="<?= SITE_TEMPLATE_PATH ?>/images/inStock.png"
                                                            alt="<?= GetMessage("AVAILABLE") ?>"
                                                            class="icon"><span><?= GetMessage("AVAILABLE") ?></span></span>
                                                    <? endif; ?>
                                                <? else: ?>
                                                    <? if ($arElement["CATALOG_AVAILABLE"] !== "Y"): ?>
                                                        <a class="outOfStock label eChangeAvailable">
                                                        	<img src="<?= SITE_TEMPLATE_PATH ?>/images/outOfStock.png" alt="<?= GetMessage("CATALOG_NO_AVAILABLE") ?>" class="icon"> <?= GetMessage("CATALOG_NO_AVAILABLE") ?>
                                                        </a>
                                                    <? elseif (reset($arElement["PROPERTIES"]["OFFERS"]["VALUE_ENUM_ID"]) == "211"): ?>
                                                        <a class="outOfStock label eChangeAvailable">
                                                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/outOfStock.png" alt="<?= GetMessage("NOT_AVAIBLE_LABEL") ?>" class="icon"> <?= GetMessage("NOT_AVAIBLE_LABEL") ?>
                                                        </a>
                                                    <? else: ?>
                                                        <a class="onOrder label eChangeAvailable">
                                                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/onOrder.png" alt="<?= GetMessage("ON_ORDER") ?>" class="icon"><?= GetMessage("ON_ORDER") ?>
                                                        </a>

                                                    <? endif; ?>
                                                <? endif; ?>


                                                <?if($arElement["CATALOG_QUANTITY"] > 0 /*&& reset($arElement["PROPERTIES"]["OFFERS"]["VALUE_ENUM_ID"]) !== "211"*/):?>

                                                    <?if(!empty($arElement["PRICE"])):?>
                                                        <span class="price">
                                                            <?if(!empty($arElement["SKU_SHOW_FROM"])): echo GetMessage("FROM"); endif;?>
                                                            <?=$arElement["PRICE"];?>
                                                        </span>


                                                        <?if($arElement["CATALOG_AVAILABLE"] != "Y" && $arElement["CATALOG_QUANTITY"] > 0):?>
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
                                                            <?if($arElement["CATALOG_QUANTITY"] > 0):?>
                                                                <a href="#" class="addCart changeID changeQty changeCart" data-id="<?=$arElement["ID"]?>"
                                                                   data-quantity="<?=$arElement["EXTRA_SETTINGS"]["BASKET_STEP"]?>">
                                                                    <img src="<?=SITE_TEMPLATE_PATH?>/images/incart.png" alt="<?=GetMessage("ADDCART_LABEL")?>" class="icon">
                                                                    <?=GetMessage("ADDCART_LABEL")?>
                                                                </a>
                                                            <?else:?>
                                                                <a href="#" class="addCart changeID changeQty on_u_order" data-item-name='<?=$arElement["NAME"]?>'
                                                                   data-item-image = '<?=$arElement["PICTURE"]["src"]?>' data-item-price = '<?=$arElement["PRICE"]["PRICE"]["PRICE"]?>'>
                                                                    <?echo GetMessage("ON_ORDER_LABEL");?>
                                                                </a>
                                                            <?endif;?>
                                                        <?endif;?>
                                                    <?else:?>
                                                        <span class="price"><?=GetMessage("REQUEST_PRICE_LABEL")?></span>
                                                        <a href="#" class="addCart disabled requestPrice" data-ibl="<?=$arElement["IBLOCK_ID"]?>" data-id="<?=$arElement["ID"]?>">
                                                            <img src="<?=SITE_TEMPLATE_PATH?>/images/request.png" alt="" class="icon">
                                                            <?=GetMessage("REQUEST_PRICE_BUTTON_LABEL")?>
                                                        </a>
                                                    <?endif;?>
                    

                                                <?elseif(reset($arElement["PROPERTIES"]["OFFERS"]["VALUE_ENUM_ID"]) == "211"):?>
                                                <?
                    // global $USER;
                    // if ($USER->IsAdmin()) {
                    //     echo "<pre>";
                    //     print_r($arElement);
                    //     echo "</pre>";
                    // }
                    ?>
                                                    <span class="price">
                                                        <?if(!empty($arElement["SKU_SHOW_FROM"])): echo GetMessage("FROM"); endif;?>
                                                        <?=$arElement["PRICE"];?>
                                                    </span>
                                                    <span class="addCart notAvaible">
                                                        <?=GetMessage("NOT_AVAIBLE_LABEL")?>
                                                    </span>
                                                <?else:?>
                                                    <?if(!empty($arElement["PRICE"]) && $arElement["PRICE"] > 0){?>
                                                        <span class="price"><?=$arElement["PRICE"];?></span>
                                                    <?}else{?>
                                                        <span class="price"><?=GetMessage("REQUEST_PRICE_LABEL")?></span>
                                                    <?}?>
                                                    <a href="#" class="addCart changeID changeQty on_u_order" data-item-name='<?=$arElement["NAME"]?>'
                                                       data-item-image = '<?=$arElement["PICTURE"]["src"]?>' data-item-price = '<?=$arElement["PRICE"]["PRICE"]["PRICE"]?>'>
                                                        <?echo GetMessage("ON_ORDER_LABEL");?>
                                                    </a>
                                                <?endif;?>



                                            </div>


                                            <ul class="propList check">
                                                <? if (!empty($arElement["PROPERTIES"])): ?>
                                                    <? foreach ($arElement["PROPERTIES"] as $index => $arProp): ?>
                                                    	<?
                                                    	if ($index == "OFFERS") continue;
                                                    	 
                                                        if (is_array($arProp["DISPLAY_VALUE"]))
                                                            $arProp["DISPLAY_VALUE"] = implode("/",$arProp["DISPLAY_VALUE"]);
                                                        
                                                        if (empty($arProp["DISPLAY_VALUE"]))
                                                        	$arProp["DISPLAY_VALUE"] = GetMessage("MODEL_EMPTY_PROP");?>

                                                        <li data-hint="<?= $arProp["DISPLAY_VALUE"] ?>"
                                                            data-id="<?= $arProp["ID"] ?>"><?= $arProp["DISPLAY_VALUE"] ?></li>
                                                    <? endforeach; ?>
                                                <? endif; ?>
                                            </ul>
                                        </li>
                                    <? endforeach; ?>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div id="hintCompare"></div>
    </div>
<? else: ?>
    FALSE
<?endif;?>
