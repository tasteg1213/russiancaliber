<?require_once($_SERVER["DOCUMENT_ROOT"]."/settings.php");?>







<?if($TEMPLATE_FOOTER_VARIANT == "2" || $TEMPLATE_FOOTER_VARIANT == "6" || $TEMPLATE_FOOTER_VARIANT == "7"):?>
	<div class="logo">
		<?if(MAIN_PAGE === TRUE):?>
			<span><img src="/russiancaliber_new_logo.svg" alt=""></span>
		<?else:?>
			<a href="<?=SITE_DIR?>"><img src="/russiancaliber_new_logo.svg" alt=""></a>
		<?endif;?>
	</div>
<?elseif($TEMPLATE_FOOTER_VARIANT == "5" || $TEMPLATE_FOOTER_VARIANT == "4" || $TEMPLATE_FOOTER_VARIANT == "7"):?>
	<div class="logo">
		<?if(MAIN_PAGE === TRUE):?>
			<span><img src="/russiancaliber_new_logo.svg" alt=""></span>
		<?else:?>
			<a href="<?=SITE_DIR?>"><img src="/russiancaliber_new_logo.svg" alt=""></a>
		<?endif;?>
	</div>
<?else:?>
	<div class="logo">
		<?if(MAIN_PAGE === TRUE):?>
			<span><img src="/russiancaliber_new_logo.svg" alt=""></span>
		<?else:?>
			<a href="<?=SITE_DIR?>"><img src="/russiancaliber_new_logo.svg" alt=""></a>
		<?endif;?>
	</div>







<?endif;?>