<?php

class store extends controller
{
  function __construct()
  {
    parent::__construct();
    auth::hangin();
  }

  function index()
  {
    $this->view->render('header');
    $this->view->render('store/index');
    $this->view->render('footer');
  }
}
