<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$frame = $this->createFrame()->begin();
?>
	<a<?if(!empty($arResult["NUM_PRODUCTS"])):?> href="<?=SITE_DIR?>personal/cart/"<?endif;?> class="countLink<?if(!empty($arResult["NUM_PRODUCTS"])):?> active<?endif;?>">
		<span class="count"><?if(!empty($arResult["NUM_PRODUCTS"])):?><?=$arResult["NUM_PRODUCTS"]?><?else:?>0<?endif;?></span>
	</a>
<script type="text/javascript">
	window.topCartTemplate = "topCart4";
</script>
<?$frame->end();?>