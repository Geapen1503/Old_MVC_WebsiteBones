<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" type="text/css" href="../public/lcss/lstyle.css" media="screen and (max-width: 1000px)">
    <?= $head ?? '' ?>
</head>
<body>
    <div id="containerBox">
        <?php include_once 'navbar/navbar.php' ?>
        <?= $content ?? '' ?>
        <?php include_once 'footer/footer.php' ?>
    </div>
</body>
</html>