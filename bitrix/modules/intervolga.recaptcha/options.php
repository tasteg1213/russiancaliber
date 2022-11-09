<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
{
	die();
}
/**
 * @param $mid
 */
use Bitrix\Main\Loader;
use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

global $APPLICATION, $USER;

$moduleId = "intervolga.recaptcha";

Loader::includeModule($moduleId);

$options = array(
	"general" => array(
		array(
			"recaptchaPublicKey",
			Loc::getMessage("INTERVOLGA_RECAPTCHA.PUBLIC_KEY"),
			"",
			array("text", 40)
		),
		array(
			"recaptchaSecretKey",
			Loc::getMessage("INTERVOLGA_RECAPTCHA.SECRET_KEY"),
			"",
			array("text", 40)
		),
		array(
			"note" => Loc::getMessage("INTERVOLGA_RECAPTCHA.KEYS_NOTE")
		),
	),
	"appearance" => array(
		Loc::getMessage("INTERVOLGA_RECAPTCHA.RECAPTCHA_APPEARANCE"),
		array(
			"recaptchaSize",
			Loc::getMessage("INTERVOLGA_RECAPTCHA.RECAPTCHA_SIZE"),
			Loc::getMessage("INTERVOLGA_RECAPTCHA.RECAPTCHA_SIZE_NORMAL_VALUE"),
			array('selectbox', array(
				Loc::getMessage("INTERVOLGA_RECAPTCHA.RECAPTCHA_SIZE_NORMAL_VALUE") => Loc::getMessage("INTERVOLGA_RECAPTCHA.RECAPTCHA_SIZE_NORMAL_NAME"),
				Loc::getMessage("INTERVOLGA_RECAPTCHA.RECAPTCHA_SIZE_COMPACT_VALUE") => Loc::getMessage("INTERVOLGA_RECAPTCHA.RECAPTCHA_SIZE_COMPACT_NAME"),
			)),
		),
		array(
			"recaptchaTheme",
			Loc::getMessage("INTERVOLGA_RECAPTCHA.RECAPTCHA_THEME"),
			Loc::getMessage("INTERVOLGA_RECAPTCHA.RECAPTCHA_THEME_LIGHT_VALUE"),
			array('selectbox', array(
				Loc::getMessage("INTERVOLGA_RECAPTCHA.RECAPTCHA_THEME_LIGHT_VALUE") => Loc::getMessage("INTERVOLGA_RECAPTCHA.RECAPTCHA_THEME_LIGHT_NAME"),
				Loc::getMessage("INTERVOLGA_RECAPTCHA.RECAPTCHA_THEME_DARK_VALUE") => Loc::getMessage("INTERVOLGA_RECAPTCHA.RECAPTCHA_THEME_DARK_NAME"),
			)),
		),
		array(
			"recaptchaType",
			Loc::getMessage("INTERVOLGA_RECAPTCHA.RECAPTCHA_TYPE"),
			Loc::getMessage("INTERVOLGA_RECAPTCHA.RECAPTCHA_TYPE_IMAGE_VALUE"),
			array('selectbox', array(
				Loc::getMessage("INTERVOLGA_RECAPTCHA.RECAPTCHA_TYPE_IMAGE_VALUE") => Loc::getMessage("INTERVOLGA_RECAPTCHA.RECAPTCHA_TYPE_IMAGE_NAME"),
				Loc::getMessage("INTERVOLGA_RECAPTCHA.RECAPTCHA_TYPE_AUDIO_VALUE") => Loc::getMessage("INTERVOLGA_RECAPTCHA.RECAPTCHA_TYPE_AUDIO_NAME"),
			)),
		),
	),
);

$tabs = array(
	array(
		"DIV" => "general",
		"TAB" => Loc::getMessage("INTERVOLGA_RECAPTCHA.TAB_GENERAL"),
		"TITLE" => Loc::getMessage("INTERVOLGA_RECAPTCHA.TAB_GENERAL")
	),
	array(
		"DIV" => "appearance",
		"TAB" => Loc::getMessage("INTERVOLGA_RECAPTCHA.TAB_APPEARANCE"),
		"TITLE" => Loc::getMessage("INTERVOLGA_RECAPTCHA.TAB_APPEARANCE")
	),
);

if ($USER->IsAdmin())
{
	if (check_bitrix_sessid() && strlen($_POST["save"]) > 0)
	{
		foreach ($tabs as $tab)
		{
			__AdmSettingsSaveOptions($moduleId, $options[$tab['DIV']]);
		}
		LocalRedirect($APPLICATION->GetCurPageParam());
	}
}

$tabControl = new CAdminTabControl("tabControl", $tabs);
?>
<form method="POST" action="<?=$APPLICATION->GetCurPage()?>?mid=<?=htmlspecialcharsbx($mid)?>&lang=<?=LANGUAGE_ID?>">
	<? $tabControl->Begin();

	foreach ($tabs as $tab)
	{
		$tabControl->BeginNextTab();
		__AdmSettingsDrawList($moduleId, $options[$tab['DIV']]);
	}
	?>
	<? $tabControl->Buttons(
		array(
			"btnApply" => false,
			"btnCancel" => false,
			"btnSaveAndAdd" => false
		)
	); ?>
	<?=bitrix_sessid_post();?>
	<? $tabControl->End(); ?>
</form>