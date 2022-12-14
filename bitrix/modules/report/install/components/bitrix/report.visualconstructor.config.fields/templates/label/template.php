<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */
/** @var \Bitrix\Report\VisualConstructor\Fields\Valuable\LabelField $field */
$field = $arResult['CONFIGURATION_FIELD'];
$fieldValue = htmlspecialcharsbx($field->getValue());
$events = $arResult['CONFIGURATION_FIELD_EVENTS'];
$behaviours = $arResult['CONFIGURATION_FIELD_BEHAVIOURS'];
$fieldName = $field->getName();
$id = $field->getId();

\Bitrix\Main\UI\Extension::load(['ui.design-tokens']);
?>
<div class="report-configuration-item report-configuration-label-wrapper">
	<?php if ($field->isDisplayLabel()): ?>
		<div class="report-configuration-col-title">
			<div class="report-configuration-label">
				<label for="<?= $id ?>"><?= $field->getLabel() ?></label>
			</div>
		</div>
	<?php endif; ?>
	<div class="report-configuration-col-content">
		<input id="<?= $id ?>" name="<?= $fieldName ?>" value="<?= $fieldValue ?>" title="Label" class="report-configuration-field-input report-configuration-field-input-inactive">
		<div class="report-configuration-input-pencil" data-role-pencil-id="<?= $id ?>"></div>
	</div>
</div>


<script>
	new BX.Report.VisualConstructor.Widget.Config.Fields.Label({
		fieldScope: BX("<?=$id?>"),
		events:  <?=CUtil::PhpToJSObject($events)?>,
		behaviours:  <?=CUtil::PhpToJSObject($behaviours)?>,
		pencil: document.querySelector('[data-role-pencil-id=<?=$id?>]')
	});
</script>