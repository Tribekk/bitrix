<?if(CModule::IncludeModule("iblock")){
    $sectionList=[];
  // выборка только активных разделов из инфоблока $IBLOCK_ID, $ID - раздел-родителя
  $arFilter = Array('IBLOCK_ID'=>$IBLOCK_ID, 'GLOBAL_ACTIVE'=>'Y', 'SECTION_ID'=>$ID);
  $db_list = CIBlockSection::GetList(Array($by=>$order), $arFilter, true);
    $sectionlist=array();
  while($ar_result = $db_list->GetNext())
  {
        array_push($sectionlist , $ar_result);
  }
    $arResult["SECTION"]=$sectionlist;
}?>