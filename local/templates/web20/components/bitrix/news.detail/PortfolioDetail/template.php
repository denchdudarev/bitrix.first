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

<!-- Контент для детальной страниыцы портфолио -->
<div class="single-portfolio-area pt-90 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="portfolio-details">
                    <h3>
                        <?=$arResult["PREVIEW_TEXT"] ?? ""?> <?=$arResult["NAME"] ?? ''?>
                    </h3>
                    <?php if(!empty($arResult["PROPERTIES"]["DETAIL_DESCRIPTION"]["DESCRIPTION"])):?>
                        <?php foreach ($arResult["PROPERTIES"]["DETAIL_DESCRIPTION"]["DESCRIPTION"] as $arKey => $arItem):?>
                            <span class="text-colort-blue">
                                <?=$arResult["PROPERTIES"]["DETAIL_DESCRIPTION"]["DESCRIPTION"][$arKey]?>
                            </span>
                            <?php if(!empty($arResult["PROPERTIES"]["DETAIL_DESCRIPTION"]["VALUE"][$arKey]["TEXT"])): ?>
                                <p>
                                    <?=$arResult["PROPERTIES"]["DETAIL_DESCRIPTION"]["VALUE"][$arKey]["TEXT"]?>
                                </p>
                            <?endif;?>
                        <?endforeach;?>
                    <?endif;?>
                </div>
            </div>
            <div class="col-md-5">
                <?php if (!empty($arResult["PROPERTIES"]["ADD_INFO"]["VALUE"])):?>
                <div class="portfolio-meta">
                    <ul>
                        <?php foreach ($arResult["PROPERTIES"]["ADD_INFO"]["VALUE"] as $arKey => $arItem):?>
                        <li><span><b><?=$arItem?></b> </span> <?=$arResult["PROPERTIES"]["ADD_INFO"]["DESCRIPTION"][$arKey] ?? ""?></li>
                        <?endforeach;?>
                    </ul>
                    <?php if ($arResult["PROPERTIES"]["LINK"]):?>
                        <a href="<?=$arResult["PROPERTIES"]["LINK"]["VALUE"]?>"
                           class="btn mt-30">
                            <?=$arResult["PROPERTIES"]["LINK"]["NAME"]?>
                        </a>
                    <?endif;?>
                </div>
                <?endif;?>
            </div>
        </div>
    </div>
</div>

<!-- Фотогалерея -->
<div class="img-gallery-area pt-30 pb-60">
    <div class="container">
        <div class="row">
            <?php if (!empty($arResult["DISPLAY_PROPERTIES"]["GALLERY"]["FILE_VALUE"])):?>
            <?php foreach ($arResult["DISPLAY_PROPERTIES"]["GALLERY"]["FILE_VALUE"] as $arKey => $arItem):?>
                <div class="col-md-4 col-sm-auto">
                    <div class="img-gallery hover-bg-opacity mb-30">
                        <a class="image-link" href="<?=$arResult["DISPLAY_PROPERTIES"]["GALLERY"]["FILE_VALUE"][$arKey]["SRC"]?>">
                            <img src="<?=$arResult["DISPLAY_PROPERTIES"]["GALLERY"]["FILE_VALUE"][$arKey]["SRC"]?>" alt="<?=$arResult["NAME"]?>" /></a>
                    </div>
                </div>
            <?endforeach;?>
            <?endif;?>
        </div>
    </div>
</div>