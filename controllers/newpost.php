<?php

class NewPost extends Controller
{

  function __construct()
  {
    parent::__construct();
    //echo "We are in newpost";
    $this->view->render('newpost');
  }
}
