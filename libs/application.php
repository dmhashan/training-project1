<?php

class Application
{

  function __construct()
  {
    $url = rtrim($_GET['url'],'/');
    $urlparts = explode('/', $url);

    if($urlparts[0] == "NewPost") {
      
    }else if($urlparts[0] == "NewPost") {

    }else {

    }
  }
}
