<?php

class games extends controller
{
  function __construct()
  {
    parent::__construct();
    auth::hangin();
  }

  function index()
  {
    $this->view->platforms = $this->model->platforms();
    $this->view->genres = $this->model->genres();
    $this->view->activePage = "games";
    $this->view->games = $this->model->getGames();
    $this->view->render('header');
    $this->view->render('games/index');
    $this->view->render('footer');
  }
}
