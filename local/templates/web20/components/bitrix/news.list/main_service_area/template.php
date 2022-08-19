<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?php if (!empty($arResult["ITEMS"])):?>
<div class="news-list">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
    <!-- Основные направления -->
    <section class="service-area pt-90 pb-60 bg-color">
        <div class="container">
            <div class="row">
                <div class="section-heading text-center mb-70">
                    <h2><?=$arResult["NAME"]?></h2>
                    <p><?=$arResult["DESCRIPTION"]?></p>
                </div>
            </div>
            <div class="row">
                <?foreach($arResult["ITEMS"] as $arItem):?>
                    <?
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>
	                <p class="news-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-service brand-hover radius-4 mb-30 text-center">
                                <div class="service-icon">
                                    <span class="<?php if (!empty($arItem["PROPERTIES"]["ICON_CLASS"]["VALUE"]))?>
                                    <?=$arItem["PROPERTIES"]["ICON_CLASS"]["VALUE"]?>" aria-hidden="true"></span>
                                </div>
                                <div class="service-text">
                                    <h3><?=$arItem["NAME"]?></h3>
                                    <p><?=isset($arItem["PREVIEW_TEXT"]) ? $arItem["PREVIEW_TEXT"] : ""?>
                                    </p>
                                </div>
                            </div>
                        </div>
	                </p>
            <?endforeach;?>
            </div>
        </div>
    </section>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
<?endif;?>