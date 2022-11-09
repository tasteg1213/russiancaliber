<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true); ?>
<? if (!empty($arResult["ITEMS"])) { ?>

    <div id="model_ryd">
        <div class="heading"><?= $arParams["TEXT_NAME_MODEL"] ?> <?= $arResult["MODEL_RAD_NAME"] ?></div>

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
                                            <?/* $dop_class = false;
                                            if ($arResult['FILTER_HINT'][$arProp['ID']]['FILTER_HINT'])
                                                $dop_class = 'visibleHint';
                                            */?>
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
                                                            class="middle"><?= $arResult["MODEL_RAD_INFO"][$index]["SHORT_NAME"] ? $arResult["MODEL_RAD_INFO"][$index]["SHORT_NAME"] : $arElement["NAME"] ?></span></a>


                                                <? if ($arElement["CATALOG_QUANTITY"] > 0): ?>
                                                    <? if (!empty($arElement["EXTRA_SETTINGS"]["STORES"]) && $arElement["EXTRA_SETTINGS"]["STORES_MAX_QUANTITY"] > 0): ?>
                                                        <a href="#" data-id="<?= $arResult["ID"] ?>"
                                                           class="inStock label eChangeAvailable getStoresWindow"><img
                                                                    src="<?= SITE_TEMPLATE_PATH ?>/images/inStock.png"
                                                                    alt="<?= GetMessage("AVAILABLE") ?>"
                                                                    class="icon"><span><?= GetMessage("AVAILABLE") ?></span></a>
                                                    <? else: ?>
                                                        <span class="inStock label eChangeAvailable"><img
                                                                    src="<?= SITE_TEMPLATE_PATH ?>/images/inStock.png"
                                                                    alt="<?= GetMessage("AVAILABLE") ?>"
                                                                    class="icon"><span><?= GetMessage("AVAILABLE") ?></span></span>
                                                    <? endif; ?>
                                                <? else: ?>
                                                    <? if ($arElement["CATALOG_AVAILABLE"] == "Y"): ?>
                                                        <a class="onOrder label eChangeAvailable"><img
                                                                    src="<?= SITE_TEMPLATE_PATH ?>/images/onOrder.png"
                                                                    alt="<?= GetMessage("ON_ORDER") ?>"
                                                                    class="icon"><?= GetMessage("ON_ORDER") ?></a>
                                                    <? else: ?>
                                                        <a class="outOfStock label eChangeAvailable"><img
                                                                    src="<?= SITE_TEMPLATE_PATH ?>/images/outOfStock.png"
                                                                    alt="<?= GetMessage("CATALOG_NO_AVAILABLE") ?>"
                                                                    class="icon"><?= GetMessage("CATALOG_NO_AVAILABLE") ?>
                                                        </a>
                                                    <? endif; ?>
                                                <? endif; ?>

                                                <? if (!empty($arElement["PRICE"])): ?>

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
                                                    <a href="#" class="addCart disabled requestPrice"
                                                       data-ibl="<?= $arElement["IBLOCK_ID"] ?>"
                                                       data-id="<?= $arElement["ID"] ?>"><img
                                                                src="<?= SITE_TEMPLATE_PATH ?>/images/request.png"
                                                                alt=""
                                                                class="icon"><?= GetMessage("REQUEST_PRICE_BUTTON_LABEL") ?>
                                                    </a>
                                                <? endif; ?>
                                            </div>
                                            <ul class="propList check">
                                                <? if (!empty($arElement["PROPERTIES"])): ?>
                                                    <? foreach ($arElement["PROPERTIES"] as $index => $arProp): ?>


                                                        <? if (is_array($arProp["DISPLAY_VALUE"])) {
                                                            $arProp["DISPLAY_VALUE"] = implode("/",$arProp["DISPLAY_VALUE"]);
                                                        } ?>

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
<? } else { ?>
    FALSE
<? } ?>
