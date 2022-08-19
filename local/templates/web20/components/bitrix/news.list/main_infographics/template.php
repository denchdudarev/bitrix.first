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
    <section class="project-count-area brand-bg pad-90">
        <div class="container">
            <div class="row">
                <?foreach($arResult["ITEMS"] as $arItem):?>
                    <!-- Инфографика -->
                    <div class="col-md-3 col-sm-3">
                        <div class="single-count white-text text-center">
                            <?php if (!empty($arItem["PROPERTIES"]["ICON_CLASS"]["VALUE"])):?>
                                <span class="<?=$arItem["PROPERTIES"]["ICON_CLASS"]["VALUE"]?>"></span>
                            <?endif;?>
                            <h2 class="counter"><?=isset($arItem["DETAIL_TEXT"]) ? $arItem["DETAIL_TEXT"] : ""?></h2>
                            <p><?=isset($arItem["NAME"]) ? $arItem["NAME"] : ""?></p>
                        </div>
                    </div>
                <?endforeach;?>
            </div>
        </div>
    </section>
</div>
<?endif;?>