<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)): ?>

<!-- Меню (основное) -->

    <div class="col-lg-7 col-md-7 col-sm-12">
        <div class="footer-nav white-text">
            <nav>
                <ul>
                    <?foreach ($arResult as $item): ?>
                        <?if($item["SELECTED"]): ?>
                            <li class="mega-parent">
                                <a href="<?= $item['LINK'] ?>" style="color: #e1f0b1"><?= $item['TEXT'] ?></a>
                            </li>
                        <?else:?>
                            <li class="mega-parent">
                                <a href="<?= $item['LINK'] ?>"><?= $item['TEXT'] ?></a>
                            </li>
                        <?endif;?>
                    <?endforeach;?>
                </ul>
            </nav>
        </div>
    </div>

<?endif?>