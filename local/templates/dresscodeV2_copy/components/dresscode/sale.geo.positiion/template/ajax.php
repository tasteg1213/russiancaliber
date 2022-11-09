<?// if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");


////////////////////////////////// castom start //////////////////////////////////////
if($_SESSION["USER_GEO_POSITION"]["city"]){
    
    global $APPLICATION;
    $res = CIBlockElement::GetList(
        Array(),
        Array(
            "IBLOCK_ID"=>'15',
            "ACTIVE_DATE"=>"Y",
            "ACTIVE"=>"Y",
            "NAME" => $_SESSION["USER_GEO_POSITION"]["city"]
        ),
        false,
        Array( "nPageSize" => 1 ),
        Array(
            "ID", "NAME", "PROPERTY_DOMAIN_ADDRESS", "PROPERTY_DOMAIN_ADDRESS"
        )
    );
    while($ob = $res->GetNextElement())
    {
        $arFields = $ob->GetFields();
        if ($_SERVER['HTTP_HOST'] != $arFields['PROPERTY_DOMAIN_ADDRESS_VALUE']){
            // $REQUEST_SCHEME = !empty($_SERVER['HTTP_X_FORWARDED_PROTO'])? $_SERVER['HTTP_X_FORWARDED_PROTO'] : 'https';
            $url301 = $arFields['PROPERTY_DOMAIN_ADDRESS_VALUE'];
            // header('Location: '.$url301,true, 301);
            //echo "<script>window.location.replace('".$url301."'); </script>";
            // echo $url301;

            // echo "<pre>";
            // print_r($REQUEST_SCHEME);
            // // echo "<br>";
            // // print_r($arFields['PROPERTY_DOMAIN_ADDRESS_VALUE']);

            // echo "<br>";
            // // print_r($_SESSION["USER_GEO_POSITION"]);
            // echo "</pre>";
            if (!empty($url301)) {
                echo \Bitrix\Main\Web\Json::encode(array(
                    "SUCCESS" => "Y",
                    "SCHEME" => "https",
                    "RELOCATION" => $url301
                ));
            }else{
                echo \Bitrix\Main\Web\Json::encode(array("SUCCESS" => "N"));
            }
            
        }
    }

}
////////////////////////////////// castom end   //////////////////////////////////////