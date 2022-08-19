<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О нас");

$APPLICATION->SetPageProperty('TITLE', 'О нас | We Coders ');
$APPLICATION->SetPageProperty('description', 'О нас');
$APPLICATION->SetPageProperty('keywords', 'О нас');
?><h1>
<?= $APPLICATION->ShowTitle(false); ?> </h1>
    <section class="who-area-are pad-90" id="about_us">
<div class="container">
	<h2 class="title-1">
        <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
                "AREA_FILE_SHOW" => "file",
                "PATH" => $APPLICATION->GetCurDir() . "/includes/index_about_title.php"
            )
        );?>
    </h2>
	<div class="row">
		<div class="col-md-7">
			<div class="who-we">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => $APPLICATION->GetCurDir() . "/includes/index_about_description.php"
                    )
                );?>
			</div>
		</div>
		<div class="col-md-5">
			<div class="about-bg">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => $APPLICATION->GetCurDir() . "/includes/index_about_image.php"
                    )
                );?>
			</div>
		</div>
	</div>
</div>
 </section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>