<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();


$arMenu = GetMenuTypes($site);

$arType = array (
"N"=>GetMessage("BLOCK_Type_0"),
"H"=>GetMessage("BLOCK_Type_1"),
"H+"=>GetMessage("BLOCK_Type_2"),
"HTML"=>GetMessage("BLOCK_Type_3"),
"MENU"=>GetMessage("BLOCK_Type_4"),
"IMG"=>GetMessage("BLOCK_Type_5"),
);

$arSize = array (
"7"=>GetMessage("Size7"),
"6"=>GetMessage("Size6"),
"5"=>GetMessage("Size5"),
"4"=>GetMessage("Size4"),
"3"=>GetMessage("Size3"),
"2"=>GetMessage("Size2"),
"1.3"=>GetMessage("Size1.3"),
"1"=>GetMessage("Size1"),
);

if ($arCurrentValues["STRING_2_TYPE"] == "1")
{
$arType1 = array (
"H2"=>GetMessage("Type2"),
"H3"=>GetMessage("Type3"),
"P"=>GetMessage("Type0"),
);
}
else
{
$arType1 = array (
"H1"=>GetMessage("Type1"),
"H2"=>GetMessage("Type2"),
"H3"=>GetMessage("Type3"),
"P"=>GetMessage("Type0"),
);
}
if ($arCurrentValues["STRING_1_TYPE"] == "1")
{
$arType2 = array (
"H2"=>GetMessage("Type2"),
"H3"=>GetMessage("Type3"),
"P"=>GetMessage("Type0"),
);
}
else
{
$arType2 = array (
"H1"=>GetMessage("Type1"),
"H2"=>GetMessage("Type2"),
"H3"=>GetMessage("Type3"),
"P"=>GetMessage("Type0"),
);
}



$TextAlign = array (
"Left"=>GetMessage("Left"),
"Right"=>GetMessage("Right"),
"Center"=>GetMessage("Center"),
"Justify"=>GetMessage("Justify"),
);

$TextFont = array (
"None"=>GetMessage("FontStyleNone"),
"Bold"=>GetMessage("FontStyleBold"),
"Italic"=>GetMessage("FontStyleItalic"),
"BoldItalic"=>GetMessage("FontStyleBoldItalic"),
);

$offset = array (
"0"=>GetMessage("offset0"),
"1"=>GetMessage("offset1"),
"2"=>GetMessage("offset2"),
"3"=>GetMessage("offset3"),
"4"=>GetMessage("offset4"),
"5"=>GetMessage("offset5"),
"6"=>GetMessage("offset6"),
);

$lg = array (
"3"=>GetMessage("lg3"),
"4"=>GetMessage("lg4"),
"5"=>GetMessage("lg5"),
"6"=>GetMessage("lg6"),
"7"=>GetMessage("lg7"),
"8"=>GetMessage("lg8"),
"9"=>GetMessage("lg9"),
);

$lg_ = array (
""=>" ",
"3"=>GetMessage("lg3"),
"4"=>GetMessage("lg4"),
"5"=>GetMessage("lg5"),
"6"=>GetMessage("lg6"),
"7"=>GetMessage("lg7"),
"8"=>GetMessage("lg8"),
"9"=>GetMessage("lg9"),
);


$arContClass = array (
"intro-header"=>"intro-header",
"content-section-a"=>"content-section-a",
"banner"=>"banner",
);



$arTemplateParameters = array(


		"CONTEINER_CLASS" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("CONTEINER_CLASS"),
			"TYPE" => "LIST",
			"VALUES" => $arContClass,
			"ADDITIONAL_VALUES" => "Y",
			"REFRESH" => "Y",
			"DEFAULT" => "content-section-a",
		),
		"BLOCK_1_TYPE" => Array(
			"PARENT" => "BLOCK_1",
			"NAME" => GetMessage("BLOCK_1_TYPE"),
			"TYPE" => "LIST",
			"VALUES" => $arType,
			"ADDITIONAL_VALUES" => "N",
			"REFRESH" => "Y",
			"DEFAULT" => "H",
		),
		"BLOCK_2_TYPE" => Array(
			"PARENT" => "BLOCK_2",
			"NAME" => GetMessage("BLOCK_2_TYPE"),
			"TYPE" => "LIST",
			"VALUES" => $arType,
			"ADDITIONAL_VALUES" => "N",
			"REFRESH" => "Y",
			"DEFAULT" => "H+",
		),
		"BLOCK_3_TYPE" => Array(
			"PARENT" => "BLOCK_3",
			"NAME" => GetMessage("BLOCK_3_TYPE"),
			"TYPE" => "LIST",
			"VALUES" => $arType,
			"ADDITIONAL_VALUES" => "N",
			"REFRESH" => "Y",
			"DEFAULT" => "MENU",
		),
		"BLOCK_4_TYPE" => Array(
			"PARENT" => "BLOCK_4",
			"NAME" => GetMessage("BLOCK_4_TYPE"),
			"TYPE" => "LIST",
			"VALUES" => $arType,
			"ADDITIONAL_VALUES" => "N",
			"REFRESH" => "Y",
			"DEFAULT" => "IMG",
		),
		"BLOCK_5_TYPE" => Array(
			"PARENT" => "BLOCK_5",
			"NAME" => GetMessage("BLOCK_5_TYPE"),
			"TYPE" => "LIST",
			"VALUES" => $arType,
			"ADDITIONAL_VALUES" => "N",
			"REFRESH" => "Y",
			"DEFAULT" => "H",
		),
		"BLOCK_2_1_TYPE" => Array(
			"PARENT" => "BLOCK_2_1",
			"NAME" => GetMessage("BLOCK_2_1_TYPE"),
			"TYPE" => "LIST",
			"VALUES" => $arType,
			"ADDITIONAL_VALUES" => "N",
			"REFRESH" => "Y",
			"DEFAULT" => "H",
		),
		"BLOCK_2_2_TYPE" => Array(
			"PARENT" => "BLOCK_2_2",
			"NAME" => GetMessage("BLOCK_2_2_TYPE"),
			"TYPE" => "LIST",
			"VALUES" => $arType,
			"ADDITIONAL_VALUES" => "N",
			"REFRESH" => "Y",
			"DEFAULT" => "H+",
		),
		"BLOCK_2_3_TYPE" => Array(
			"PARENT" => "BLOCK_2_3",
			"NAME" => GetMessage("BLOCK_2_3_TYPE"),
			"TYPE" => "LIST",
			"VALUES" => $arType,
			"ADDITIONAL_VALUES" => "N",
			"REFRESH" => "Y",
			"DEFAULT" => "MENU",
		),
		"BLOCK_2_4_TYPE" => Array(
			"PARENT" => "BLOCK_2_4",
			"NAME" => GetMessage("BLOCK_2_4_TYPE"),
			"TYPE" => "LIST",
			"VALUES" => $arType,
			"ADDITIONAL_VALUES" => "N",
			"REFRESH" => "Y",
			"DEFAULT" => "IMG",
		),
		"BLOCK_2_5_TYPE" => Array(
			"PARENT" => "BLOCK_2_5",
			"NAME" => GetMessage("BLOCK_2_5_TYPE"),
			"TYPE" => "LIST",
			"VALUES" => $arType,
			"ADDITIONAL_VALUES" => "N",
			"REFRESH" => "Y",
			"DEFAULT" => "H",
		),
		"SLIDE_LINK_ID" => Array(
			"NAME" => GetMessage("SLIDE_LINK_ID"),
			"TYPE" => "STRING",
			"MULTIPLE" => "N",
			"PARENT" => "BASE",
		),



		"TEXTALIGN_1" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("TEXTALIGN_1"),
			"TYPE" => "LIST",
			"VALUES" => $TextAlign,
			"ADDITIONAL_VALUES" => "N",
			"REFRESH" => "N",
			"DEFAULT" => "",
			"SORT" => "150",
		),
		"BLOCK_LG_1" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("BLOCK_LG_1"),
			"TYPE" => "LIST",
			"VALUES" => $lg,
			"ADDITIONAL_VALUES" => "N",
			"REFRESH" => "N",
			"DEFAULT" => "6",
			"SORT" => "160",
		),
		"BLOCK_OFFSET_1" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("BLOCK_OFFSET_1"),
			"TYPE" => "LIST",
			"VALUES" => $offset,
			"ADDITIONAL_VALUES" => "N",
			"REFRESH" => "N",
			"DEFAULT" => "",
			"SORT" => "180",
		),
		"TEXTALIGN_2" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("TEXTALIGN_2"),
			"TYPE" => "LIST",
			"VALUES" => $TextAlign,
			"ADDITIONAL_VALUES" => "N",
			"REFRESH" => "N",
			"DEFAULT" => "",
		),
		"BLOCK_LG_2" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("BLOCK_LG_2"),
			"TYPE" => "LIST",
			"VALUES" => $lg,
			"ADDITIONAL_VALUES" => "N",
			"REFRESH" => "N",
			"DEFAULT" => "6",
		),
		"BLOCK_OFFSET_2" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("BLOCK_OFFSET_2"),
			"TYPE" => "LIST",
			"VALUES" => $offset,
			"ADDITIONAL_VALUES" => "N",
			"REFRESH" => "N",
			"DEFAULT" => "",
		),
		"BLOCK_1_SIZE_PLUS" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("BLOCK_1_SIZE_PLUS"),
			"TYPE" => "CHECKBOX",
			"ADDITIONAL_VALUES" => "N",
			"REFRESH" => "Y",
			"DEFAULT" => "N",
			"SORT" => "170",
		),
		"BLOCK_2_SIZE_PLUS" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("BLOCK_2_SIZE_PLUS"),
			"TYPE" => "CHECKBOX",
			"ADDITIONAL_VALUES" => "N",
			"REFRESH" => "Y",
			"DEFAULT" => "N",
		),
);



//
// LEFT COLLUMN (1) SIZE+ START
//
if ($arCurrentValues["BLOCK_1_SIZE_PLUS"] == "Y")
{
	$arTemplateParameters["BLOCK_PUSH_1_LG"] = array(
			"PARENT" => "1_SIZE_PLUS",
			"NAME" => GetMessage("BLOCK_PUSH_1_LG"),
			"TYPE" => "LIST",
			"VALUES" => $offset,
			"ADDITIONAL_VALUES" => "N",
			"REFRESH" => "N",
			"DEFAULT" => "",
	);
	$arTemplateParameters["BLOCK_PULL_1_LG"] = array(
			"PARENT" => "1_SIZE_PLUS",
			"NAME" => GetMessage("BLOCK_PULL_1_LG"),
			"TYPE" => "LIST",
			"VALUES" => $offset,
			"ADDITIONAL_VALUES" => "N",
			"REFRESH" => "N",
			"DEFAULT" => "",
	);
	$arTemplateParameters["BLOCK_MD_1"] = array(
			"PARENT" => "1_SIZE_PLUS",
			"NAME" => GetMessage("BLOCK_MD_1"),
			"TYPE" => "LIST",
			"VALUES" => $lg_,
			"ADDITIONAL_VALUES" => "N",
			"REFRESH" => "N",
			"DEFAULT" => "",
	);
	$arTemplateParameters["BLOCK_OFFSET_1_MD"] = array(
			"PARENT" => "1_SIZE_PLUS",
			"NAME" => GetMessage("BLOCK_OFFSET_1_MD"),
			"TYPE" => "LIST",
			"VALUES" => $offset,
			"ADDITIONAL_VALUES" => "N",
			"REFRESH" => "N",
			"DEFAULT" => "",
	);
	$arTemplateParameters["BLOCK_PUSH_1_MD"] = array(
			"PARENT" => "1_SIZE_PLUS",
			"NAME" => GetMessage("BLOCK_PUSH_1_MD"),
			"TYPE" => "LIST",
			"VALUES" => $offset,
			"ADDITIONAL_VALUES" => "N",
			"REFRESH" => "N",
			"DEFAULT" => "",
	);
	$arTemplateParameters["BLOCK_PULL_1_MD"] = array(
			"PARENT" => "1_SIZE_PLUS",
			"NAME" => GetMessage("BLOCK_PULL_1_MD"),
			"TYPE" => "LIST",
			"VALUES" => $offset,
			"ADDITIONAL_VALUES" => "N",
			"REFRESH" => "N",
			"DEFAULT" => "",
	);
	$arTemplateParameters["BLOCK_SM_1"] = array(
			"PARENT" => "1_SIZE_PLUS",
			"NAME" => GetMessage("BLOCK_SM_1"),
			"TYPE" => "LIST",
			"VALUES" => $lg_,
			"ADDITIONAL_VALUES" => "N",
			"REFRESH" => "N",
			"DEFAULT" => "",
	);
	$arTemplateParameters["BLOCK_OFFSET_1_SM"] = array(
			"PARENT" => "1_SIZE_PLUS",
			"NAME" => GetMessage("BLOCK_OFFSET_1_SM"),
			"TYPE" => "LIST",
			"VALUES" => $offset,
			"ADDITIONAL_VALUES" => "N",
			"REFRESH" => "N",
			"DEFAULT" => "",
	);
	$arTemplateParameters["BLOCK_PUSH_1_SM"] = array(
			"PARENT" => "1_SIZE_PLUS",
			"NAME" => GetMessage("BLOCK_PUSH_1_SM"),
			"TYPE" => "LIST",
			"VALUES" => $offset,
			"ADDITIONAL_VALUES" => "N",
			"REFRESH" => "N",
			"DEFAULT" => "",
	);
	$arTemplateParameters["BLOCK_PULL_1_SM"] = array(
			"PARENT" => "1_SIZE_PLUS",
			"NAME" => GetMessage("BLOCK_PULL_1_SM"),
			"TYPE" => "LIST",
			"VALUES" => $offset,
			"ADDITIONAL_VALUES" => "N",
			"REFRESH" => "N",
			"DEFAULT" => "",
	);
	$arTemplateParameters["BLOCK_XS_1"] = array(
			"PARENT" => "1_SIZE_PLUS",
			"NAME" => GetMessage("BLOCK_XS_1"),
			"TYPE" => "LIST",
			"VALUES" => $lg_,
			"ADDITIONAL_VALUES" => "N",
			"REFRESH" => "N",
			"DEFAULT" => "",
	);
}
//
// LEFT COLLUMN (1) SIZE+ END
//

