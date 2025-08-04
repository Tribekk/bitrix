<?
CModule::IncludeModule("iblock");

$sections = array();
$arFilter = Array('IBLOCK_ID'=>3, 'GLOBAL_ACTIVE'=>'Y');
$db_list = CIBlockSection::GetList(Array("SORT" => "ASC"), $arFilter, true);
$sectionlist=array();
while($ar_result = $db_list->GetNext()){
		
	$sections[$ar_result["ID"]]["NAME"] = $ar_result["NAME"];
	
	$arSelect = Array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM","PREVIEW_PICTURE","PREVIEW_TEXT","DETAIL_PICTURE","PROPERTY_*", "*");
	$arFilter = Array("IBLOCK_ID"=>3, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "SECTION_ID" => $ar_result["ID"]);
	$res = CIBlockElement::GetList(Array("SORT" => "ASC"), $arFilter, false, false, $arSelect);
	while($ob = $res->GetNextElement()){ 
		$arFields = $ob->GetFields();  
		$arProps = $ob->GetProperties();
		
		$sections[$ar_result["ID"]]["ITEMS"][$arFields["ID"]] = $arFields;
		$sections[$ar_result["ID"]]["ITEMS"][$arFields["ID"]]["PROPERTIES"] = $arProps;
		
		$db_old_groups = CIBlockElement::GetElementGroups($arFields["ID"], true);
		$ar_new_groups = array();
		while($ar_group = $db_old_groups->Fetch()) {
			$ar_new_groups[] = $ar_group["NAME"];
		}
		
		$sections[$ar_result["ID"]]["ITEMS"][$arFields["ID"]]["NEW_TAGS"] = $ar_new_groups;
		
	}
	
}

$arResult["SECTIONS"] = $sections;



$sections_all = array();
//формируем массив элементов во вкладке ВСЕ
$arSelect = Array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM","PREVIEW_PICTURE","PREVIEW_TEXT","DETAIL_PICTURE","PROPERTY_*", "*");
$arFilter = Array("IBLOCK_ID"=>3, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "PROPERTY_MAIN_ELEMENT_VALUE" => "Y");
$res = CIBlockElement::GetList(Array("property_MAIN_SORT" => "ASC"), $arFilter, false, false, $arSelect);
while($ob = $res->GetNextElement()){ 
	$arFields = $ob->GetFields();  
	$arProps = $ob->GetProperties();
	
	$sections_all["ITEMS"][$arFields["ID"]] = $arFields;
	$sections_all["ITEMS"][$arFields["ID"]]["PROPERTIES"] = $arProps;
	
	$db_old_groups = CIBlockElement::GetElementGroups($arFields["ID"], true);
	$ar_new_groups = array();
	while($ar_group = $db_old_groups->Fetch()) {
		$ar_new_groups[] = $ar_group["NAME"];
	}
	
	$sections_all["ITEMS"][$arFields["ID"]]["NEW_TAGS"] = $ar_new_groups;
}

$arResult["ALL"] = $sections_all;

//d($sections);
?>