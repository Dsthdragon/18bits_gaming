<?php

class index extends controller
{
    function __construct()
    {
        parent::__construct();
        auth::hangin();
    }

    function index()
    {
        $this->view->config = $this->model->getConfig();
        $this->view->articles = $this->model->getArticles();
        $this->view->games = $this->model->getGames();
        $this->view->gallery = $this->model->getGallery();
        $this->view->activePage = "index";
        $this->view->render('header');
        $this->view->render('index/index');
        $this->view->render('footer');
    }
}
