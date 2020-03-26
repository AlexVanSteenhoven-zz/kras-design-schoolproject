<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/layouts/contact.css">
    <?php require_once('../globals/config.php'); ?>
    <?php require_once('../includes/index_header.html'); ?>
    <title><?php echo SITE_TITLE?> || Contact</title>
</head>
<body>
<!--    Import navigation bar    -->
<?php require_once('../partials/navbar.html') ?>

<!--    Body goes here    -->
<div><h1>Neem contact met ons op</h1></div>
<form action="contact.php" method="post" class="container">
    <div class="name div">
        <div><h3>Geef uw naam op*</h3></div>
        <div><input type="text" required placeholder="Naam" name="name"></div>
    </div>

    <div class="email div">
        <div><h3>Geef uw E-mail op*</h3></div>
        <div><input type="text"  required placeholder="E-mail" name="email"></div>
    </div>

    <div class="tel div">
        <div><h3>Geef uw Telefoonnummer op</h3></div>
        <div><input type="text" placeholder="Telefoonnummer" name="tel"></div>
    </div>

    <div class="text div">
        <h3>Wat heeft u te vertellen?*</h3>
        <textarea name="text" required placeholder="Uw vraag/opmerking" id="" cols="28" rows="9"></textarea>
    </div>
    <div class="submit div">
        <button class="submit div">Verzend die shit</button>
    </div>
</form>

<!--    Import footer    -->
<?php require_once('../partials/footer.html') ?>
</body>
</html>
