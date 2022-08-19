<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)): ?>

<!-- Меню (основное) -->

<div class="header-main-menu hidden-xs">
    <nav id="primary-menu">
        <ul class="main-menu text-right">
            <?foreach ($arResult as $item): ?>
                    <li>
                        <a <?=!empty($item["SELECTED"]) ? 'style="color:lightseagreen"' : '' ?> href="<?= $item['LINK'] ?>">
                            <?= $item['TEXT']?>
                            <?if (isset($item['SUBITEMS'])):?>
                                <span class="indicator"><i class="fa fa-angle-down"></i></span>
                            <?endif;?>
                        </a>
                        <?if (isset($item['SUBITEMS'])):?>
                            <ul class="dropdown">
                                <?foreach ($item['SUBITEMS'] as $keySubitems => $itemSubitems):?>
                                    <li>
                                        <a href="<?=$itemSubitems["LINK"]?>"><?=$itemSubitems["TEXT"]?></a>
                                    </li>
                                <?endforeach;?>
                            </ul>
                        <?endif;?>
                    </li>
            <?endforeach;?>
        </ul>
    </nav>
</div>

<?endif?>

