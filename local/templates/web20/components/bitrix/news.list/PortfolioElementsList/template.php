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
<div class="news-list">
    <div id="Container">
<?foreach($arResult["ITEMS"] as $arItem):?>
        <div class="col-md-4 col-sm-6 col-xs-12 mb-30 mix <?=$arItem["SECTIONS_CODES"]?>">
            <div class="portfolio-wrapper portfolio-title">
                <div class="portfolio-img">
                    <?php if (!empty($arItem["PREVIEW_PICTURE"]["SRC"])):?>
                    <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                         alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"/>
                    <?endif;?>
                    <div class="work-text brand-bg">
                        <div class="inner-text">
                            <?php if (!empty($arItem["PREVIEW_PICTURE"]["SRC"])):?>
                            <a class="view-portfolio image-link"
                               href="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>">
                                <span class="plus"></span>
                            </a>
                            <?endif;?>
                        </div>
                    </div>
                </div>
                <div class="portfolio-heading pd-15">
                    <h4 class="mb-10">
                        <a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a>
                    </h4>
                    <?php if (!empty($arItem["PREVIEW_TEXT"])):?>
                        <h5 class="m-0"><?=$arItem["PREVIEW_TEXT"]?></h5>
                    <?endif;?>
                </div>
            </div>
        </div>
<?endforeach;?>
    </div>
</div>