//
// RIGHT COLLUMN (2) SIZE+ START
//
if ($arCurrentValues["BLOCK_2_SIZE_PLUS"] == "Y")
{
	$arTemplateParameters["BLOCK_PUSH_2_LG"] = array(
			"PARENT" => "2_SIZE_PLUS",
			"NAME" => GetMessage("BLOCK_PUSH_2_LG"),
			"TYPE" => "LIST",
			"VALUES" => $offset,
			"ADDITIONAL_VALUES" => "N",
			"REFRESH" => "N",
			"DEFAULT" => "",
	);
	$arTemplateParameters["BLOCK_PULL_2_LG"] = array(
			"PARENT" => "2_SIZE_PLUS",
			"NAME" => GetMessage("BLOCK_PULL_2_LG"),
			"TYPE" => "LIST",
			"VALUES" => $offset,
			"ADDITIONAL_VALUES" => "N",
			"REFRESH" => "N",
			"DEFAULT" => "",
	);
	$arTemplateParameters["BLOCK_MD_2"] = array(
			"PARENT" => "2_SIZE_PLUS",
			"NAME" => GetMessage("BLOCK_MD_2"),
			"TYPE" => "LIST",
			"VALUES" => $lg_,
			"ADDITIONAL_VALUES" => "N",
			"REFRESH" => "N",
			"DEFAULT" => "",
	);
	$arTemplateParameters["BLOCK_OFFSET_2_MD"] = array(
			"PARENT" => "2_SIZE_PLUS",
			"NAME" => GetMessage("BLOCK_OFFSET_2_MD"),
			"TYPE" => "LIST",
			"VALUES" => $offset,
			"ADDITIONAL_VALUES" => "N",
			"REFRESH" => "N",
			"DEFAULT" => "",
	);
	$arTemplateParameters["BLOCK_PUSH_2_MD"] = array(
			"PARENT" => "2_SIZE_PLUS",
			"NAME" => GetMessage("BLOCK_PUSH_2_MD"),
			"TYPE" => "LIST",
			"VALUES" => $offset,
			"ADDITIONAL_VALUES" => "N",
			"REFRESH" => "N",
			"DEFAULT" => "",
	);
	$arTemplateParameters["BLOCK_PULL_2_MD"] = array(
			"PARENT" => "2_SIZE_PLUS",
			"NAME" => GetMessage("BLOCK_PULL_2_MD"),
			"TYPE" => "LIST",
			"VALUES" => $offset,
			"ADDITIONAL_VALUES" => "N",
			"REFRESH" => "N",
			"DEFAULT" => "",
	);
	$arTemplateParameters["BLOCK_SM_2"] = array(
			"PARENT" => "2_SIZE_PLUS",
			"NAME" => GetMessage("BLOCK_SM_2"),
			"TYPE" => "LIST",
			"VALUES" => $lg_,
			"ADDITIONAL_VALUES" => "N",
			"REFRESH" => "N",
			"DEFAULT" => "",
	);
	$arTemplateParameters["BLOCK_OFFSET_2_SM"] = array(
			"PARENT" => "2_SIZE_PLUS",
			"NAME" => GetMessage("BLOCK_OFFSET_2_SM"),
			"TYPE" => "LIST",
			"VALUES" => $offset,
			"ADDITIONAL_VALUES" => "N",
			"REFRESH" => "N",
			"DEFAULT" => "",
	);
	$arTemplateParameters["BLOCK_PUSH_2_SM"] = array(
			"PARENT" => "2_SIZE_PLUS",
			"NAME" => GetMessage("BLOCK_PUSH_2_SM"),
			"TYPE" => "LIST",
			"VALUES" => $offset,
			"ADDITIONAL_VALUES" => "N",
			"REFRESH" => "N",
			"DEFAULT" => "",
	);
	$arTemplateParameters["BLOCK_PULL_2_SM"] = array(
			"PARENT" => "2_SIZE_PLUS",
			"NAME" => GetMessage("BLOCK_PULL_2_SM"),
			"TYPE" => "LIST",
			"VALUES" => $offset,
			"ADDITIONAL_VALUES" => "N",
			"REFRESH" => "N",
			"DEFAULT" => "",
	);
	$arTemplateParameters["BLOCK_XS_2"] = array(
			"PARENT" => "2_SIZE_PLUS",
			"NAME" => GetMessage("BLOCK_XS_2"),
			"TYPE" => "LIST",
			"VALUES" => $lg_,
			"ADDITIONAL_VALUES" => "N",
			"REFRESH" => "N",
			"DEFAULT" => "",
	);
}
//
// RIGHT COLLUMN (2) SIZE+ END
//




$arTemplateParameters["CONTEINER_OFF"] = array(
	"PARENT" => "BASE",
	"NAME" => GetMessage("CONTEINER_OFF"),
	"TYPE" => "CHECKBOX",
	"ADDITIONAL_VALUES" => "N",
	"REFRESH" => "Y",
	"DEFAULT" => "N",
);

if ($arCurrentValues["CONTEINER_OFF"] == "Y")
{
	$arTemplateParameters["ROW_OFF"] = array(
		"PARENT" => "BASE",
		"NAME" => GetMessage("ROW_OFF"),
		"TYPE" => "CHECKBOX",
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
		"DEFAULT" => "N",
	);
}




