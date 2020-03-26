<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <?php require_once('../globals/config.php'); ?>
        <?php require_once('../includes/index_header.html'); ?>
        <title><?php echo SITE_TITLE?> || Hosting</title>
    </head>
    <body>
        <!--    Import navigation bar    -->
        <?php require_once('../partials/navbar.html') ?>

        <!--    Body goes here    -->

        <label for="check"></label>
        <input type="text" id="check" placeholder="example: www.google.com">
        <input type="button" value="Controlleer" id="check-btn">
        <!--    Import footer    -->
        <script src="../assets/js/components/domainCheck.js"></script>
        <?php require_once('../partials/footer.html') ?>
    </body>
</html>
