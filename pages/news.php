<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php require_once('../globals/config.php'); ?>
    <?php require_once('../includes/index_header.html'); ?>
    <link rel="stylesheet" href="../assets/css/layouts/nieuws.css">
    <title><?php echo SITE_TITLE?> || News</title>
</head>
<body>
<!--    Import navigation bar    -->
<?php require_once('../partials/navbar.html') ?>

<!--    Body goes here    -->
<div class="container">
    <div class="post post1">
        <img class="img-post" src="/assets/img/news_move_icon.png" alt="placeholder img">
        <h4>Wij gaan verhuizen</h4>
        <small>19-03-2019</small> <br> <br>
        <p>
            U bent welkom in ons nieuwe pand vanaf 30 maart 2020!
            De locatie vind u op de About pagina. <br> <br>
            <a href="about.php" class="aboutPage">About</a>
        </p>
    </div>
    <div class="post post2">
        <img class="img-post" src="../assets/img/news_opening_icon.png" alt="placeholder img">
        <h4>De opening</h4>
        <small>05-04-2019</small> <br> <br>
        <p>
            Ons nieuwe pand gaat open op vrijdag 27 maart, voor het eerst voor publiek geopend.
            De opening zal plaatsvinden om 15:00 uur
        </p>
    </div>
    <div class="post post3">
        <img class="img-post" src="../assets/img/news_openings_hours_icon.png" alt="placeholder img">
        <h4>openingstijden</h4>
        <small>06-04-2020</small> <br> <br>
        <p>
            <strong>Maandag t/m Vrijdag: </strong> 09:00 - 17:00 <br>
            <strong>Zaterdag: </strong> 12:00 - 15:00 <br>
            <strong>Maandag t/m Vrijdag: </strong> gesloten
        </p>
    </div>
    <div class="post post4">
        <img class="img-post" src="../assets/img/news_domain_lookup.png" alt="placeholder img">
        <h4>Nieuwe domein checker is online</h4>
        <small>26-01-2020</small> <br> <br>
        <p>
            wilt u een domein aanschaffen, alleen u weet niet of uw website beschikbaar is?
            probeer onze gratis domein lookup tool!
        </p>
    </div>
    <div class="post post5">
        <img class="img-post-lg" src="../assets/img/krasdesign.png" alt="placeholder img">
        <h4>Ons nieuwe logo</h4>
        <small>24-02-2020</small> <br> <br>
        <p>
            Omdat heel ons bedrijf aan het vernieuwen is hebben we besloten om meteen
            ook een nieuw logo te maken.
        </p>
    </div>
    <div class="post post6">
        <img class="img-post" src="../assets/img/news_web_icon.png" alt="placeholder img">
        <h4>Onze website is vernieuwd</h4>
        <small>26-03-2020</small> <br> <br>
        <p>
            Ook onze website is vernieuwd met een heleboel nieuwe features.
            Dus neem snel een kijkje hier op onze vernieuwde website!
        </p>
    </div>
</div>

<!--    Import footer    -->
<?php require_once('../partials/footer.html') ?>
</body>
</html>
