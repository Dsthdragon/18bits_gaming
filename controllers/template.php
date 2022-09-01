<?php

class template extends controller
{
  function __construct()
  {
    parent::__construct();
    auth::hangin();
  }

  function index()
  {
    $this->view->render('header');
    $this->view->render('template/index');
    $this->view->render('footer');
  }
}
