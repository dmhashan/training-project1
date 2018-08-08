<?php

class Application
{

  function __construct()
  {
    $url = rtrim($_GET['url'],'/');
    $url = explode('/', $url);

    $file = 'controllers/' . $url[0] . '.php';

    if (file_exists($file)) {
      require $file;
      $controller = new $url[0]();
    }else {
      require 'controllers/error.php';
      $controller = new ErrorShow();
      return 0;
    }



  }
}
