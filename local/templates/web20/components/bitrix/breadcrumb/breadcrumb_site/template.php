<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";

$res = '<div class="col-md-5 col-sm-6">
				<div class="breadcrumb-menu">
					<ol class="breadcrumb text-right">';

$elCount = count($arResult);
foreach ($arResult as $arKey => $arItem) {
    $link = (!empty($arItem['LINK']) && $arKey < ($elCount - 1)) ? $arItem["LINK"] : '#';
    $title = $arItem["TITLE"] ?? '';
    $res.= '<li>
							<a href="' . $link . '">' . $title . '</a>
						</li>';
}

$res .= '			</ol>
				</div>
			</div>';
return $res
?>