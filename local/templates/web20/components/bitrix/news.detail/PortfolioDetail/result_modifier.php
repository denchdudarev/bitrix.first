<?php
    $res = CIBlockSection::GetByID($arResult['IBLOCK_SECTION_ID']);
    $ar_res = $res->GetNext();
    $arResult["IBLOCK"]["SECTION_NAME"] = $ar_res["NAME"];
?>