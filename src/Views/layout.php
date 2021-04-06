<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="./assets/css/mobile-menu.css"/>
    <link rel="stylesheet" href="./assets/css/offcanvas.min.css"/>
    <link rel="stylesheet" href="./assets/css/owl.carousel.css"/>
    <link rel="stylesheet" href="./assets/css/owl.theme.default.min.css"/>
    <link rel="stylesheet" href="./assets/css/style.css"/>
    <script src="./assets/js/jquery-2.1.4.min.js" defer></script>
    <script src="./assets/js/jquery.easing.min.js" defer></script>
    <script src="./assets/js/bootstrap.min.js" defer></script>
    <script src="./assets/js/mobile-menu.js" defer></script>
    <script src="./assets/js/offcanvas.min.js" defer></script>
    <script src="./assets/js/owl.carousel.min.js" defer></script>
    <script src="./assets/js/pagination.js" defer></script>
    <script src="./assets/js/script.js" defer></script>
    <script src="./assets/js/scripts.js" defer></script>
    <script src="./assets/js/smoothscroll.js" defer></script>
    <script src="./assets/js/validation.js" defer></script>

    <title><?= $titre ?></title>

</head>
<body>
    <header>
    <div class="container">
        <p id="todayDate">Coucou</p>
    </div>
    </header>
    <div id="contenu">
        <?php //echo $content; ?>
    </div>
</div>
</body>
</html>
<?php
unset($_SESSION['error']);
unset($_SESSION['old']);
