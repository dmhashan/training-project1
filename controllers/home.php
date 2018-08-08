<?php

class Home extends Controller
{
    public function __construct()
    {
      parent::__construct();
      //echo "We are in index";
      $this->view->render('home');
    }
}
