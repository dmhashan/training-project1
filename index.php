<?php
    require 'views/header.php';
    $header = new Header('Posting Application');

    require 'views/nav.php';
    $header = new Nav();

      require 'libs/Application.php';
      require 'libs/Controller.php';
      require 'libs/View.php';
      $app = new Application();

    require 'views/footer.php';
    $header = new Footer();
