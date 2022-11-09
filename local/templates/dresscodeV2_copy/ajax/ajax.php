<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

$context = \Bitrix\Main\Application::getInstance()->getContext();
$request = $context->getRequest();
if ($request->isPost()) {
    $elemCount = $request->getPost("ELEM_COUNT");

    $cookie = new Bitrix\Main\Web\Cookie("ELMENTS_ON_PAGE", $elemCount, time() + 60*60);
    $cookie->setDomain($context->getServer()->getHttpHost());
    $cookie->setHttpOnly(false);

    $context->getResponse()->addCookie($cookie);
    $context->getResponse()->flush("");
}
?>