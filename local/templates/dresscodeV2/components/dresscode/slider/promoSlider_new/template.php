 <?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<?$this->setFrameMode(true);?>
<?if(!empty($arResult["ITEMS"])):?>
	<div id="slider">
		<ul class="slideBox">
			<?foreach($arResult["ITEMS"] as $i => $arElement):?>
				<?
					$this->AddEditAction($arElement['ID'], $arElement['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arElement['ID'], $arElement['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array());
				?>
				<?if(!empty($arElement["PROPERTIES"]["VIDEO_SLIDE"]["VALUE"]) || !empty($arElement["DETAIL_PICTURE"]["src"])):?>
					<li id="<?=$this->GetEditAreaId($arElement['ID']);?>">
						<?if(!empty($arElement["DETAIL_TEXT"])):?>
							<div class="limiterContainer">
								<div class="limiter">
									<div class="sliderContent<?if(!empty($arElement["PROPERTIES"]["POSITION"]["VALUE_XML_ID"])):?> <?=$arElement["PROPERTIES"]["POSITION"]["VALUE_XML_ID"]?>Container<?endif;?>" style="display:none"><?=$arElement["DETAIL_TEXT"]?></div>
								</div>
							</div>
						<?endif;?>
						<?if(!empty($arElement["PROPERTIES"]["VIDEO_SLIDE"]["VALUE"])){?>
							<div class="slideVideoContainer">
								<?if(!empty($arElement["PROPERTIES"]["VIDEO_POSTER"]["VALUE"])):?>
									<div class="videoPoster" style="background-image:url(<?=CFile::GetPath($arElement["PROPERTIES"]["VIDEO_POSTER"]["VALUE"]);?>);"></div>
								<?endif;?>
								<?if(!empty($arElement["PROPERTIES"]["VIDEO_COLOR"]["VALUE"])):?>
									<div class="sliderVideoOverBg" style="background-color: <?=$arElement["PROPERTIES"]["VIDEO_COLOR"]["VALUE"]?>;<?if(!empty($arElement["PROPERTIES"]["VIDEO_COLOR"]["VALUE"])):?> opacity: <?=$arElement["PROPERTIES"]["VIDEO_OPACITY"]["VALUE"];?><?endif;?>"></div>
								<?endif;?>
								<video class="slideVideo" width="auto" height="auto" loop="loop" autoplay="autoplay" preload="auto" muted="" poster="<?=CFile::GetPath($arElement["PROPERTIES"]["VIDEO_POSTER"]["VALUE"]);?>">
									<source src="<?=CFile::GetPath($arElement["PROPERTIES"]["VIDEO_SLIDE"]["VALUE"]);?>" type="video/mp4">
									<p><?=GetMessage("VIDEO_NOT_SUPPORTED")?></p>
								</video>
							</div>
						<?}else{?>
                            <?
                           /* echo"<pre>";
                            print_r($arElement["PROPERTIES"]["CHELOVEK"]["VALUE"]);
                            echo"</pre>";*/
                            ?>
                            <span class="zoom_background" data-large="<?=$arElement["DETAIL_PICTURE"]["src"]?>" data-normal="<?=$arElement["DETAIL_PICTURE"]["src"]?>" data-small="<?=$arElement["PREVIEW_PICTURE"]["src"]?>"></span>
                            <span class="background_figura" data-large="<?=CFile::GetPath($arElement["PROPERTIES"]["FIGURA_NA_FONE"]["VALUE"])?>" data-normal="<?=CFile::GetPath($arElement["PROPERTIES"]["FIGURA_NA_FONE"]["VALUE"])?>"></span>
                            <span class="background_chelovek" data-large="<?=CFile::GetPath($arElement["PROPERTIES"]["CHELOVEK"]["VALUE"])?>" data-normal="<?=CFile::GetPath($arElement["PROPERTIES"]["CHELOVEK"]["VALUE"])?>"></span>
						<?}?>
					</li>
				<?endif;?>
			<?endforeach;?>
		</ul>
		<a href="#" class="sliderBtnLeft"></a>
		<a href="#" class="sliderBtnRight"></a>
	</div>
<?endif;?>
