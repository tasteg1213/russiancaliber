<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$arComponentDescription = array(
   "NAME" => GetMessage("UTO_NAME"),
   "DESCRIPTION" => GetMessage("UTO_DESCRIPTION"),
   "ICON" => "/images/compare.gif",
   "PATH" => array(
      "ID" => "DRESSCODE",
      "CHILD" => array(
         "ID" => "underOrder",
         "NAME" => GetMessage("UTO_NAME")
      )
   )
);
?>