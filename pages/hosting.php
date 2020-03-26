<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <?php require_once('../globals/config.php'); ?>
        <?php require_once('../includes/index_header.html'); ?>
        <link rel="stylesheet" href="../assets/css/layouts/hosting.css">
        <title><?php echo SITE_TITLE?> || Hosting</title>
    </head>
    <body>
        <!--    Import navigation bar    -->
        <?php require_once('../partials/navbar.html') ?>

        <!--    Body goes here    -->
        <div class="domain-lookup">
            <h1>Website hosting</h1>
            <div class="lookup">
                <label class="lbl" for="check">Check hier je domein!</label>
                <input type="text" id="check" placeholder="example: www.google.com">
                <input type="button" class="btn" value="Controlleer" id="check-btn">
            </div>
        </div>

        <div class="container">
            <div class="item plan1">
                <h2>starter plan</h2>
                <div class="flex-content"><br> <br>
                    <p>
                        Dit is het Goedkoopste maar toch krachtigste hosting plan die u maar kan wensen.
                        Met onze goed beveiligde servers is al uw data veilig en altijd encrypted.
                    </p> <br>
                    <hr class="smaller">
                    <ul class="list">
                        <li>1 Gratis SSL certificaat</li>
                        <li>20GB mail opslag</li>
                        <li>20.000 postvakken</li>
                        <li>2 databases</li>
                        <li>30GB webspace</li>
                    </ul><br>
                    <hr class="smaller">

                    <p class="additional">
                        Met een SSL-certificaat maken we het hackers en spammers vrijwel onmogelijk om
                        persoonsgegevens van je klanten te stelen. Wij raden al onze klanten aan om voor SSL-certificaat te
                        kiezen. Natuurlijk doe wij het werk.Met een SSL-certificaat maken we het hackers en spammers vrijwel onmogelijk om
                        persoonsgegevens van je klanten te stelen. Wij raden al onze klanten aan om voor SSL-certificaat te
                        kiezen. Natuurlijk doe wij het werk.
                    </p> <br>
                    <button class="choose-btn">Kies dit plan</button>
                </div>

            </div>
            <div class="item plan2">
                <h2>Small business</h2>
                <div class="flex-content"><br> <br>
                    <p>
                        Bent u een ZZP'er of een startend bedrijf? dan is dit pakket optimaal voor u!
                        Met onze goed beveiligde servers is al uw data veilig en altijd encrypted.
                    </p> <br>
                    <hr class="smaller">
                    <ul class="list">
                        <li>3 Gratis SSL certificaat</li>
                        <li>80GB mail opslag</li>
                        <li>70.000 postvakken</li>
                        <li>4 databases</li>
                        <li>100GB webspace</li>
                    </ul><br>
                    <hr class="smaller">

                    <p class="additional">
                        Met een SSL-certificaat maken we het hackers en spammers vrijwel onmogelijk om
                        persoonsgegevens van je klanten te stelen. Wij raden al onze klanten aan om voor SSL-certificaat te
                        kiezen. Natuurlijk doe wij het werk.Met een SSL-certificaat maken we het hackers en spammers vrijwel onmogelijk om
                        persoonsgegevens van je klanten te stelen. Wij raden al onze klanten aan om voor SSL-certificaat te
                        kiezen. Natuurlijk doe wij het werk.
                    </p>
                </div>
                <button class="choose-btn">Kies dit plan</button>
            </div>
            <div class="item plan3">
                <h2>Premium</h2>
                <div class="flex-content"><br> <br>
                    <p>
                        Dit is het Goedkoopste maar toch krachtigste hosting plan die u maar kan wensen.
                        Met onze goed beveiligde servers is al uw data veilig en altijd encrypted.
                    </p> <br>
                    <hr class="smaller">
                    <ul class="list">
                        <li>5 Gratis SSL certificaat</li>
                        <li>100GB mail opslag</li>
                        <li><strong>Unlimited</strong> postvakken</li>
                        <li>10 databases</li>
                        <li>300GB webspace</li>
                    </ul><br>
                    <hr class="smaller">

                    <p class="additional">
                        Met een SSL-certificaat maken we het hackers en spammers vrijwel onmogelijk om
                        persoonsgegevens van je klanten te stelen. Wij raden al onze klanten aan om voor SSL-certificaat te
                        kiezen. Natuurlijk doe wij het werk.Met een SSL-certificaat maken we het hackers en spammers vrijwel onmogelijk om
                        persoonsgegevens van je klanten te stelen. Wij raden al onze klanten aan om voor SSL-certificaat te
                        kiezen. Natuurlijk doe wij het werk.
                    </p>
                </div>
                <button class="choose-btn">Kies dit plan</button>
            </div>
        </div>

        <!--    Import footer    -->
        <script src="../assets/js/components/domainCheck.js"></script>
        <?php require_once('../partials/footer.html') ?>
    </body>
</html>
