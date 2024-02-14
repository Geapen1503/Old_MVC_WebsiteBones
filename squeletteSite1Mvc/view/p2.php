<?php
ob_start();
?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../public/css/p2.css">
	<link rel="stylesheet" type="text/css" media="screen and (max-width: 1000px)" href="../public/lcss/lP2.css">
	<link rel="icon" type="image/png" href="../public/img/">
	<title>  - P2</title>
</head>
<?php
$head = ob_get_clean();

ob_start();
?>

    <div id="MainBox">
        <div class="usBox">
            <h1 class="usTitle">Qui somme nous ?</h1>
            <p class="usDescription">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Massa massa ultricies mi quis hendrerit. Malesuada nunc vel risus commodo viverra maecenas accumsan lacus.</p>
        </div>

        <div class="rateBox">
            <div class="customerRateBox">
                <div class="leftBox">
                    <img class="starsImg" src="../public/img/rating_stars.png">
                    <p class="raterName">Hava Nagila</p>
                    <p class="rateDate">03/07/2047</p>
                </div>
                <div class="rightBox">
                    <p class="rateDescription">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Massa massa ultricies mi quis hendrerit
                    </p>
                </div>
            </div>

            <div class="customerRateBox">
                <div class="leftBox">
                    <img class="starsImg" src="../public/img/rating_stars.png">
                    <p class="raterName">Lili Boniche</p>
                    <p class="rateDate">08/10/2008</p>
                </div>
                <div class="rightBox">
                    <p class="rateDescription">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Massa massa ultricies mi quis hendrerit
                    </p>
                </div>
            </div>

            <div class="customerRateBox">
                <div class="leftBox">
                    <img class="starsImg" src="../public/img/rating_stars.png">
                    <p class="raterName">Enricco Macias</p>
                    <p class="rateDate">21/06/2019</p>
                </div>
                <div class="rightBox">
                    <p class="rateDescription">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Massa massa ultricies mi quis hendrerit
                    </p>
                </div>
            </div>
        </div>
    </div>


<?php
$content = ob_get_clean();