//
// BLOCK 1 START
//
if ($arCurrentValues["BLOCK_1_TYPE"] == "H")
{
	$arTemplateParameters["STRING_1_SIZE"] = array(
		"PARENT" => "BLOCK_1",
		"NAME" => GetMessage("STRING_SIZE"),
		"TYPE" => "LIST",
		"VALUES" => $arSize,
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
	$arTemplateParameters["STRING_1_TYPE"] = array(
		"PARENT" => "BLOCK_1",
		"NAME" => GetMessage("STRING_TYPE"),
		"TYPE" => "LIST",
		"VALUES" => $arType1,
		"ADDITIONAL_VALUES" => "N",
		"DEFAULT" => "H1",
		"REFRESH" => "Y",
	);
	$arTemplateParameters["STRING_1_TEXT"] = array(
		"PARENT" => "BLOCK_1",
		"NAME" => GetMessage("STRING_TEXT"),
		"TYPE" => "STRING",
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
	$arTemplateParameters["STRING_1_FONT"] = array(
		"PARENT" => "BLOCK_1",
		"NAME" => GetMessage("STRING_FONT"),
		"TYPE" => "LIST",
		"VALUES" => $TextFont,
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
}
elseif ($arCurrentValues["BLOCK_1_TYPE"] == "H+")
{
	$arTemplateParameters["STRING_1_SIZE"] = array(
		"PARENT" => "BLOCK_1",
		"NAME" => GetMessage("STRING_SIZE"),
		"TYPE" => "LIST",
		"VALUES" => $arSize,
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
	$arTemplateParameters["STRING_1_TYPE"] = array(
		"PARENT" => "BLOCK_1",
		"NAME" => GetMessage("STRING_TYPE"),
		"TYPE" => "LIST",
		"VALUES" => $arType1,
		"ADDITIONAL_VALUES" => "N",
		"DEFAULT" => "H1",
		"REFRESH" => "Y",
	);
	$arTemplateParameters["STRING_1_TEXT"] = array(
		"PARENT" => "BLOCK_1",
		"NAME" => GetMessage("STRING_TEXT"),
		"TYPE" => "STRING",
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
		"ROWS" => 5,
        "COLS" => "50",
	);
	$arTemplateParameters["STRING_1_FONT"] = array(
		"PARENT" => "BLOCK_1",
		"NAME" => GetMessage("STRING_FONT"),
		"TYPE" => "LIST",
		"VALUES" => $TextFont,
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
}
elseif ($arCurrentValues["BLOCK_1_TYPE"] == "MENU")
{
	$arTemplateParameters["BLOCK_1_MENU_TEMPLATE"] = array(
		"PARENT" => "BLOCK_1",
		"NAME"=>GetMessage("BLOCK_MENU_TEMPLATE"),
		"TYPE" => "STRING",
		"DEFAULT"=>'social',
		"ADDITIONAL_VALUES"	=> "Y",
	);
	$arTemplateParameters["BLOCK_1_MENU_TYPE"] = array(
		"PARENT" => "BLOCK_1",
		"NAME"=>GetMessage("BLOCK_MENU_TYPE"),
		"TYPE" => "LIST",
		"DEFAULT"=>'social',
		"VALUES" => $arMenu,
		"ADDITIONAL_VALUES"	=> "Y",
		"DEFAULT"=>'social',
		"COLS" => 45,
	);

	$arTemplateParameters["BLOCK_1_MENU_MAX_LEVEL"] = array(
		"PARENT" => "BLOCK_1",
		"NAME"=>GetMessage("BLOCK_MENU_MAX_LEVEL"),
		"DEFAULT"=>'1',
		"TYPE" => "LIST",
		"VALUES" => Array(
			1 => "1",
			2 => "2",
			3 => "3",
			4 => "4",
		),
		"ADDITIONAL_VALUES"	=> "N",
	);
	$arTemplateParameters["BLOCK_1_MENU_CHILD_MENU_TYPE"] = array(
		"PARENT" => "BLOCK_1",
		"NAME"=>GetMessage("BLOCK_MENU_CHILD_MENU_TYPE"),
		"TYPE" => "LIST",
		"DEFAULT"=>'left',
		"VALUES" => $arMenu,
		"ADDITIONAL_VALUES"	=> "Y",
		"DEFAULT"=>'left',
		"COLS" => 45
	);
}
elseif ($arCurrentValues["BLOCK_1_TYPE"] == "HTML")
{
	$arTypeInclude = array("page" => GetMessage("MAIN_INCLUDE_PAGE"), "sect" => GetMessage("MAIN_INCLUDE_SECT"));
	if ($GLOBALS['USER']->CanDoOperation('edit_php'))
	{
		$arTypeInclude["file"] = GetMessage("MAIN_INCLUDE_FILE");
	}
	
	$site_template = false;
	$site = ($_REQUEST["site"] <> ''? $_REQUEST["site"] : ($_REQUEST["src_site"] <> ''? $_REQUEST["src_site"] : false));
	if($site !== false)
	{
		$rsSiteTemplates = CSite::GetTemplateList($site);
		while($arSiteTemplate = $rsSiteTemplates->Fetch())
		{
			if(strlen($arSiteTemplate["CONDITION"])<=0)
			{
				$site_template = $arSiteTemplate["TEMPLATE"];
				break;
			}
		}
	}
	if (CModule::IncludeModule('fileman'))
	{
		$arTemplates = CFileman::GetFileTemplates(LANGUAGE_ID, array($site_template));
		$arTemplatesList = array();
		foreach ($arTemplates as $key => $arTemplate)
		{
			$arTemplateList[$arTemplate["file"]] = "[".$arTemplate["file"]."] ".$arTemplate["name"];
		}
	}
	else
	{
		$arTemplatesList = array("page_inc.php" => "[page_inc.php]", "sect_inc.php" => "[sect_inc.php]");
	}	
	
	$arTemplateParameters["BLOCK_1_AREA_FILE_SHOW"] = array(
		"NAME" => GetMessage("BLOCK_AREA_FILE_SHOW"), 
		"TYPE" => "LIST",
		"MULTIPLE" => "N",
		"VALUES" => $arTypeInclude,
		"ADDITIONAL_VALUES" => "N",
		"DEFAULT" => "page",
		"PARENT" => "BLOCK_1",
		"REFRESH" => "Y",
	);
	
	if ($GLOBALS['USER']->CanDoOperation('edit_php') && $arCurrentValues["BLOCK_1_AREA_FILE_SHOW"] == "file")
	{
		$arTemplateParameters["BLOCK_1_AREA_PATH"] = array(
			"NAME" => GetMessage("BLOCK_AREA_PATH"), 
			"TYPE" => "STRING",
			"MULTIPLE" => "N",
			"ADDITIONAL_VALUES" => "N",
			"PARENT" => "BLOCK_1",
		);
	}
	else
	{
		$arTemplateParameters["BLOCK_1_AREA_FILE_SUFFIX"] = array(
			"NAME" => GetMessage("BLOCK_AREA_FILE_SUFFIX"), 
			"TYPE" => "STRING",
			"DEFAULT" => "inc",
			"PARENT" => "BLOCK_1",
		);

		if ($arCurrentValues["BLOCK_1_AREA_FILE_SHOW"] == "sect")
		{
			$arTemplateParameters["BLOCK_1_AREA_FILE_RECURSIVE"] = array(
				"NAME" => GetMessage("BLOCK_AREA_FILE_RECURSIVE"), 
				"TYPE" => "CHECKBOX",
				"ADDITIONAL_VALUES" => "N",
				"DEFAULT" => "Y",
				"PARENT" => "BLOCK_1",
			);
		}
	}

	$arTemplateParameters["BLOCK_1_AREA_EDIT_TEMPLATE"] = array(
		"NAME" => GetMessage("BLOCK_AREA_EDIT_TEMPLATE"), 
		"TYPE" => "LIST",
		"VALUES" => $arTemplateList,
		"DEFAULT" => "",
		"ADDITIONAL_VALUES" => "Y",
		"PARENT" => "BLOCK_1",
	);
}
elseif ($arCurrentValues["BLOCK_1_TYPE"] == "IMG")
{
	$arTemplateParameters["BLOCK_1_IMG_URL"] = array(
		"NAME" => GetMessage("BLOCK_IMG_URL"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_1",
	);
	$arTemplateParameters["BLOCK_1_IMG_ALT"] = array(
		"NAME" => GetMessage("BLOCK_IMG_ALT"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_1",
	);
	$arTemplateParameters["BLOCK_1_IMG_TITLE"] = array(
		"NAME" => GetMessage("BLOCK_IMG_TITLE"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_1",
	);
	$arTemplateParameters["BLOCK_1_IMG_LINK"] = array(
		"NAME" => GetMessage("BLOCK_IMG_LINK"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_1",
	);
}

$arTemplateParameters["BLOCK_1_HR"] = array(
	"NAME" => GetMessage("BLOCK_HR"), 
	"TYPE" => "CHECKBOX",
	"ADDITIONAL_VALUES" => "N",
	"DEFAULT" => "N",
	"PARENT" => "BLOCK_1",
);
//
// BLOCK 1 END
//





//
// BLOCK 2 START
//
if ($arCurrentValues["BLOCK_2_TYPE"] == "H")
{
	$arTemplateParameters["STRING_2_SIZE"] = array(
		"PARENT" => "BLOCK_2",
		"NAME" => GetMessage("STRING_SIZE"),
		"TYPE" => "LIST",
		"VALUES" => $arSize,
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
	$arTemplateParameters["STRING_2_TYPE"] = array(
		"PARENT" => "BLOCK_2",
		"NAME" => GetMessage("STRING_TYPE"),
		"TYPE" => "LIST",
		"VALUES" => $arType2,
		"ADDITIONAL_VALUES" => "N",
		"DEFAULT" => "H3",
		"REFRESH" => "Y",
	);
	$arTemplateParameters["STRING_2_TEXT"] = array(
		"PARENT" => "BLOCK_2",
		"NAME" => GetMessage("STRING_TEXT"),
		"TYPE" => "STRING",
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
	$arTemplateParameters["STRING_2_FONT"] = array(
		"PARENT" => "BLOCK_2",
		"NAME" => GetMessage("STRING_FONT"),
		"TYPE" => "LIST",
		"VALUES" => $TextFont,
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
}
elseif ($arCurrentValues["BLOCK_2_TYPE"] == "H+")
{
	$arTemplateParameters["STRING_2_SIZE"] = array(
		"PARENT" => "BLOCK_2",
		"NAME" => GetMessage("STRING_SIZE"),
		"TYPE" => "LIST",
		"VALUES" => $arSize,
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
	$arTemplateParameters["STRING_2_TYPE"] = array(
		"PARENT" => "BLOCK_2",
		"NAME" => GetMessage("STRING_TYPE"),
		"TYPE" => "LIST",
		"VALUES" => $arType2,
		"ADDITIONAL_VALUES" => "N",
		"DEFAULT" => "H3",
		"REFRESH" => "Y",
	);
	$arTemplateParameters["STRING_2_TEXT"] = array(
		"PARENT" => "BLOCK_2",
		"NAME" => GetMessage("STRING_TEXT"),
		"TYPE" => "STRING",
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
		"ROWS" => 5,
        "COLS" => "50",
	);
	$arTemplateParameters["STRING_2_FONT"] = array(
		"PARENT" => "BLOCK_2",
		"NAME" => GetMessage("STRING_FONT"),
		"TYPE" => "LIST",
		"VALUES" => $TextFont,
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
}
elseif ($arCurrentValues["BLOCK_2_TYPE"] == "MENU")
{
	$arTemplateParameters["BLOCK_2_MENU_TEMPLATE"] = array(
		"PARENT" => "BLOCK_2",
		"NAME"=>GetMessage("BLOCK_MENU_TEMPLATE"),
		"TYPE" => "STRING",
		"DEFAULT"=>'social',
		"ADDITIONAL_VALUES"	=> "Y",
	);
	$arTemplateParameters["BLOCK_2_MENU_TYPE"] = array(
		"PARENT" => "BLOCK_2",
		"NAME"=>GetMessage("BLOCK_MENU_TYPE"),
		"TYPE" => "LIST",
		"DEFAULT"=>'social',
		"VALUES" => $arMenu,
		"ADDITIONAL_VALUES"	=> "Y",
		"DEFAULT"=>'social',
		"COLS" => 45,
	);

	$arTemplateParameters["BLOCK_2_MENU_MAX_LEVEL"] = array(
		"PARENT" => "BLOCK_2",
		"NAME"=>GetMessage("BLOCK_MENU_MAX_LEVEL"),
		"DEFAULT"=>'1',
		"TYPE" => "LIST",
		"VALUES" => Array(
			1 => "1",
			2 => "2",
			3 => "3",
			4 => "4",
		),
		"ADDITIONAL_VALUES"	=> "N",
	);
	$arTemplateParameters["BLOCK_2_MENU_CHILD_MENU_TYPE"] = array(
		"PARENT" => "BLOCK_2",
		"NAME"=>GetMessage("BLOCK_MENU_CHILD_MENU_TYPE"),
		"TYPE" => "LIST",
		"DEFAULT"=>'left',
		"VALUES" => $arMenu,
		"ADDITIONAL_VALUES"	=> "Y",
		"DEFAULT"=>'left',
		"COLS" => 45
	);
}
elseif ($arCurrentValues["BLOCK_2_TYPE"] == "HTML")
{
	$arTypeInclude = array("page" => GetMessage("MAIN_INCLUDE_PAGE"), "sect" => GetMessage("MAIN_INCLUDE_SECT"));
	if ($GLOBALS['USER']->CanDoOperation('edit_php'))
	{
		$arTypeInclude["file"] = GetMessage("MAIN_INCLUDE_FILE");
	}
	
	$site_template = false;
	$site = ($_REQUEST["site"] <> ''? $_REQUEST["site"] : ($_REQUEST["src_site"] <> ''? $_REQUEST["src_site"] : false));
	if($site !== false)
	{
		$rsSiteTemplates = CSite::GetTemplateList($site);
		while($arSiteTemplate = $rsSiteTemplates->Fetch())
		{
			if(strlen($arSiteTemplate["CONDITION"])<=0)
			{
				$site_template = $arSiteTemplate["TEMPLATE"];
				break;
			}
		}
	}
	if (CModule::IncludeModule('fileman'))
	{
		$arTemplates = CFileman::GetFileTemplates(LANGUAGE_ID, array($site_template));
		$arTemplatesList = array();
		foreach ($arTemplates as $key => $arTemplate)
		{
			$arTemplateList[$arTemplate["file"]] = "[".$arTemplate["file"]."] ".$arTemplate["name"];
		}
	}
	else
	{
		$arTemplatesList = array("page_inc.php" => "[page_inc.php]", "sect_inc.php" => "[sect_inc.php]");
	}	
	
	$arTemplateParameters["BLOCK_2_AREA_FILE_SHOW"] = array(
		"NAME" => GetMessage("BLOCK_AREA_FILE_SHOW"), 
		"TYPE" => "LIST",
		"MULTIPLE" => "N",
		"VALUES" => $arTypeInclude,
		"ADDITIONAL_VALUES" => "N",
		"DEFAULT" => "page",
		"PARENT" => "BLOCK_2",
		"REFRESH" => "Y",
	);
	
	if ($GLOBALS['USER']->CanDoOperation('edit_php') && $arCurrentValues["BLOCK_2_AREA_FILE_SHOW"] == "file")
	{
		$arTemplateParameters["BLOCK_2_AREA_PATH"] = array(
			"NAME" => GetMessage("BLOCK_AREA_PATH"), 
			"TYPE" => "STRING",
			"MULTIPLE" => "N",
			"ADDITIONAL_VALUES" => "N",
			"PARENT" => "BLOCK_2",
		);
	}
	else
	{
		$arTemplateParameters["BLOCK_2_AREA_FILE_SUFFIX"] = array(
			"NAME" => GetMessage("BLOCK_AREA_FILE_SUFFIX"), 
			"TYPE" => "STRING",
			"DEFAULT" => "inc",
			"PARENT" => "BLOCK_2",
		);

		if ($arCurrentValues["BLOCK_2_AREA_FILE_SHOW"] == "sect")
		{
			$arTemplateParameters["BLOCK_2_AREA_FILE_RECURSIVE"] = array(
				"NAME" => GetMessage("BLOCK_AREA_FILE_RECURSIVE"), 
				"TYPE" => "CHECKBOX",
				"ADDITIONAL_VALUES" => "N",
				"DEFAULT" => "Y",
				"PARENT" => "BLOCK_2",
			);
		}
	}

	$arTemplateParameters["BLOCK_2_AREA_EDIT_TEMPLATE"] = array(
		"NAME" => GetMessage("BLOCK_AREA_EDIT_TEMPLATE"), 
		"TYPE" => "LIST",
		"VALUES" => $arTemplateList,
		"DEFAULT" => "",
		"ADDITIONAL_VALUES" => "Y",
		"PARENT" => "BLOCK_2",
	);
}
elseif ($arCurrentValues["BLOCK_2_TYPE"] == "IMG")
{
	$arTemplateParameters["BLOCK_2_IMG_URL"] = array(
		"NAME" => GetMessage("BLOCK_IMG_URL"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_2",
	);
	$arTemplateParameters["BLOCK_2_IMG_ALT"] = array(
		"NAME" => GetMessage("BLOCK_IMG_ALT"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_2",
	);
	$arTemplateParameters["BLOCK_2_IMG_TITLE"] = array(
		"NAME" => GetMessage("BLOCK_IMG_TITLE"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_2",
	);
	$arTemplateParameters["BLOCK_2_IMG_LINK"] = array(
		"NAME" => GetMessage("BLOCK_IMG_LINK"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_2",
	);
}

$arTemplateParameters["BLOCK_2_HR"] = array(
	"NAME" => GetMessage("BLOCK_HR"), 
	"TYPE" => "CHECKBOX",
	"ADDITIONAL_VALUES" => "N",
	"DEFAULT" => "N",
	"PARENT" => "BLOCK_2",
);
//
// BLOCK 2 END
//

//
// BLOCK 3 START
//
if ($arCurrentValues["BLOCK_3_TYPE"] == "H")
{
	$arTemplateParameters["STRING_3_SIZE"] = array(
		"PARENT" => "BLOCK_3",
		"NAME" => GetMessage("STRING_SIZE"),
		"TYPE" => "LIST",
		"VALUES" => $arSize,
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
	$arTemplateParameters["STRING_3_TYPE"] = array(
		"PARENT" => "BLOCK_3",
		"NAME" => GetMessage("STRING_TYPE"),
		"TYPE" => "LIST",
		"VALUES" => $arType2,
		"ADDITIONAL_VALUES" => "N",
		"DEFAULT" => "H3",
		"REFRESH" => "Y",
	);
	$arTemplateParameters["STRING_3_TEXT"] = array(
		"PARENT" => "BLOCK_3",
		"NAME" => GetMessage("STRING_TEXT"),
		"TYPE" => "STRING",
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
	$arTemplateParameters["STRING_3_FONT"] = array(
		"PARENT" => "BLOCK_3",
		"NAME" => GetMessage("STRING_FONT"),
		"TYPE" => "LIST",
		"VALUES" => $TextFont,
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
}
elseif ($arCurrentValues["BLOCK_3_TYPE"] == "H+")
{
	$arTemplateParameters["STRING_3_SIZE"] = array(
		"PARENT" => "BLOCK_3",
		"NAME" => GetMessage("STRING_SIZE"),
		"TYPE" => "LIST",
		"VALUES" => $arSize,
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
	$arTemplateParameters["STRING_3_TYPE"] = array(
		"PARENT" => "BLOCK_3",
		"NAME" => GetMessage("STRING_TYPE"),
		"TYPE" => "LIST",
		"VALUES" => $arType2,
		"ADDITIONAL_VALUES" => "N",
		"DEFAULT" => "H3",
		"REFRESH" => "Y",
	);
	$arTemplateParameters["STRING_3_TEXT"] = array(
		"PARENT" => "BLOCK_3",
		"NAME" => GetMessage("STRING_TEXT"),
		"TYPE" => "STRING",
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
		"ROWS" => 5,
        "COLS" => "50",
	);
	$arTemplateParameters["STRING_3_FONT"] = array(
		"PARENT" => "BLOCK_3",
		"NAME" => GetMessage("STRING_FONT"),
		"TYPE" => "LIST",
		"VALUES" => $TextFont,
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
}
elseif ($arCurrentValues["BLOCK_3_TYPE"] == "MENU")
{
	$arTemplateParameters["BLOCK_3_MENU_TEMPLATE"] = array(
		"PARENT" => "BLOCK_3",
		"NAME"=>GetMessage("BLOCK_MENU_TEMPLATE"),
		"TYPE" => "STRING",
		"DEFAULT"=>'social',
		"ADDITIONAL_VALUES"	=> "Y",
	);
	$arTemplateParameters["BLOCK_3_MENU_TYPE"] = array(
		"PARENT" => "BLOCK_3",
		"NAME"=>GetMessage("BLOCK_MENU_TYPE"),
		"TYPE" => "LIST",
		"DEFAULT"=>'social',
		"VALUES" => $arMenu,
		"ADDITIONAL_VALUES"	=> "Y",
		"DEFAULT"=>'social',
		"COLS" => 45,
	);

	$arTemplateParameters["BLOCK_3_MENU_MAX_LEVEL"] = array(
		"PARENT" => "BLOCK_3",
		"NAME"=>GetMessage("BLOCK_MENU_MAX_LEVEL"),
		"DEFAULT"=>'1',
		"TYPE" => "LIST",
		"VALUES" => Array(
			1 => "1",
			2 => "2",
			3 => "3",
			4 => "4",
		),
		"ADDITIONAL_VALUES"	=> "N",
	);
	$arTemplateParameters["BLOCK_3_MENU_CHILD_MENU_TYPE"] = array(
		"PARENT" => "BLOCK_3",
		"NAME"=>GetMessage("BLOCK_MENU_CHILD_MENU_TYPE"),
		"TYPE" => "LIST",
		"DEFAULT"=>'left',
		"VALUES" => $arMenu,
		"ADDITIONAL_VALUES"	=> "Y",
		"DEFAULT"=>'left',
		"COLS" => 45
	);
}
elseif ($arCurrentValues["BLOCK_3_TYPE"] == "HTML")
{
	$arTypeInclude = array("page" => GetMessage("MAIN_INCLUDE_PAGE"), "sect" => GetMessage("MAIN_INCLUDE_SECT"));
	if ($GLOBALS['USER']->CanDoOperation('edit_php'))
	{
		$arTypeInclude["file"] = GetMessage("MAIN_INCLUDE_FILE");
	}
	
	$site_template = false;
	$site = ($_REQUEST["site"] <> ''? $_REQUEST["site"] : ($_REQUEST["src_site"] <> ''? $_REQUEST["src_site"] : false));
	if($site !== false)
	{
		$rsSiteTemplates = CSite::GetTemplateList($site);
		while($arSiteTemplate = $rsSiteTemplates->Fetch())
		{
			if(strlen($arSiteTemplate["CONDITION"])<=0)
			{
				$site_template = $arSiteTemplate["TEMPLATE"];
				break;
			}
		}
	}
	if (CModule::IncludeModule('fileman'))
	{
		$arTemplates = CFileman::GetFileTemplates(LANGUAGE_ID, array($site_template));
		$arTemplatesList = array();
		foreach ($arTemplates as $key => $arTemplate)
		{
			$arTemplateList[$arTemplate["file"]] = "[".$arTemplate["file"]."] ".$arTemplate["name"];
		}
	}
	else
	{
		$arTemplatesList = array("page_inc.php" => "[page_inc.php]", "sect_inc.php" => "[sect_inc.php]");
	}	
	
	$arTemplateParameters["BLOCK_3_AREA_FILE_SHOW"] = array(
		"NAME" => GetMessage("BLOCK_AREA_FILE_SHOW"), 
		"TYPE" => "LIST",
		"MULTIPLE" => "N",
		"VALUES" => $arTypeInclude,
		"ADDITIONAL_VALUES" => "N",
		"DEFAULT" => "page",
		"PARENT" => "BLOCK_3",
		"REFRESH" => "Y",
	);
	
	if ($GLOBALS['USER']->CanDoOperation('edit_php') && $arCurrentValues["BLOCK_3_AREA_FILE_SHOW"] == "file")
	{
		$arTemplateParameters["BLOCK_3_AREA_PATH"] = array(
			"NAME" => GetMessage("BLOCK_AREA_PATH"), 
			"TYPE" => "STRING",
			"MULTIPLE" => "N",
			"ADDITIONAL_VALUES" => "N",
			"PARENT" => "BLOCK_3",
		);
	}
	else
	{
		$arTemplateParameters["BLOCK_3_AREA_FILE_SUFFIX"] = array(
			"NAME" => GetMessage("BLOCK_AREA_FILE_SUFFIX"), 
			"TYPE" => "STRING",
			"DEFAULT" => "inc",
			"PARENT" => "BLOCK_3",
		);

		if ($arCurrentValues["BLOCK_3_AREA_FILE_SHOW"] == "sect")
		{
			$arTemplateParameters["BLOCK_3_AREA_FILE_RECURSIVE"] = array(
				"NAME" => GetMessage("BLOCK_AREA_FILE_RECURSIVE"), 
				"TYPE" => "CHECKBOX",
				"ADDITIONAL_VALUES" => "N",
				"DEFAULT" => "Y",
				"PARENT" => "BLOCK_3",
			);
		}
	}

	$arTemplateParameters["BLOCK_3_AREA_EDIT_TEMPLATE"] = array(
		"NAME" => GetMessage("BLOCK_AREA_EDIT_TEMPLATE"), 
		"TYPE" => "LIST",
		"VALUES" => $arTemplateList,
		"DEFAULT" => "",
		"ADDITIONAL_VALUES" => "Y",
		"PARENT" => "BLOCK_3",
	);
}
elseif ($arCurrentValues["BLOCK_3_TYPE"] == "IMG")
{
	$arTemplateParameters["BLOCK_3_IMG_URL"] = array(
		"NAME" => GetMessage("BLOCK_IMG_URL"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_3",
	);
	$arTemplateParameters["BLOCK_3_IMG_ALT"] = array(
		"NAME" => GetMessage("BLOCK_IMG_ALT"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_3",
	);
	$arTemplateParameters["BLOCK_3_IMG_TITLE"] = array(
		"NAME" => GetMessage("BLOCK_IMG_TITLE"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_3",
	);
	$arTemplateParameters["BLOCK_3_IMG_LINK"] = array(
		"NAME" => GetMessage("BLOCK_IMG_LINK"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_3",
	);
}

$arTemplateParameters["BLOCK_3_HR"] = array(
	"NAME" => GetMessage("BLOCK_HR"), 
	"TYPE" => "CHECKBOX",
	"ADDITIONAL_VALUES" => "N",
	"DEFAULT" => "N",
	"PARENT" => "BLOCK_3",
);
//
// BLOCK 3 END
//

//
// BLOCK 4 START
//
if ($arCurrentValues["BLOCK_4_TYPE"] == "H")
{
	$arTemplateParameters["STRING_4_SIZE"] = array(
		"PARENT" => "BLOCK_4",
		"NAME" => GetMessage("STRING_SIZE"),
		"TYPE" => "LIST",
		"VALUES" => $arSize,
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
	$arTemplateParameters["STRING_4_TYPE"] = array(
		"PARENT" => "BLOCK_4",
		"NAME" => GetMessage("STRING_TYPE"),
		"TYPE" => "LIST",
		"VALUES" => $arType2,
		"ADDITIONAL_VALUES" => "N",
		"DEFAULT" => "H3",
		"REFRESH" => "Y",
	);
	$arTemplateParameters["STRING_4_TEXT"] = array(
		"PARENT" => "BLOCK_4",
		"NAME" => GetMessage("STRING_TEXT"),
		"TYPE" => "STRING",
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
	$arTemplateParameters["STRING_4_FONT"] = array(
		"PARENT" => "BLOCK_4",
		"NAME" => GetMessage("STRING_FONT"),
		"TYPE" => "LIST",
		"VALUES" => $TextFont,
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
}
elseif ($arCurrentValues["BLOCK_4_TYPE"] == "H+")
{
	$arTemplateParameters["STRING_4_SIZE"] = array(
		"PARENT" => "BLOCK_4",
		"NAME" => GetMessage("STRING_SIZE"),
		"TYPE" => "LIST",
		"VALUES" => $arSize,
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
	$arTemplateParameters["STRING_4_TYPE"] = array(
		"PARENT" => "BLOCK_4",
		"NAME" => GetMessage("STRING_TYPE"),
		"TYPE" => "LIST",
		"VALUES" => $arType2,
		"ADDITIONAL_VALUES" => "N",
		"DEFAULT" => "H3",
		"REFRESH" => "Y",
	);
	$arTemplateParameters["STRING_4_TEXT"] = array(
		"PARENT" => "BLOCK_4",
		"NAME" => GetMessage("STRING_TEXT"),
		"TYPE" => "STRING",
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
		"ROWS" => 5,
        "COLS" => "50",
	);
	$arTemplateParameters["STRING_4_FONT"] = array(
		"PARENT" => "BLOCK_4",
		"NAME" => GetMessage("STRING_FONT"),
		"TYPE" => "LIST",
		"VALUES" => $TextFont,
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
}
elseif ($arCurrentValues["BLOCK_4_TYPE"] == "MENU")
{
	$arTemplateParameters["BLOCK_4_MENU_TEMPLATE"] = array(
		"PARENT" => "BLOCK_4",
		"NAME"=>GetMessage("BLOCK_MENU_TEMPLATE"),
		"TYPE" => "STRING",
		"DEFAULT"=>'social',
		"ADDITIONAL_VALUES"	=> "Y",
	);
	$arTemplateParameters["BLOCK_4_MENU_TYPE"] = array(
		"PARENT" => "BLOCK_4",
		"NAME"=>GetMessage("BLOCK_MENU_TYPE"),
		"TYPE" => "LIST",
		"DEFAULT"=>'social',
		"VALUES" => $arMenu,
		"ADDITIONAL_VALUES"	=> "Y",
		"DEFAULT"=>'social',
		"COLS" => 45,
	);

	$arTemplateParameters["BLOCK_4_MENU_MAX_LEVEL"] = array(
		"PARENT" => "BLOCK_4",
		"NAME"=>GetMessage("BLOCK_MENU_MAX_LEVEL"),
		"DEFAULT"=>'1',
		"TYPE" => "LIST",
		"VALUES" => Array(
			1 => "1",
			2 => "2",
			3 => "3",
			4 => "4",
		),
		"ADDITIONAL_VALUES"	=> "N",
	);
	$arTemplateParameters["BLOCK_4_MENU_CHILD_MENU_TYPE"] = array(
		"PARENT" => "BLOCK_4",
		"NAME"=>GetMessage("BLOCK_MENU_CHILD_MENU_TYPE"),
		"TYPE" => "LIST",
		"DEFAULT"=>'left',
		"VALUES" => $arMenu,
		"ADDITIONAL_VALUES"	=> "Y",
		"DEFAULT"=>'left',
		"COLS" => 45
	);
}
elseif ($arCurrentValues["BLOCK_4_TYPE"] == "HTML")
{
	$arTypeInclude = array("page" => GetMessage("MAIN_INCLUDE_PAGE"), "sect" => GetMessage("MAIN_INCLUDE_SECT"));
	if ($GLOBALS['USER']->CanDoOperation('edit_php'))
	{
		$arTypeInclude["file"] = GetMessage("MAIN_INCLUDE_FILE");
	}
	
	$site_template = false;
	$site = ($_REQUEST["site"] <> ''? $_REQUEST["site"] : ($_REQUEST["src_site"] <> ''? $_REQUEST["src_site"] : false));
	if($site !== false)
	{
		$rsSiteTemplates = CSite::GetTemplateList($site);
		while($arSiteTemplate = $rsSiteTemplates->Fetch())
		{
			if(strlen($arSiteTemplate["CONDITION"])<=0)
			{
				$site_template = $arSiteTemplate["TEMPLATE"];
				break;
			}
		}
	}
	if (CModule::IncludeModule('fileman'))
	{
		$arTemplates = CFileman::GetFileTemplates(LANGUAGE_ID, array($site_template));
		$arTemplatesList = array();
		foreach ($arTemplates as $key => $arTemplate)
		{
			$arTemplateList[$arTemplate["file"]] = "[".$arTemplate["file"]."] ".$arTemplate["name"];
		}
	}
	else
	{
		$arTemplatesList = array("page_inc.php" => "[page_inc.php]", "sect_inc.php" => "[sect_inc.php]");
	}	
	
	$arTemplateParameters["BLOCK_4_AREA_FILE_SHOW"] = array(
		"NAME" => GetMessage("BLOCK_AREA_FILE_SHOW"), 
		"TYPE" => "LIST",
		"MULTIPLE" => "N",
		"VALUES" => $arTypeInclude,
		"ADDITIONAL_VALUES" => "N",
		"DEFAULT" => "page",
		"PARENT" => "BLOCK_4",
		"REFRESH" => "Y",
	);
	
	if ($GLOBALS['USER']->CanDoOperation('edit_php') && $arCurrentValues["BLOCK_4_AREA_FILE_SHOW"] == "file")
	{
		$arTemplateParameters["BLOCK_4_AREA_PATH"] = array(
			"NAME" => GetMessage("BLOCK_AREA_PATH"), 
			"TYPE" => "STRING",
			"MULTIPLE" => "N",
			"ADDITIONAL_VALUES" => "N",
			"PARENT" => "BLOCK_4",
		);
	}
	else
	{
		$arTemplateParameters["BLOCK_4_AREA_FILE_SUFFIX"] = array(
			"NAME" => GetMessage("BLOCK_AREA_FILE_SUFFIX"), 
			"TYPE" => "STRING",
			"DEFAULT" => "inc",
			"PARENT" => "BLOCK_4",
		);

		if ($arCurrentValues["BLOCK_4_AREA_FILE_SHOW"] == "sect")
		{
			$arTemplateParameters["BLOCK_4_AREA_FILE_RECURSIVE"] = array(
				"NAME" => GetMessage("BLOCK_AREA_FILE_RECURSIVE"), 
				"TYPE" => "CHECKBOX",
				"ADDITIONAL_VALUES" => "N",
				"DEFAULT" => "Y",
				"PARENT" => "BLOCK_4",
			);
		}
	}

	$arTemplateParameters["BLOCK_4_AREA_EDIT_TEMPLATE"] = array(
		"NAME" => GetMessage("BLOCK_AREA_EDIT_TEMPLATE"), 
		"TYPE" => "LIST",
		"VALUES" => $arTemplateList,
		"DEFAULT" => "",
		"ADDITIONAL_VALUES" => "Y",
		"PARENT" => "BLOCK_4",
	);
}
elseif ($arCurrentValues["BLOCK_4_TYPE"] == "IMG")
{
	$arTemplateParameters["BLOCK_4_IMG_URL"] = array(
		"NAME" => GetMessage("BLOCK_IMG_URL"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_4",
	);
	$arTemplateParameters["BLOCK_4_IMG_ALT"] = array(
		"NAME" => GetMessage("BLOCK_IMG_ALT"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_4",
	);
	$arTemplateParameters["BLOCK_4_IMG_TITLE"] = array(
		"NAME" => GetMessage("BLOCK_IMG_TITLE"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_4",
	);
	$arTemplateParameters["BLOCK_4_IMG_LINK"] = array(
		"NAME" => GetMessage("BLOCK_IMG_LINK"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_4",
	);
}

$arTemplateParameters["BLOCK_4_HR"] = array(
	"NAME" => GetMessage("BLOCK_HR"), 
	"TYPE" => "CHECKBOX",
	"ADDITIONAL_VALUES" => "N",
	"DEFAULT" => "N",
	"PARENT" => "BLOCK_4",
);
//
// BLOCK 4 END
//

//
// BLOCK 5 START
//
if ($arCurrentValues["BLOCK_5_TYPE"] == "H")
{
	$arTemplateParameters["STRING_5_SIZE"] = array(
		"PARENT" => "BLOCK_5",
		"NAME" => GetMessage("STRING_SIZE"),
		"TYPE" => "LIST",
		"VALUES" => $arSize,
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
	$arTemplateParameters["STRING_5_TYPE"] = array(
		"PARENT" => "BLOCK_5",
		"NAME" => GetMessage("STRING_TYPE"),
		"TYPE" => "LIST",
		"VALUES" => $arType2,
		"ADDITIONAL_VALUES" => "N",
		"DEFAULT" => "H3",
		"REFRESH" => "Y",
	);
	$arTemplateParameters["STRING_5_TEXT"] = array(
		"PARENT" => "BLOCK_5",
		"NAME" => GetMessage("STRING_TEXT"),
		"TYPE" => "STRING",
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
	$arTemplateParameters["STRING_5_FONT"] = array(
		"PARENT" => "BLOCK_5",
		"NAME" => GetMessage("STRING_FONT"),
		"TYPE" => "LIST",
		"VALUES" => $TextFont,
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
}
elseif ($arCurrentValues["BLOCK_5_TYPE"] == "H+")
{
	$arTemplateParameters["STRING_5_SIZE"] = array(
		"PARENT" => "BLOCK_5",
		"NAME" => GetMessage("STRING_SIZE"),
		"TYPE" => "LIST",
		"VALUES" => $arSize,
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
	$arTemplateParameters["STRING_5_TYPE"] = array(
		"PARENT" => "BLOCK_5",
		"NAME" => GetMessage("STRING_TYPE"),
		"TYPE" => "LIST",
		"VALUES" => $arType2,
		"ADDITIONAL_VALUES" => "N",
		"DEFAULT" => "H3",
		"REFRESH" => "Y",
	);
	$arTemplateParameters["STRING_5_TEXT"] = array(
		"PARENT" => "BLOCK_5",
		"NAME" => GetMessage("STRING_TEXT"),
		"TYPE" => "STRING",
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
		"ROWS" => 5,
        "COLS" => "50",
	);
	$arTemplateParameters["STRING_5_FONT"] = array(
		"PARENT" => "BLOCK_5",
		"NAME" => GetMessage("STRING_FONT"),
		"TYPE" => "LIST",
		"VALUES" => $TextFont,
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
}
elseif ($arCurrentValues["BLOCK_5_TYPE"] == "MENU")
{
	$arTemplateParameters["BLOCK_5_MENU_TEMPLATE"] = array(
		"PARENT" => "BLOCK_5",
		"NAME"=>GetMessage("BLOCK_MENU_TEMPLATE"),
		"TYPE" => "STRING",
		"DEFAULT"=>'social',
		"ADDITIONAL_VALUES"	=> "Y",
	);
	$arTemplateParameters["BLOCK_5_MENU_TYPE"] = array(
		"PARENT" => "BLOCK_5",
		"NAME"=>GetMessage("BLOCK_MENU_TYPE"),
		"TYPE" => "LIST",
		"DEFAULT"=>'social',
		"VALUES" => $arMenu,
		"ADDITIONAL_VALUES"	=> "Y",
		"DEFAULT"=>'social',
		"COLS" => 45,
	);

	$arTemplateParameters["BLOCK_5_MENU_MAX_LEVEL"] = array(
		"PARENT" => "BLOCK_5",
		"NAME"=>GetMessage("BLOCK_MENU_MAX_LEVEL"),
		"DEFAULT"=>'1',
		"TYPE" => "LIST",
		"VALUES" => Array(
			1 => "1",
			2 => "2",
			3 => "3",
			4 => "4",
		),
		"ADDITIONAL_VALUES"	=> "N",
	);
	$arTemplateParameters["BLOCK_5_MENU_CHILD_MENU_TYPE"] = array(
		"PARENT" => "BLOCK_5",
		"NAME"=>GetMessage("BLOCK_MENU_CHILD_MENU_TYPE"),
		"TYPE" => "LIST",
		"DEFAULT"=>'left',
		"VALUES" => $arMenu,
		"ADDITIONAL_VALUES"	=> "Y",
		"DEFAULT"=>'left',
		"COLS" => 45
	);
}
elseif ($arCurrentValues["BLOCK_5_TYPE"] == "HTML")
{
	$arTypeInclude = array("page" => GetMessage("MAIN_INCLUDE_PAGE"), "sect" => GetMessage("MAIN_INCLUDE_SECT"));
	if ($GLOBALS['USER']->CanDoOperation('edit_php'))
	{
		$arTypeInclude["file"] = GetMessage("MAIN_INCLUDE_FILE");
	}
	
	$site_template = false;
	$site = ($_REQUEST["site"] <> ''? $_REQUEST["site"] : ($_REQUEST["src_site"] <> ''? $_REQUEST["src_site"] : false));
	if($site !== false)
	{
		$rsSiteTemplates = CSite::GetTemplateList($site);
		while($arSiteTemplate = $rsSiteTemplates->Fetch())
		{
			if(strlen($arSiteTemplate["CONDITION"])<=0)
			{
				$site_template = $arSiteTemplate["TEMPLATE"];
				break;
			}
		}
	}
	if (CModule::IncludeModule('fileman'))
	{
		$arTemplates = CFileman::GetFileTemplates(LANGUAGE_ID, array($site_template));
		$arTemplatesList = array();
		foreach ($arTemplates as $key => $arTemplate)
		{
			$arTemplateList[$arTemplate["file"]] = "[".$arTemplate["file"]."] ".$arTemplate["name"];
		}
	}
	else
	{
		$arTemplatesList = array("page_inc.php" => "[page_inc.php]", "sect_inc.php" => "[sect_inc.php]");
	}	
	
	$arTemplateParameters["BLOCK_5_AREA_FILE_SHOW"] = array(
		"NAME" => GetMessage("BLOCK_AREA_FILE_SHOW"), 
		"TYPE" => "LIST",
		"MULTIPLE" => "N",
		"VALUES" => $arTypeInclude,
		"ADDITIONAL_VALUES" => "N",
		"DEFAULT" => "page",
		"PARENT" => "BLOCK_5",
		"REFRESH" => "Y",
	);
	
	if ($GLOBALS['USER']->CanDoOperation('edit_php') && $arCurrentValues["BLOCK_5_AREA_FILE_SHOW"] == "file")
	{
		$arTemplateParameters["BLOCK_5_AREA_PATH"] = array(
			"NAME" => GetMessage("BLOCK_AREA_PATH"), 
			"TYPE" => "STRING",
			"MULTIPLE" => "N",
			"ADDITIONAL_VALUES" => "N",
			"PARENT" => "BLOCK_5",
		);
	}
	else
	{
		$arTemplateParameters["BLOCK_5_AREA_FILE_SUFFIX"] = array(
			"NAME" => GetMessage("BLOCK_AREA_FILE_SUFFIX"), 
			"TYPE" => "STRING",
			"DEFAULT" => "inc",
			"PARENT" => "BLOCK_5",
		);

		if ($arCurrentValues["BLOCK_5_AREA_FILE_SHOW"] == "sect")
		{
			$arTemplateParameters["BLOCK_5_AREA_FILE_RECURSIVE"] = array(
				"NAME" => GetMessage("BLOCK_AREA_FILE_RECURSIVE"), 
				"TYPE" => "CHECKBOX",
				"ADDITIONAL_VALUES" => "N",
				"DEFAULT" => "Y",
				"PARENT" => "BLOCK_5",
			);
		}
	}

	$arTemplateParameters["BLOCK_5_AREA_EDIT_TEMPLATE"] = array(
		"NAME" => GetMessage("BLOCK_AREA_EDIT_TEMPLATE"), 
		"TYPE" => "LIST",
		"VALUES" => $arTemplateList,
		"DEFAULT" => "",
		"ADDITIONAL_VALUES" => "Y",
		"PARENT" => "BLOCK_5",
	);
}
elseif ($arCurrentValues["BLOCK_5_TYPE"] == "IMG")
{
	$arTemplateParameters["BLOCK_5_IMG_URL"] = array(
		"NAME" => GetMessage("BLOCK_IMG_URL"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_5",
	);
	$arTemplateParameters["BLOCK_5_IMG_ALT"] = array(
		"NAME" => GetMessage("BLOCK_IMG_ALT"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_5",
	);
	$arTemplateParameters["BLOCK_5_IMG_TITLE"] = array(
		"NAME" => GetMessage("BLOCK_IMG_TITLE"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_5",
	);
	$arTemplateParameters["BLOCK_5_IMG_LINK"] = array(
		"NAME" => GetMessage("BLOCK_IMG_LINK"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_5",
	);
}

$arTemplateParameters["BLOCK_5_HR"] = array(
	"NAME" => GetMessage("BLOCK_HR"), 
	"TYPE" => "CHECKBOX",
	"ADDITIONAL_VALUES" => "N",
	"DEFAULT" => "N",
	"PARENT" => "BLOCK_5",
);
//
// BLOCK 5 END
//






//
// BLOCK 1 (2 Collumn) START
//
if ($arCurrentValues["BLOCK_2_1_TYPE"] == "H")
{
	$arTemplateParameters["STRING_2_1_SIZE"] = array(
		"PARENT" => "BLOCK_2_1",
		"NAME" => GetMessage("STRING_SIZE"),
		"TYPE" => "LIST",
		"VALUES" => $arSize,
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
	$arTemplateParameters["STRING_2_1_TYPE"] = array(
		"PARENT" => "BLOCK_2_1",
		"NAME" => GetMessage("STRING_TYPE"),
		"TYPE" => "LIST",
		"VALUES" => $arType1,
		"ADDITIONAL_VALUES" => "N",
		"DEFAULT" => "H1",
		"REFRESH" => "Y",
	);
	$arTemplateParameters["STRING_2_1_TEXT"] = array(
		"PARENT" => "BLOCK_2_1",
		"NAME" => GetMessage("STRING_TEXT"),
		"TYPE" => "STRING",
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
	$arTemplateParameters["STRING_2_1_FONT"] = array(
		"PARENT" => "BLOCK_2_1",
		"NAME" => GetMessage("STRING_FONT"),
		"TYPE" => "LIST",
		"VALUES" => $TextFont,
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
}
elseif ($arCurrentValues["BLOCK_2_1_TYPE"] == "H+")
{
	$arTemplateParameters["STRING_2_1_SIZE"] = array(
		"PARENT" => "BLOCK_2_1",
		"NAME" => GetMessage("STRING_SIZE"),
		"TYPE" => "LIST",
		"VALUES" => $arSize,
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
	$arTemplateParameters["STRING_2_1_TYPE"] = array(
		"PARENT" => "BLOCK_2_1",
		"NAME" => GetMessage("STRING_TYPE"),
		"TYPE" => "LIST",
		"VALUES" => $arType1,
		"ADDITIONAL_VALUES" => "N",
		"DEFAULT" => "H1",
		"REFRESH" => "Y",
	);
	$arTemplateParameters["STRING_2_1_TEXT"] = array(
		"PARENT" => "BLOCK_2_1",
		"NAME" => GetMessage("STRING_TEXT"),
		"TYPE" => "STRING",
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
		"ROWS" => 5,
        "COLS" => "50",
	);
	$arTemplateParameters["STRING_2_1_FONT"] = array(
		"PARENT" => "BLOCK_2_1",
		"NAME" => GetMessage("STRING_FONT"),
		"TYPE" => "LIST",
		"VALUES" => $TextFont,
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
}
elseif ($arCurrentValues["BLOCK_2_1_TYPE"] == "MENU")
{
	$arTemplateParameters["BLOCK_2_1_MENU_TEMPLATE"] = array(
		"PARENT" => "BLOCK_2_1",
		"NAME"=>GetMessage("BLOCK_MENU_TEMPLATE"),
		"TYPE" => "STRING",
		"DEFAULT"=>'social',
		"ADDITIONAL_VALUES"	=> "Y",
	);
	$arTemplateParameters["BLOCK_2_1_MENU_TYPE"] = array(
		"PARENT" => "BLOCK_2_1",
		"NAME"=>GetMessage("BLOCK_MENU_TYPE"),
		"TYPE" => "LIST",
		"DEFAULT"=>'social',
		"VALUES" => $arMenu,
		"ADDITIONAL_VALUES"	=> "Y",
		"DEFAULT"=>'social',
		"COLS" => 45,
	);

	$arTemplateParameters["BLOCK_2_1_MENU_MAX_LEVEL"] = array(
		"PARENT" => "BLOCK_2_1",
		"NAME"=>GetMessage("BLOCK_MENU_MAX_LEVEL"),
		"DEFAULT"=>'1',
		"TYPE" => "LIST",
		"VALUES" => Array(
			1 => "1",
			2 => "2",
			3 => "3",
			4 => "4",
		),
		"ADDITIONAL_VALUES"	=> "N",
	);
	$arTemplateParameters["BLOCK_2_1_MENU_CHILD_MENU_TYPE"] = array(
		"PARENT" => "BLOCK_2_1",
		"NAME"=>GetMessage("BLOCK_MENU_CHILD_MENU_TYPE"),
		"TYPE" => "LIST",
		"DEFAULT"=>'left',
		"VALUES" => $arMenu,
		"ADDITIONAL_VALUES"	=> "Y",
		"DEFAULT"=>'left',
		"COLS" => 45
	);
}
elseif ($arCurrentValues["BLOCK_2_1_TYPE"] == "HTML")
{
	$arTypeInclude = array("page" => GetMessage("MAIN_INCLUDE_PAGE"), "sect" => GetMessage("MAIN_INCLUDE_SECT"));
	if ($GLOBALS['USER']->CanDoOperation('edit_php'))
	{
		$arTypeInclude["file"] = GetMessage("MAIN_INCLUDE_FILE");
	}
	
	$site_template = false;
	$site = ($_REQUEST["site"] <> ''? $_REQUEST["site"] : ($_REQUEST["src_site"] <> ''? $_REQUEST["src_site"] : false));
	if($site !== false)
	{
		$rsSiteTemplates = CSite::GetTemplateList($site);
		while($arSiteTemplate = $rsSiteTemplates->Fetch())
		{
			if(strlen($arSiteTemplate["CONDITION"])<=0)
			{
				$site_template = $arSiteTemplate["TEMPLATE"];
				break;
			}
		}
	}
	if (CModule::IncludeModule('fileman'))
	{
		$arTemplates = CFileman::GetFileTemplates(LANGUAGE_ID, array($site_template));
		$arTemplatesList = array();
		foreach ($arTemplates as $key => $arTemplate)
		{
			$arTemplateList[$arTemplate["file"]] = "[".$arTemplate["file"]."] ".$arTemplate["name"];
		}
	}
	else
	{
		$arTemplatesList = array("page_inc.php" => "[page_inc.php]", "sect_inc.php" => "[sect_inc.php]");
	}	
	
	$arTemplateParameters["BLOCK_2_1_AREA_FILE_SHOW"] = array(
		"NAME" => GetMessage("BLOCK_AREA_FILE_SHOW"), 
		"TYPE" => "LIST",
		"MULTIPLE" => "N",
		"VALUES" => $arTypeInclude,
		"ADDITIONAL_VALUES" => "N",
		"DEFAULT" => "page",
		"PARENT" => "BLOCK_2_1",
		"REFRESH" => "Y",
	);
	
	if ($GLOBALS['USER']->CanDoOperation('edit_php') && $arCurrentValues["BLOCK_2_1_AREA_FILE_SHOW"] == "file")
	{
		$arTemplateParameters["BLOCK_2_1_AREA_PATH"] = array(
			"NAME" => GetMessage("BLOCK_AREA_PATH"), 
			"TYPE" => "STRING",
			"MULTIPLE" => "N",
			"ADDITIONAL_VALUES" => "N",
			"PARENT" => "BLOCK_2_1",
		);
	}
	else
	{
		$arTemplateParameters["BLOCK_2_1_AREA_FILE_SUFFIX"] = array(
			"NAME" => GetMessage("BLOCK_AREA_FILE_SUFFIX"), 
			"TYPE" => "STRING",
			"DEFAULT" => "inc",
			"PARENT" => "BLOCK_2_1",
		);

		if ($arCurrentValues["BLOCK_2_1_AREA_FILE_SHOW"] == "sect")
		{
			$arTemplateParameters["BLOCK_2_1_AREA_FILE_RECURSIVE"] = array(
				"NAME" => GetMessage("BLOCK_AREA_FILE_RECURSIVE"), 
				"TYPE" => "CHECKBOX",
				"ADDITIONAL_VALUES" => "N",
				"DEFAULT" => "Y",
				"PARENT" => "BLOCK_2_1",
			);
		}
	}

	$arTemplateParameters["BLOCK_2_1_AREA_EDIT_TEMPLATE"] = array(
		"NAME" => GetMessage("BLOCK_AREA_EDIT_TEMPLATE"), 
		"TYPE" => "LIST",
		"VALUES" => $arTemplateList,
		"DEFAULT" => "",
		"ADDITIONAL_VALUES" => "Y",
		"PARENT" => "BLOCK_2_1",
	);
}
elseif ($arCurrentValues["BLOCK_2_1_TYPE"] == "IMG")
{
	$arTemplateParameters["BLOCK_2_1_IMG_URL"] = array(
		"NAME" => GetMessage("BLOCK_IMG_URL"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_2_1",
	);
	$arTemplateParameters["BLOCK_2_1_IMG_ALT"] = array(
		"NAME" => GetMessage("BLOCK_IMG_ALT"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_2_1",
	);
	$arTemplateParameters["BLOCK_2_1_IMG_TITLE"] = array(
		"NAME" => GetMessage("BLOCK_IMG_TITLE"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_2_1",
	);
	$arTemplateParameters["BLOCK_2_1_IMG_LINK"] = array(
		"NAME" => GetMessage("BLOCK_IMG_LINK"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_2_1",
	);
}

$arTemplateParameters["BLOCK_2_1_HR"] = array(
	"NAME" => GetMessage("BLOCK_HR"), 
	"TYPE" => "CHECKBOX",
	"ADDITIONAL_VALUES" => "N",
	"DEFAULT" => "N",
	"PARENT" => "BLOCK_2_1",
);
//
// BLOCK 1 (2 Collumn) END
//





//
// BLOCK 2 (2 Collumn) START
//
if ($arCurrentValues["BLOCK_2_2_TYPE"] == "H")
{
	$arTemplateParameters["STRING_2_2_SIZE"] = array(
		"PARENT" => "BLOCK_2_2",
		"NAME" => GetMessage("STRING_SIZE"),
		"TYPE" => "LIST",
		"VALUES" => $arSize,
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
	$arTemplateParameters["STRING_2_2_TYPE"] = array(
		"PARENT" => "BLOCK_2_2",
		"NAME" => GetMessage("STRING_TYPE"),
		"TYPE" => "LIST",
		"VALUES" => $arType2,
		"ADDITIONAL_VALUES" => "N",
		"DEFAULT" => "H3",
		"REFRESH" => "Y",
	);
	$arTemplateParameters["STRING_2_2_TEXT"] = array(
		"PARENT" => "BLOCK_2_2",
		"NAME" => GetMessage("STRING_TEXT"),
		"TYPE" => "STRING",
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
	$arTemplateParameters["STRING_2_2_FONT"] = array(
		"PARENT" => "BLOCK_2_2",
		"NAME" => GetMessage("STRING_FONT"),
		"TYPE" => "LIST",
		"VALUES" => $TextFont,
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
}
elseif ($arCurrentValues["BLOCK_2_2_TYPE"] == "H+")
{
	$arTemplateParameters["STRING_2_2_SIZE"] = array(
		"PARENT" => "BLOCK_2_2",
		"NAME" => GetMessage("STRING_SIZE"),
		"TYPE" => "LIST",
		"VALUES" => $arSize,
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
	$arTemplateParameters["STRING_2_2_TYPE"] = array(
		"PARENT" => "BLOCK_2_2",
		"NAME" => GetMessage("STRING_TYPE"),
		"TYPE" => "LIST",
		"VALUES" => $arType2,
		"ADDITIONAL_VALUES" => "N",
		"DEFAULT" => "H3",
		"REFRESH" => "Y",
	);
	$arTemplateParameters["STRING_2_2_TEXT"] = array(
		"PARENT" => "BLOCK_2_2",
		"NAME" => GetMessage("STRING_TEXT"),
		"TYPE" => "STRING",
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
		"ROWS" => 5,
        "COLS" => "50",
	);
	$arTemplateParameters["STRING_2_2_FONT"] = array(
		"PARENT" => "BLOCK_2_2",
		"NAME" => GetMessage("STRING_FONT"),
		"TYPE" => "LIST",
		"VALUES" => $TextFont,
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
}
elseif ($arCurrentValues["BLOCK_2_2_TYPE"] == "MENU")
{
	$arTemplateParameters["BLOCK_2_2_MENU_TEMPLATE"] = array(
		"PARENT" => "BLOCK_2_2",
		"NAME"=>GetMessage("BLOCK_MENU_TEMPLATE"),
		"TYPE" => "STRING",
		"DEFAULT"=>'social',
		"ADDITIONAL_VALUES"	=> "Y",
	);
	$arTemplateParameters["BLOCK_2_2_MENU_TYPE"] = array(
		"PARENT" => "BLOCK_2_2",
		"NAME"=>GetMessage("BLOCK_MENU_TYPE"),
		"TYPE" => "LIST",
		"DEFAULT"=>'social',
		"VALUES" => $arMenu,
		"ADDITIONAL_VALUES"	=> "Y",
		"DEFAULT"=>'social',
		"COLS" => 45,
	);

	$arTemplateParameters["BLOCK_2_2_MENU_MAX_LEVEL"] = array(
		"PARENT" => "BLOCK_2_2",
		"NAME"=>GetMessage("BLOCK_MENU_MAX_LEVEL"),
		"DEFAULT"=>'1',
		"TYPE" => "LIST",
		"VALUES" => Array(
			1 => "1",
			2 => "2",
			3 => "3",
			4 => "4",
		),
		"ADDITIONAL_VALUES"	=> "N",
	);
	$arTemplateParameters["BLOCK_2_2_MENU_CHILD_MENU_TYPE"] = array(
		"PARENT" => "BLOCK_2_2",
		"NAME"=>GetMessage("BLOCK_MENU_CHILD_MENU_TYPE"),
		"TYPE" => "LIST",
		"DEFAULT"=>'left',
		"VALUES" => $arMenu,
		"ADDITIONAL_VALUES"	=> "Y",
		"DEFAULT"=>'left',
		"COLS" => 45
	);
}
elseif ($arCurrentValues["BLOCK_2_2_TYPE"] == "HTML")
{
	$arTypeInclude = array("page" => GetMessage("MAIN_INCLUDE_PAGE"), "sect" => GetMessage("MAIN_INCLUDE_SECT"));
	if ($GLOBALS['USER']->CanDoOperation('edit_php'))
	{
		$arTypeInclude["file"] = GetMessage("MAIN_INCLUDE_FILE");
	}
	
	$site_template = false;
	$site = ($_REQUEST["site"] <> ''? $_REQUEST["site"] : ($_REQUEST["src_site"] <> ''? $_REQUEST["src_site"] : false));
	if($site !== false)
	{
		$rsSiteTemplates = CSite::GetTemplateList($site);
		while($arSiteTemplate = $rsSiteTemplates->Fetch())
		{
			if(strlen($arSiteTemplate["CONDITION"])<=0)
			{
				$site_template = $arSiteTemplate["TEMPLATE"];
				break;
			}
		}
	}
	if (CModule::IncludeModule('fileman'))
	{
		$arTemplates = CFileman::GetFileTemplates(LANGUAGE_ID, array($site_template));
		$arTemplatesList = array();
		foreach ($arTemplates as $key => $arTemplate)
		{
			$arTemplateList[$arTemplate["file"]] = "[".$arTemplate["file"]."] ".$arTemplate["name"];
		}
	}
	else
	{
		$arTemplatesList = array("page_inc.php" => "[page_inc.php]", "sect_inc.php" => "[sect_inc.php]");
	}	
	
	$arTemplateParameters["BLOCK_2_2_AREA_FILE_SHOW"] = array(
		"NAME" => GetMessage("BLOCK_AREA_FILE_SHOW"), 
		"TYPE" => "LIST",
		"MULTIPLE" => "N",
		"VALUES" => $arTypeInclude,
		"ADDITIONAL_VALUES" => "N",
		"DEFAULT" => "page",
		"PARENT" => "BLOCK_2_2",
		"REFRESH" => "Y",
	);
	
	if ($GLOBALS['USER']->CanDoOperation('edit_php') && $arCurrentValues["BLOCK_2_2_AREA_FILE_SHOW"] == "file")
	{
		$arTemplateParameters["BLOCK_2_2_AREA_PATH"] = array(
			"NAME" => GetMessage("BLOCK_AREA_PATH"), 
			"TYPE" => "STRING",
			"MULTIPLE" => "N",
			"ADDITIONAL_VALUES" => "N",
			"PARENT" => "BLOCK_2_2",
		);
	}
	else
	{
		$arTemplateParameters["BLOCK_2_2_AREA_FILE_SUFFIX"] = array(
			"NAME" => GetMessage("BLOCK_AREA_FILE_SUFFIX"), 
			"TYPE" => "STRING",
			"DEFAULT" => "inc",
			"PARENT" => "BLOCK_2_2",
		);

		if ($arCurrentValues["BLOCK_2_2_AREA_FILE_SHOW"] == "sect")
		{
			$arTemplateParameters["BLOCK_2_2_AREA_FILE_RECURSIVE"] = array(
				"NAME" => GetMessage("BLOCK_AREA_FILE_RECURSIVE"), 
				"TYPE" => "CHECKBOX",
				"ADDITIONAL_VALUES" => "N",
				"DEFAULT" => "Y",
				"PARENT" => "BLOCK_2_2",
			);
		}
	}

	$arTemplateParameters["BLOCK_2_2_AREA_EDIT_TEMPLATE"] = array(
		"NAME" => GetMessage("BLOCK_AREA_EDIT_TEMPLATE"), 
		"TYPE" => "LIST",
		"VALUES" => $arTemplateList,
		"DEFAULT" => "",
		"ADDITIONAL_VALUES" => "Y",
		"PARENT" => "BLOCK_2_2",
	);
}
elseif ($arCurrentValues["BLOCK_2_2_TYPE"] == "IMG")
{
	$arTemplateParameters["BLOCK_2_2_IMG_URL"] = array(
		"NAME" => GetMessage("BLOCK_IMG_URL"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_2_2",
	);
	$arTemplateParameters["BLOCK_2_2_IMG_ALT"] = array(
		"NAME" => GetMessage("BLOCK_IMG_ALT"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_2_2",
	);
	$arTemplateParameters["BLOCK_2_2_IMG_TITLE"] = array(
		"NAME" => GetMessage("BLOCK_IMG_TITLE"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_2_2",
	);
	$arTemplateParameters["BLOCK_2_2_IMG_LINK"] = array(
		"NAME" => GetMessage("BLOCK_IMG_LINK"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_2_2",
	);
}

$arTemplateParameters["BLOCK_2_2_HR"] = array(
	"NAME" => GetMessage("BLOCK_HR"), 
	"TYPE" => "CHECKBOX",
	"ADDITIONAL_VALUES" => "N",
	"DEFAULT" => "N",
	"PARENT" => "BLOCK_2_2",
);
//
// BLOCK 2 (2 Collumn) END
//

//
// BLOCK 3 (2 Collumn) START
//
if ($arCurrentValues["BLOCK_2_3_TYPE"] == "H")
{
	$arTemplateParameters["STRING_2_3_SIZE"] = array(
		"PARENT" => "BLOCK_2_3",
		"NAME" => GetMessage("STRING_SIZE"),
		"TYPE" => "LIST",
		"VALUES" => $arSize,
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
	$arTemplateParameters["STRING_2_3_TYPE"] = array(
		"PARENT" => "BLOCK_2_3",
		"NAME" => GetMessage("STRING_TYPE"),
		"TYPE" => "LIST",
		"VALUES" => $arType2,
		"ADDITIONAL_VALUES" => "N",
		"DEFAULT" => "H3",
		"REFRESH" => "Y",
	);
	$arTemplateParameters["STRING_2_3_TEXT"] = array(
		"PARENT" => "BLOCK_2_3",
		"NAME" => GetMessage("STRING_TEXT"),
		"TYPE" => "STRING",
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
	$arTemplateParameters["STRING_2_3_FONT"] = array(
		"PARENT" => "BLOCK_2_3",
		"NAME" => GetMessage("STRING_FONT"),
		"TYPE" => "LIST",
		"VALUES" => $TextFont,
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
}
elseif ($arCurrentValues["BLOCK_2_3_TYPE"] == "H+")
{
	$arTemplateParameters["STRING_2_3_SIZE"] = array(
		"PARENT" => "BLOCK_2_3",
		"NAME" => GetMessage("STRING_SIZE"),
		"TYPE" => "LIST",
		"VALUES" => $arSize,
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
	$arTemplateParameters["STRING_2_3_TYPE"] = array(
		"PARENT" => "BLOCK_2_3",
		"NAME" => GetMessage("STRING_TYPE"),
		"TYPE" => "LIST",
		"VALUES" => $arType2,
		"ADDITIONAL_VALUES" => "N",
		"DEFAULT" => "H3",
		"REFRESH" => "Y",
	);
	$arTemplateParameters["STRING_2_3_TEXT"] = array(
		"PARENT" => "BLOCK_2_3",
		"NAME" => GetMessage("STRING_TEXT"),
		"TYPE" => "STRING",
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
		"ROWS" => 5,
        "COLS" => "50",
	);
	$arTemplateParameters["STRING_2_3_FONT"] = array(
		"PARENT" => "BLOCK_2_3",
		"NAME" => GetMessage("STRING_FONT"),
		"TYPE" => "LIST",
		"VALUES" => $TextFont,
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
}
elseif ($arCurrentValues["BLOCK_2_3_TYPE"] == "MENU")
{
	$arTemplateParameters["BLOCK_2_3_MENU_TEMPLATE"] = array(
		"PARENT" => "BLOCK_2_3",
		"NAME"=>GetMessage("BLOCK_MENU_TEMPLATE"),
		"TYPE" => "STRING",
		"DEFAULT"=>'social',
		"ADDITIONAL_VALUES"	=> "Y",
	);
	$arTemplateParameters["BLOCK_2_3_MENU_TYPE"] = array(
		"PARENT" => "BLOCK_2_3",
		"NAME"=>GetMessage("BLOCK_MENU_TYPE"),
		"TYPE" => "LIST",
		"DEFAULT"=>'social',
		"VALUES" => $arMenu,
		"ADDITIONAL_VALUES"	=> "Y",
		"DEFAULT"=>'social',
		"COLS" => 45,
	);

	$arTemplateParameters["BLOCK_2_3_MENU_MAX_LEVEL"] = array(
		"PARENT" => "BLOCK_2_3",
		"NAME"=>GetMessage("BLOCK_MENU_MAX_LEVEL"),
		"DEFAULT"=>'1',
		"TYPE" => "LIST",
		"VALUES" => Array(
			1 => "1",
			2 => "2",
			3 => "3",
			4 => "4",
		),
		"ADDITIONAL_VALUES"	=> "N",
	);
	$arTemplateParameters["BLOCK_2_3_MENU_CHILD_MENU_TYPE"] = array(
		"PARENT" => "BLOCK_2_3",
		"NAME"=>GetMessage("BLOCK_MENU_CHILD_MENU_TYPE"),
		"TYPE" => "LIST",
		"DEFAULT"=>'left',
		"VALUES" => $arMenu,
		"ADDITIONAL_VALUES"	=> "Y",
		"DEFAULT"=>'left',
		"COLS" => 45
	);
}
elseif ($arCurrentValues["BLOCK_2_3_TYPE"] == "HTML")
{
	$arTypeInclude = array("page" => GetMessage("MAIN_INCLUDE_PAGE"), "sect" => GetMessage("MAIN_INCLUDE_SECT"));
	if ($GLOBALS['USER']->CanDoOperation('edit_php'))
	{
		$arTypeInclude["file"] = GetMessage("MAIN_INCLUDE_FILE");
	}
	
	$site_template = false;
	$site = ($_REQUEST["site"] <> ''? $_REQUEST["site"] : ($_REQUEST["src_site"] <> ''? $_REQUEST["src_site"] : false));
	if($site !== false)
	{
		$rsSiteTemplates = CSite::GetTemplateList($site);
		while($arSiteTemplate = $rsSiteTemplates->Fetch())
		{
			if(strlen($arSiteTemplate["CONDITION"])<=0)
			{
				$site_template = $arSiteTemplate["TEMPLATE"];
				break;
			}
		}
	}
	if (CModule::IncludeModule('fileman'))
	{
		$arTemplates = CFileman::GetFileTemplates(LANGUAGE_ID, array($site_template));
		$arTemplatesList = array();
		foreach ($arTemplates as $key => $arTemplate)
		{
			$arTemplateList[$arTemplate["file"]] = "[".$arTemplate["file"]."] ".$arTemplate["name"];
		}
	}
	else
	{
		$arTemplatesList = array("page_inc.php" => "[page_inc.php]", "sect_inc.php" => "[sect_inc.php]");
	}	
	
	$arTemplateParameters["BLOCK_2_3_AREA_FILE_SHOW"] = array(
		"NAME" => GetMessage("BLOCK_AREA_FILE_SHOW"), 
		"TYPE" => "LIST",
		"MULTIPLE" => "N",
		"VALUES" => $arTypeInclude,
		"ADDITIONAL_VALUES" => "N",
		"DEFAULT" => "page",
		"PARENT" => "BLOCK_2_3",
		"REFRESH" => "Y",
	);
	
	if ($GLOBALS['USER']->CanDoOperation('edit_php') && $arCurrentValues["BLOCK_2_3_AREA_FILE_SHOW"] == "file")
	{
		$arTemplateParameters["BLOCK_2_3_AREA_PATH"] = array(
			"NAME" => GetMessage("BLOCK_AREA_PATH"), 
			"TYPE" => "STRING",
			"MULTIPLE" => "N",
			"ADDITIONAL_VALUES" => "N",
			"PARENT" => "BLOCK_2_3",
		);
	}
	else
	{
		$arTemplateParameters["BLOCK_2_3_AREA_FILE_SUFFIX"] = array(
			"NAME" => GetMessage("BLOCK_AREA_FILE_SUFFIX"), 
			"TYPE" => "STRING",
			"DEFAULT" => "inc",
			"PARENT" => "BLOCK_2_3",
		);

		if ($arCurrentValues["BLOCK_2_3_AREA_FILE_SHOW"] == "sect")
		{
			$arTemplateParameters["BLOCK_2_3_AREA_FILE_RECURSIVE"] = array(
				"NAME" => GetMessage("BLOCK_AREA_FILE_RECURSIVE"), 
				"TYPE" => "CHECKBOX",
				"ADDITIONAL_VALUES" => "N",
				"DEFAULT" => "Y",
				"PARENT" => "BLOCK_2_3",
			);
		}
	}

	$arTemplateParameters["BLOCK_2_3_AREA_EDIT_TEMPLATE"] = array(
		"NAME" => GetMessage("BLOCK_AREA_EDIT_TEMPLATE"), 
		"TYPE" => "LIST",
		"VALUES" => $arTemplateList,
		"DEFAULT" => "",
		"ADDITIONAL_VALUES" => "Y",
		"PARENT" => "BLOCK_2_3",
	);
}
elseif ($arCurrentValues["BLOCK_2_3_TYPE"] == "IMG")
{
	$arTemplateParameters["BLOCK_2_3_IMG_URL"] = array(
		"NAME" => GetMessage("BLOCK_IMG_URL"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_2_3",
	);
	$arTemplateParameters["BLOCK_2_3_IMG_ALT"] = array(
		"NAME" => GetMessage("BLOCK_IMG_ALT"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_2_3",
	);
	$arTemplateParameters["BLOCK_2_3_IMG_TITLE"] = array(
		"NAME" => GetMessage("BLOCK_IMG_TITLE"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_2_3",
	);
	$arTemplateParameters["BLOCK_2_3_IMG_LINK"] = array(
		"NAME" => GetMessage("BLOCK_IMG_LINK"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_2_3",
	);
}

$arTemplateParameters["BLOCK_2_3_HR"] = array(
	"NAME" => GetMessage("BLOCK_HR"), 
	"TYPE" => "CHECKBOX",
	"ADDITIONAL_VALUES" => "N",
	"DEFAULT" => "N",
	"PARENT" => "BLOCK_2_3",
);
//
// BLOCK 3 (2 Collumn) END
//

//
// BLOCK 4 (2 Collumn) START
//
if ($arCurrentValues["BLOCK_2_4_TYPE"] == "H")
{
	$arTemplateParameters["STRING_2_4_SIZE"] = array(
		"PARENT" => "BLOCK_2_4",
		"NAME" => GetMessage("STRING_SIZE"),
		"TYPE" => "LIST",
		"VALUES" => $arSize,
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
	$arTemplateParameters["STRING_2_4_TYPE"] = array(
		"PARENT" => "BLOCK_2_4",
		"NAME" => GetMessage("STRING_TYPE"),
		"TYPE" => "LIST",
		"VALUES" => $arType2,
		"ADDITIONAL_VALUES" => "N",
		"DEFAULT" => "H3",
		"REFRESH" => "Y",
	);
	$arTemplateParameters["STRING_2_4_TEXT"] = array(
		"PARENT" => "BLOCK_2_4",
		"NAME" => GetMessage("STRING_TEXT"),
		"TYPE" => "STRING",
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
	$arTemplateParameters["STRING_2_4_FONT"] = array(
		"PARENT" => "BLOCK_2_4",
		"NAME" => GetMessage("STRING_FONT"),
		"TYPE" => "LIST",
		"VALUES" => $TextFont,
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
}
elseif ($arCurrentValues["BLOCK_2_4_TYPE"] == "H+")
{
	$arTemplateParameters["STRING_2_4_SIZE"] = array(
		"PARENT" => "BLOCK_2_4",
		"NAME" => GetMessage("STRING_SIZE"),
		"TYPE" => "LIST",
		"VALUES" => $arSize,
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
	$arTemplateParameters["STRING_2_4_TYPE"] = array(
		"PARENT" => "BLOCK_2_4",
		"NAME" => GetMessage("STRING_TYPE"),
		"TYPE" => "LIST",
		"VALUES" => $arType2,
		"ADDITIONAL_VALUES" => "N",
		"DEFAULT" => "H3",
		"REFRESH" => "Y",
	);
	$arTemplateParameters["STRING_2_4_TEXT"] = array(
		"PARENT" => "BLOCK_2_4",
		"NAME" => GetMessage("STRING_TEXT"),
		"TYPE" => "STRING",
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
		"ROWS" => 5,
        "COLS" => "50",
	);
	$arTemplateParameters["STRING_2_4_FONT"] = array(
		"PARENT" => "BLOCK_2_4",
		"NAME" => GetMessage("STRING_FONT"),
		"TYPE" => "LIST",
		"VALUES" => $TextFont,
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
}
elseif ($arCurrentValues["BLOCK_2_4_TYPE"] == "MENU")
{
	$arTemplateParameters["BLOCK_2_4_MENU_TEMPLATE"] = array(
		"PARENT" => "BLOCK_2_4",
		"NAME"=>GetMessage("BLOCK_MENU_TEMPLATE"),
		"TYPE" => "STRING",
		"DEFAULT"=>'social',
		"ADDITIONAL_VALUES"	=> "Y",
	);
	$arTemplateParameters["BLOCK_2_4_MENU_TYPE"] = array(
		"PARENT" => "BLOCK_2_4",
		"NAME"=>GetMessage("BLOCK_MENU_TYPE"),
		"TYPE" => "LIST",
		"DEFAULT"=>'social',
		"VALUES" => $arMenu,
		"ADDITIONAL_VALUES"	=> "Y",
		"DEFAULT"=>'social',
		"COLS" => 45,
	);

	$arTemplateParameters["BLOCK_2_4_MENU_MAX_LEVEL"] = array(
		"PARENT" => "BLOCK_2_4",
		"NAME"=>GetMessage("BLOCK_MENU_MAX_LEVEL"),
		"DEFAULT"=>'1',
		"TYPE" => "LIST",
		"VALUES" => Array(
			1 => "1",
			2 => "2",
			3 => "3",
			4 => "4",
		),
		"ADDITIONAL_VALUES"	=> "N",
	);
	$arTemplateParameters["BLOCK_2_4_MENU_CHILD_MENU_TYPE"] = array(
		"PARENT" => "BLOCK_2_4",
		"NAME"=>GetMessage("BLOCK_MENU_CHILD_MENU_TYPE"),
		"TYPE" => "LIST",
		"DEFAULT"=>'left',
		"VALUES" => $arMenu,
		"ADDITIONAL_VALUES"	=> "Y",
		"DEFAULT"=>'left',
		"COLS" => 45
	);
}
elseif ($arCurrentValues["BLOCK_2_4_TYPE"] == "HTML")
{
	$arTypeInclude = array("page" => GetMessage("MAIN_INCLUDE_PAGE"), "sect" => GetMessage("MAIN_INCLUDE_SECT"));
	if ($GLOBALS['USER']->CanDoOperation('edit_php'))
	{
		$arTypeInclude["file"] = GetMessage("MAIN_INCLUDE_FILE");
	}
	
	$site_template = false;
	$site = ($_REQUEST["site"] <> ''? $_REQUEST["site"] : ($_REQUEST["src_site"] <> ''? $_REQUEST["src_site"] : false));
	if($site !== false)
	{
		$rsSiteTemplates = CSite::GetTemplateList($site);
		while($arSiteTemplate = $rsSiteTemplates->Fetch())
		{
			if(strlen($arSiteTemplate["CONDITION"])<=0)
			{
				$site_template = $arSiteTemplate["TEMPLATE"];
				break;
			}
		}
	}
	if (CModule::IncludeModule('fileman'))
	{
		$arTemplates = CFileman::GetFileTemplates(LANGUAGE_ID, array($site_template));
		$arTemplatesList = array();
		foreach ($arTemplates as $key => $arTemplate)
		{
			$arTemplateList[$arTemplate["file"]] = "[".$arTemplate["file"]."] ".$arTemplate["name"];
		}
	}
	else
	{
		$arTemplatesList = array("page_inc.php" => "[page_inc.php]", "sect_inc.php" => "[sect_inc.php]");
	}	
	
	$arTemplateParameters["BLOCK_2_4_AREA_FILE_SHOW"] = array(
		"NAME" => GetMessage("BLOCK_AREA_FILE_SHOW"), 
		"TYPE" => "LIST",
		"MULTIPLE" => "N",
		"VALUES" => $arTypeInclude,
		"ADDITIONAL_VALUES" => "N",
		"DEFAULT" => "page",
		"PARENT" => "BLOCK_2_4",
		"REFRESH" => "Y",
	);
	
	if ($GLOBALS['USER']->CanDoOperation('edit_php') && $arCurrentValues["BLOCK_2_4_AREA_FILE_SHOW"] == "file")
	{
		$arTemplateParameters["BLOCK_2_4_AREA_PATH"] = array(
			"NAME" => GetMessage("BLOCK_AREA_PATH"), 
			"TYPE" => "STRING",
			"MULTIPLE" => "N",
			"ADDITIONAL_VALUES" => "N",
			"PARENT" => "BLOCK_2_4",
		);
	}
	else
	{
		$arTemplateParameters["BLOCK_2_4_AREA_FILE_SUFFIX"] = array(
			"NAME" => GetMessage("BLOCK_AREA_FILE_SUFFIX"), 
			"TYPE" => "STRING",
			"DEFAULT" => "inc",
			"PARENT" => "BLOCK_2_4",
		);

		if ($arCurrentValues["BLOCK_2_4_AREA_FILE_SHOW"] == "sect")
		{
			$arTemplateParameters["BLOCK_2_4_AREA_FILE_RECURSIVE"] = array(
				"NAME" => GetMessage("BLOCK_AREA_FILE_RECURSIVE"), 
				"TYPE" => "CHECKBOX",
				"ADDITIONAL_VALUES" => "N",
				"DEFAULT" => "Y",
				"PARENT" => "BLOCK_2_4",
			);
		}
	}

	$arTemplateParameters["BLOCK_2_4_AREA_EDIT_TEMPLATE"] = array(
		"NAME" => GetMessage("BLOCK_AREA_EDIT_TEMPLATE"), 
		"TYPE" => "LIST",
		"VALUES" => $arTemplateList,
		"DEFAULT" => "",
		"ADDITIONAL_VALUES" => "Y",
		"PARENT" => "BLOCK_2_4",
	);
}
elseif ($arCurrentValues["BLOCK_2_4_TYPE"] == "IMG")
{
	$arTemplateParameters["BLOCK_2_4_IMG_URL"] = array(
		"NAME" => GetMessage("BLOCK_IMG_URL"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_2_4",
	);
	$arTemplateParameters["BLOCK_2_4_IMG_ALT"] = array(
		"NAME" => GetMessage("BLOCK_IMG_ALT"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_2_4",
	);
	$arTemplateParameters["BLOCK_2_4_IMG_TITLE"] = array(
		"NAME" => GetMessage("BLOCK_IMG_TITLE"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_2_4",
	);
	$arTemplateParameters["BLOCK_2_4_IMG_LINK"] = array(
		"NAME" => GetMessage("BLOCK_IMG_LINK"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_2_4",
	);
}

$arTemplateParameters["BLOCK_2_4_HR"] = array(
	"NAME" => GetMessage("BLOCK_HR"), 
	"TYPE" => "CHECKBOX",
	"ADDITIONAL_VALUES" => "N",
	"DEFAULT" => "N",
	"PARENT" => "BLOCK_2_4",
);
//
// BLOCK 4 (2 Collumn) END
//

//
// BLOCK 5 (2 Collumn) START
//
if ($arCurrentValues["BLOCK_2_5_TYPE"] == "H")
{
	$arTemplateParameters["STRING_2_5_SIZE"] = array(
		"PARENT" => "BLOCK_2_5",
		"NAME" => GetMessage("STRING_SIZE"),
		"TYPE" => "LIST",
		"VALUES" => $arSize,
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
	$arTemplateParameters["STRING_2_5_TYPE"] = array(
		"PARENT" => "BLOCK_2_5",
		"NAME" => GetMessage("STRING_TYPE"),
		"TYPE" => "LIST",
		"VALUES" => $arType2,
		"ADDITIONAL_VALUES" => "N",
		"DEFAULT" => "H3",
		"REFRESH" => "Y",
	);
	$arTemplateParameters["STRING_2_5_TEXT"] = array(
		"PARENT" => "BLOCK_2_5",
		"NAME" => GetMessage("STRING_TEXT"),
		"TYPE" => "STRING",
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
	$arTemplateParameters["STRING_2_5_FONT"] = array(
		"PARENT" => "BLOCK_2_5",
		"NAME" => GetMessage("STRING_FONT"),
		"TYPE" => "LIST",
		"VALUES" => $TextFont,
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
}
elseif ($arCurrentValues["BLOCK_2_5_TYPE"] == "H+")
{
	$arTemplateParameters["STRING_2_5_SIZE"] = array(
		"PARENT" => "BLOCK_2_5",
		"NAME" => GetMessage("STRING_SIZE"),
		"TYPE" => "LIST",
		"VALUES" => $arSize,
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
	$arTemplateParameters["STRING_2_5_TYPE"] = array(
		"PARENT" => "BLOCK_2_5",
		"NAME" => GetMessage("STRING_TYPE"),
		"TYPE" => "LIST",
		"VALUES" => $arType2,
		"ADDITIONAL_VALUES" => "N",
		"DEFAULT" => "H3",
		"REFRESH" => "Y",
	);
	$arTemplateParameters["STRING_2_5_TEXT"] = array(
		"PARENT" => "BLOCK_2_5",
		"NAME" => GetMessage("STRING_TEXT"),
		"TYPE" => "STRING",
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
		"ROWS" => 5,
        "COLS" => "50",
	);
	$arTemplateParameters["STRING_2_5_FONT"] = array(
		"PARENT" => "BLOCK_2_5",
		"NAME" => GetMessage("STRING_FONT"),
		"TYPE" => "LIST",
		"VALUES" => $TextFont,
		"ADDITIONAL_VALUES" => "N",
		"REFRESH" => "N",
	);
}
elseif ($arCurrentValues["BLOCK_2_5_TYPE"] == "MENU")
{
	$arTemplateParameters["BLOCK_2_5_MENU_TEMPLATE"] = array(
		"PARENT" => "BLOCK_2_5",
		"NAME"=>GetMessage("BLOCK_MENU_TEMPLATE"),
		"TYPE" => "STRING",
		"DEFAULT"=>'social',
		"ADDITIONAL_VALUES"	=> "Y",
	);
	$arTemplateParameters["BLOCK_2_5_MENU_TYPE"] = array(
		"PARENT" => "BLOCK_2_5",
		"NAME"=>GetMessage("BLOCK_MENU_TYPE"),
		"TYPE" => "LIST",
		"DEFAULT"=>'social',
		"VALUES" => $arMenu,
		"ADDITIONAL_VALUES"	=> "Y",
		"DEFAULT"=>'social',
		"COLS" => 45,
	);

	$arTemplateParameters["BLOCK_2_5_MENU_MAX_LEVEL"] = array(
		"PARENT" => "BLOCK_2_5",
		"NAME"=>GetMessage("BLOCK_MENU_MAX_LEVEL"),
		"DEFAULT"=>'1',
		"TYPE" => "LIST",
		"VALUES" => Array(
			1 => "1",
			2 => "2",
			3 => "3",
			4 => "4",
		),
		"ADDITIONAL_VALUES"	=> "N",
	);
	$arTemplateParameters["BLOCK_2_5_MENU_CHILD_MENU_TYPE"] = array(
		"PARENT" => "BLOCK_2_5",
		"NAME"=>GetMessage("BLOCK_MENU_CHILD_MENU_TYPE"),
		"TYPE" => "LIST",
		"DEFAULT"=>'left',
		"VALUES" => $arMenu,
		"ADDITIONAL_VALUES"	=> "Y",
		"DEFAULT"=>'left',
		"COLS" => 45
	);
}
elseif ($arCurrentValues["BLOCK_2_5_TYPE"] == "HTML")
{
	$arTypeInclude = array("page" => GetMessage("MAIN_INCLUDE_PAGE"), "sect" => GetMessage("MAIN_INCLUDE_SECT"));
	if ($GLOBALS['USER']->CanDoOperation('edit_php'))
	{
		$arTypeInclude["file"] = GetMessage("MAIN_INCLUDE_FILE");
	}
	
	$site_template = false;
	$site = ($_REQUEST["site"] <> ''? $_REQUEST["site"] : ($_REQUEST["src_site"] <> ''? $_REQUEST["src_site"] : false));
	if($site !== false)
	{
		$rsSiteTemplates = CSite::GetTemplateList($site);
		while($arSiteTemplate = $rsSiteTemplates->Fetch())
		{
			if(strlen($arSiteTemplate["CONDITION"])<=0)
			{
				$site_template = $arSiteTemplate["TEMPLATE"];
				break;
			}
		}
	}
	if (CModule::IncludeModule('fileman'))
	{
		$arTemplates = CFileman::GetFileTemplates(LANGUAGE_ID, array($site_template));
		$arTemplatesList = array();
		foreach ($arTemplates as $key => $arTemplate)
		{
			$arTemplateList[$arTemplate["file"]] = "[".$arTemplate["file"]."] ".$arTemplate["name"];
		}
	}
	else
	{
		$arTemplatesList = array("page_inc.php" => "[page_inc.php]", "sect_inc.php" => "[sect_inc.php]");
	}	
	
	$arTemplateParameters["BLOCK_2_5_AREA_FILE_SHOW"] = array(
		"NAME" => GetMessage("BLOCK_AREA_FILE_SHOW"), 
		"TYPE" => "LIST",
		"MULTIPLE" => "N",
		"VALUES" => $arTypeInclude,
		"ADDITIONAL_VALUES" => "N",
		"DEFAULT" => "page",
		"PARENT" => "BLOCK_2_5",
		"REFRESH" => "Y",
	);
	
	if ($GLOBALS['USER']->CanDoOperation('edit_php') && $arCurrentValues["BLOCK_2_5_AREA_FILE_SHOW"] == "file")
	{
		$arTemplateParameters["BLOCK_2_5_AREA_PATH"] = array(
			"NAME" => GetMessage("BLOCK_AREA_PATH"), 
			"TYPE" => "STRING",
			"MULTIPLE" => "N",
			"ADDITIONAL_VALUES" => "N",
			"PARENT" => "BLOCK_2_5",
		);
	}
	else
	{
		$arTemplateParameters["BLOCK_2_5_AREA_FILE_SUFFIX"] = array(
			"NAME" => GetMessage("BLOCK_AREA_FILE_SUFFIX"), 
			"TYPE" => "STRING",
			"DEFAULT" => "inc",
			"PARENT" => "BLOCK_2_5",
		);

		if ($arCurrentValues["BLOCK_2_5_AREA_FILE_SHOW"] == "sect")
		{
			$arTemplateParameters["BLOCK_2_5_AREA_FILE_RECURSIVE"] = array(
				"NAME" => GetMessage("BLOCK_AREA_FILE_RECURSIVE"), 
				"TYPE" => "CHECKBOX",
				"ADDITIONAL_VALUES" => "N",
				"DEFAULT" => "Y",
				"PARENT" => "BLOCK_2_5",
			);
		}
	}

	$arTemplateParameters["BLOCK_2_5_AREA_EDIT_TEMPLATE"] = array(
		"NAME" => GetMessage("BLOCK_AREA_EDIT_TEMPLATE"), 
		"TYPE" => "LIST",
		"VALUES" => $arTemplateList,
		"DEFAULT" => "",
		"ADDITIONAL_VALUES" => "Y",
		"PARENT" => "BLOCK_2_5",
	);
}
elseif ($arCurrentValues["BLOCK_2_5_TYPE"] == "IMG")
{
	$arTemplateParameters["BLOCK_2_5_IMG_URL"] = array(
		"NAME" => GetMessage("BLOCK_IMG_URL"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_2_5",
	);
	$arTemplateParameters["BLOCK_2_5_IMG_ALT"] = array(
		"NAME" => GetMessage("BLOCK_IMG_ALT"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_2_5",
	);
	$arTemplateParameters["BLOCK_2_5_IMG_TITLE"] = array(
		"NAME" => GetMessage("BLOCK_IMG_TITLE"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_2_5",
	);
	$arTemplateParameters["BLOCK_2_5_IMG_LINK"] = array(
		"NAME" => GetMessage("BLOCK_IMG_LINK"), 
		"TYPE" => "STRING",
		"PARENT" => "BLOCK_2_5",
	);
}

$arTemplateParameters["BLOCK_2_5_HR"] = array(
	"NAME" => GetMessage("BLOCK_HR"), 
	"TYPE" => "CHECKBOX",
	"ADDITIONAL_VALUES" => "N",
	"DEFAULT" => "N",
	"PARENT" => "BLOCK_2_5",
);
//
// BLOCK 5 (2 Collumn) END
//


?>