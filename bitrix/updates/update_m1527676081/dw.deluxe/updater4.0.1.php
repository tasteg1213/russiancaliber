<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
if(CModule::IncludeModule("iblock") && CModule::IncludeModule("catalog") && CModule::IncludeModule("form")){

	require(dirname(__FILE__)."/install/files/upd-lang/ru/updater.php");

	if (is_dir(dirname(__FILE__).'/install/modules/dw_deluxe')){
		$updater->CopyFiles("install/modules/dw_deluxe", "modules/dw.deluxe");
	}

	if (is_dir(dirname(__FILE__).'/install/include')){
		$updater->CopyFiles("install/include", "modules/dw.deluxe");
	}

	if (is_dir(dirname(__FILE__).'/install/components')){
		$updater->CopyFiles("install/components", "components");
	}

	if (is_dir(dirname(__FILE__).'/install/wizards/dw/deluxe/site/templates')){
		$updater->CopyFiles("install/wizards/dw/deluxe/site/templates", "templates");
	}

	$rsCheaperForm = CForm::GetBySID("DW_CHEAPER_FORM");

	if($arCheaperForm = $rsCheaperForm->Fetch()){
		$Cheaper_FORM_ID = $arCheaperForm["ID"];
	}else{

		// Cheaper Form

	    $arFields = array(
	        "NAME"              => $_LANG_UPDATE["C1_CALL"],
	        "SID"               => "DW_CHEAPER_FORM",
	        "C_SORT"            => 300,
	        "BUTTON"            => $_LANG_UPDATE["C1_SEND"],
	        "DESCRIPTION"       => "",
	        "DESCRIPTION_TYPE"  => "text",
	        "STAT_EVENT1"       => "form",
	        "arSITE"            => array("s1", "s2", "s3", "s4", "s5"),
	        "arMENU"            => array("ru" => $_LANG_UPDATE["C1_CALL"], "en" => "Cheaper Form"),
	        "arGROUP"           => array(""),
	    );

	    $CHEAPER_FORM_ID = $NEW_ID = CForm::Set($arFields);
	    if ($NEW_ID > 0 ){

	        $arTemplates = CForm::SetMailTemplate($NEW_ID, "Y", "DW_CHEAPER_FORM", $NEW_ID, false);
	        CForm::Set(
	            array("arMAIL_TEMPLATE" => array("ID" => $arTemplates[0]["ID"]), $NEW_ID)
	        );

	        $formFileds = array();

	        //name
	        $formFileds[] = array(
	            "FORM_FIELDS" => array(
	                "FORM_ID"             => $NEW_ID,
	                "ACTIVE"              => "Y",
	                "TITLE"               => $_LANG_UPDATE["C1_NAME"],
	                "ADDITIONAL"          => "N",
	                "SID"                 => "NAME",
	                "C_SORT"              => 100,
	                "REQUIRED"            => "N",
	                "IN_RESULTS_TABLE"    => "Y",
	                "IN_EXCEL_TABLE"      => "Y",
	                "FIELD_TYPE"          => "text",
	                "FILTER_TITLE"        => $_LANG_UPDATE["C1_NAME"],
	                "RESULTS_TABLE_TITLE" => $_LANG_UPDATE["C1_NAME"],
	                // "arIMAGE"             => CFile::MakeFileArray(dirname(__FILE__)."/install/files/form-images/name.png"),
	                "arFILTER_FIELD"      => array("text"),
	            )
	        );

	        //telephone
	        $formFileds[] = array(
	            "FORM_FIELDS" => array(
	                "FORM_ID"             => $NEW_ID,
	                "ACTIVE"              => "Y",
	                "TITLE"               => $_LANG_UPDATE["C1_PHONE"],
	                "SID"                 => "TELEPHONE",
	                "ADDITIONAL"          => "N",
	                "C_SORT"              => 100,
	                "REQUIRED"            => "Y",
	                "IN_RESULTS_TABLE"    => "Y",
	                "IN_EXCEL_TABLE"      => "Y",
	                "FIELD_TYPE"          => "text",
	                "FILTER_TITLE"        => $_LANG_UPDATE["C1_PHONE"],
	                "RESULTS_TABLE_TITLE" => $_LANG_UPDATE["C1_PHONE"],
	                // "arIMAGE"             => CFile::MakeFileArray(dirname(__FILE__)."/install/files/form-images/telephone.png"),
	                "arFILTER_FIELD"      => array("text"),
	            )
	        );

	        //email
	        $formFileds[] = array(
	            "FORM_FIELDS" => array(
	                "FORM_ID"             => $NEW_ID,
	                "ACTIVE"              => "Y",
	                "TITLE"               => $_LANG_UPDATE["C1_MAIL"],
	                "SID"                 => "EMAIL",
	                "ADDITIONAL"          => "N",
	                "C_SORT"              => 100,
	                "REQUIRED"            => "N",
	                "IN_RESULTS_TABLE"    => "Y",
	                "IN_EXCEL_TABLE"      => "Y",
	                "FIELD_TYPE"          => "email",
	                "FILTER_TITLE"        => $_LANG_UPDATE["C1_MAIL"],
	                "RESULTS_TABLE_TITLE" => $_LANG_UPDATE["C1_MAIL"],
	                // "arIMAGE"             => CFile::MakeFileArray(dirname(__FILE__)."/install/files/form-images/telephone.png"),
	                "arFILTER_FIELD"      => array("email"),
	            )
	        );

	        //product name
	        $formFileds[] = array(
	            "FORM_FIELDS" => array(
	                "FORM_ID"             => $NEW_ID,
	                "ACTIVE"              => "Y",
	                "TITLE"               => $_LANG_UPDATE["C1_PRODUCT_NAME"],
	                "SID"                 => "PRODUCT_NAME",
	                "ADDITIONAL"          => "N",
	                "C_SORT"              => 100,
	                "REQUIRED"            => "Y",
	                "IN_RESULTS_TABLE"    => "Y",
	                "IN_EXCEL_TABLE"      => "Y",
	                "FIELD_TYPE"          => "text",
	                "TITLE_TYPE"		  => "html",
	                "FILTER_TITLE"        => $_LANG_UPDATE["C1_PRODUCT_NAME"],
	                "RESULTS_TABLE_TITLE" => $_LANG_UPDATE["C1_PRODUCT_NAME"],
	                // "arIMAGE"             => CFile::MakeFileArray(dirname(__FILE__)."/install/files/form-images/telephone.png"),
	                "arFILTER_FIELD"      => array("text"),
	            )
	        );

	        //link
	        $formFileds[] = array(
	            "FORM_FIELDS" => array(
	                "FORM_ID"             => $NEW_ID,
	                "ACTIVE"              => "Y",
	                "TITLE"               => $_LANG_UPDATE["C1_LINK"],
	                "SID"                 => "LINK",
	                "ADDITIONAL"          => "N",
	                "C_SORT"              => 100,
	                "REQUIRED"            => "Y",
	                "IN_RESULTS_TABLE"    => "Y",
	                "IN_EXCEL_TABLE"      => "Y",
	                "FIELD_TYPE"          => "url",
	                "FILTER_TITLE"        => $_LANG_UPDATE["C1_LINK"],
	                "RESULTS_TABLE_TITLE" => $_LANG_UPDATE["C1_LINK"],
	                // "arIMAGE"             => CFile::MakeFileArray(dirname(__FILE__)."/install/files/form-images/telephone.png"),
	                "arFILTER_FIELD"      => array("url"),
	            )
	        );

	        foreach ($formFileds as $in => $arNextFormField){
	            $NEW_FIELD_ID = CFormField::Set($arNextFormField["FORM_FIELDS"]);
	                if(!empty($NEW_FIELD_ID) && $arNextFormField["FORM_FIELDS"]["FIELD_TYPE"] != "dropdown"){
	                $arFields = array(
	                    "QUESTION_ID"   => $NEW_FIELD_ID,
	                    "MESSAGE"       => " ",
	                    "C_SORT"        => 100,
	                    "ACTIVE"        => "Y",
	                    "FIELD_TYPE"    => $arNextFormField["FORM_FIELDS"]["FIELD_TYPE"],
	                    "FIELD_WIDTH"   => "40"
	                );
	                $NEW_ANSWER_ID = CFormAnswer::Set($arFields);
	            }
	        }

			$arFields = array(
			    "FORM_ID"             => $NEW_ID,
			    "C_SORT"              => 100,
			    "ACTIVE"              => "Y",
			    "TITLE"               => $_LANG_UPDATE["C1_PUBLICATE"],
			    "DESCRIPTION"         => $_LANG_UPDATE["C1_STATUS"],
			    "CSS"                 => "statusgreen",
			    "HANDLER_OUT"         => "",
			    "HANDLER_IN"          => "",
			    "DEFAULT_VALUE"       => "Y",
			    "arPERMISSION_VIEW"   => array(2),
			    "arPERMISSION_MOVE"   => array(2),
			    "arPERMISSION_EDIT"   => array(2),
			    "arPERMISSION_DELETE" => array(2),
			);

			$NEW_STATUS_ID = CFormStatus::Set($arFields);

	    }
	}

	$rsSites = CSite::GetList($by = "sort", $order = "desc", Array());
	while ($arSite = $rsSites->Fetch()){
		if (is_dir($arSite["ABS_DOC_ROOT"])){
			$rsTemplates = CSite::GetTempl