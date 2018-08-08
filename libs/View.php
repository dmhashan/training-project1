<?php

class View
{

  function __construct()
  {
    //echo "This is the view";
  }

  public function render($name)
  {
    //echo 'views/'.$name.'/index.php';
    require 'views/'.$name.'/index.php';
  }
}
