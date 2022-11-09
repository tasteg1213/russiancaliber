<?
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);

$intervolga_recaptcha_default_option = array(
	"recaptchaPublicKey" => "",
	"recaptchaSecretKey" => "",
	"recaptchaSize" => Loc::getMessage('INTERVOLGA_RECAPTCHA.RECAPTCHA_SIZE_VALUE'),
	"recaptchaTheme" => Loc::getMessage('INTERVOLGA_RECAPTCHA.RECAPTCHA_THEME_VALUE'),
	"recaptchaType" => Loc::getMessage('INTERVOLGA_RECAPTCHA.RECAPTCHA_TYPE_VALUE'),
);