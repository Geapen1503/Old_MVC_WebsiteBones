<?php
ob_start();
?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../public/css/p1.css">
	<link rel="stylesheet" type="text/css" media="screen and (max-width: 1000px)" href="../public/lcss/lP1.css">
	<link rel="icon" type="image/png" href="../public/img/">
	<title>  - P1</title>
</head>
<?php
$head = ob_get_clean();

ob_start();
?>

    <div id="MainBox">
        <div class="prestationContainerBox">
            <div class="prestationBox">
                <div class="topBox">
                    <img class="prestationImg" src="../public/img/">
                </div>
                <div class="bottomBox">
                    <p class="prestationTitle">Partenaire 1</p>
                    <p class="prestationDescription">lorem ipsum lorem I just want to have a lot of commit thanks github ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</p>
                </div>
            </div>

            <div class="prestationBox">
                <div class="topBox">
                    <img class="prestationImg" src="../public/img/">
                </div>
                <div class="bottomBox">
                    <p class="prestationTitle">Vente de Raisin</p>
                    <p class="prestationDescription">lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</p>
                </div>

            </div>

            <div class="prestationBox">
                <div class="topBox">
                    <img class="prestationImg" src="../public/img/">
                </div>
                <div class="bottomBox">
                    <p class="prestationTitle">Réparation Tong</p>
                    <p class="prestationDescription">lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</p>
                </div>

            </div>
        </div>
    </div>

<?php
$content = ob_get_clean();
