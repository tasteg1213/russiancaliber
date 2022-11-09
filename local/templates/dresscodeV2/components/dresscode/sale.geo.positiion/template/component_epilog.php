<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/*
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
            $url301 = 'https://'.$arFields['PROPERTY_DOMAIN_ADDRESS_VALUE'].$APPLICATION->GetCurPage();
            header('Location: '.$url301,true, 301);
            //echo "<script>window.location.replace('".$url301."'); </script>";
        }
    }

}
////////////////////////////////// castom end   //////////////////////////////////////
*/
