<?php
/**
 * @var $component \CatalogNotFoundError
 * @var $this \CBitrixComponentTemplate
 */
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
{
	die();
}

\Bitrix\Main\UI\Extension::load([
	'ui.design-tokens',
	'ui.fonts.opensans',
]);

?>
<div class="catalog-no-access">
	<div class="catalog-no-access-inner">
		<div class="catalog-no-access-title"><?= $arResult['TITLE'] ?></div>
		<div class="catalog-no-access-img">
			<div class="catalog-no-access-img-inner"></div>
		</div>
	</div>
</div>