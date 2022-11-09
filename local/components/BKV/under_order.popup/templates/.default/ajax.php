<?require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

$values = Bitrix\Main\Application::getInstance()->getContext()->getRequest();
$values = $values->getPostList()->toArray();

if(!$APPLICATION->CaptchaCheckCode($values["captcha_word"], $values["captcha_code"])) {
    echo 'error';
}elseif($values['CLIENT_MC_ID'] < 1){
    $values['CLIENT_MC_ID'] = "NOT DETECT";
}

    $arFields = array(
        'NAME' => iconv("UTF-8", "windows-1251", $values['NAME']),
        'PHONE' => iconv("UTF-8", "windows-1251", $values['PHONE']),
        'EMAIL' => iconv("UTF-8", "windows-1251", $values['EMAIL']),
        'ITEM_NAME' => iconv("UTF-8", "windows-1251", $values['ITEM_NAME']),
        'CLIENT_MC_ID' => $values['CLIENT_MC_ID'],
        'PAGE_LINK' => $values['PAGE_LINK']
    );

    Bitrix\Main\Mail\Event::send(array(
        "EVENT_NAME" => "ON_UNDER_ORDER",
        "LID" => "s2",
        "C_FIELDS" => $arFields
    ));
