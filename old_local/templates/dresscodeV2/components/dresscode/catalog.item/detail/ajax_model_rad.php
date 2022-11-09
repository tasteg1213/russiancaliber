<?
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");
?>
<?
$Request = \Bitrix\Main\Application::getInstance()->getContext()->getRequest();
if ($Request->isPost()) {
    $POST = $Request->getPostList()->toArray();

    $Params = unserialize(gzuncompress(base64_decode($POST["arParams"])));

    $Params["CACHE_TYPE"] = "A";
    $Params["CACHE_TIME"] = "3600";
    $Params["COMPONENT_TEMPLATE"] = ".default";


    $APPLICATION->IncludeComponent(
        "BKV:modelnyy_ryad.list",
        "",
        $Params
    );
}
?>



