<?php
    require 'views/header.php';
    $header = new Header("Hello");

    require 'views/nav.php';
    $header = new Nav();

    require 'libs/application.php';
    $application = new Application();

    require 'views/footer.php';
    $header = new Footer();
