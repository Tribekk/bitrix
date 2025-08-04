<?if(CModule::IncludeModule("iblock")){
    $sectionList=[];
  // выборка только активных разделов из инфоблока $IBLOCK_ID, $ID - раздел-родителя
  $arFilter = Array('IBLOCK_ID'=>$arParams["IBLOCK_ID"], 'GLOBAL_ACTIVE'=>'Y');
  $db_list = CIBlockSection::GetList(Array('SORT'=>'ASC'), $arFilter, true);
    $sectionlist=array();
  while($ar_result = $db_list->GetNext())
  {
        array_push($sectionlist , $ar_result);
  }
    $arResult["SECTION"]=$sectionlist;
}?>