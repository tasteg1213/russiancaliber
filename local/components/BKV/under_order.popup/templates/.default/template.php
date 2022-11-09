<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);

include_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/classes/general/captcha.php");

$cpt = new CCaptcha();
$captchaPass = COption::GetOptionString("main", "captcha_password", "");
if(strlen($captchaPass) <= 0){
    $captchaPass = randString(10);
    COption::SetOptionString("main", "captcha_password", $captchaPass);
}
$cpt->SetCodeCrypt($captchaPass);

?>

<div id="appOnOrder">
    <div id="modal_on_order">
        <div class="heading"><?=GetMessage("UO_FORM_TITLE");?>
            <a href="#" class="close closeWindow"></a>
        </div>
        <div class="content">
            <div class="result"></div>
            <form action="#" name="modal_on_order_form" method="POST" class="" id="onorder">
                <span class="on_order_description"><?=GetMessage("UO_FORM_CAPTOPION");?></span>
                    <span class="error-text"></span>

                    <input type="text" name="NAME" class="" id="NAME" placeholder="<?=GetMessage("UO_NAME");?>">
                    <input type="text" name="PHONE" class="" id="PHONE" placeholder="<?=GetMessage("UO_PHONE");?>">
                    <input type="text" name="EMAIL" class="" id="EMAIL" placeholder="<?=GetMessage("UO_MAIL");?>">
                    <textarea type="text" name="ITEM_NAME" class="" id="ITEM_NAME" placeholder="<?=GetMessage("UO_ELEMENT_NAME");?>"></textarea>
                    <input type="hidden" name="CLIENT_MC_ID" class="" id="CLIENT_MC_ID" value="0">
                    <input type="hidden" name="PAGE_LINK" class="" id="PAGE_LINK" value="0">



                <?//if ($arResult["USE_CAPTCHA"] == "Y"):?>
                    <div id="captcha">
                        <input class="captchaSid" name="captcha_code" value="<?=htmlspecialchars($cpt->GetCodeCrypt());?>" type="hidden">
                        <input class="inptext" required="" id="captcha_word" name="captcha_word" type="text">
                        <img class="captchaImg" src="/bitrix/tools/captcha.php?captcha_code=<?=htmlspecialchars($cpt->GetCodeCrypt());?>">
                    </div>
                <?//endif?>
                <?/*?>
                <?global $USER;
                if ($USER->IsAuthorized()):?>

                    <div class="personal-order-info">
                        <label>
                            <input type="checkbox" name="personalInfoCheck" id="personalInfoCheck"><?=GetMessage("UO_FORM_CONFIRM")?> <a href="/personal-info/" class="pilink"><?=GetMessage("UO_FORM_CONFIRM_LINK")?></a>*
                        </label>
                    </div>

                <?endif?>
                <?*/?>
                <div>
                    <a href="#" class="on_order-form__submit btn-simple" id="bind__on_order-submit"><?=GetMessage("UO_FORM_BUTTON_NAME");?></a>
                </div>
            </form>
        </div>
    </div>
</div>

 
<script type="text/javascript">
	var onOrderPath = "<?=$this->GetFolder()?>";
</script>
