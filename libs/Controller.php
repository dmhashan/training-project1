<?php

class Controller
{

  function __construct()
  {
    //echo "This is main controller interface";
    $this->view = new View();
  }
}
