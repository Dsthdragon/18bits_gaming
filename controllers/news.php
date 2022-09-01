<?php

class news extends controller
{
    function __construct()
    {
        parent::__construct();
        auth::hangin();
    }

    function index($currentPag = 1, $link = null) {
        if(!ctype_digit($currentPag) && $currentPag != null)
        {
            $link = $currentPag;
            $currentPag = 1;
        }
        if ($currentPag < 1) {
            $this->view->currentPage = 1;
        } else {
            $this->view->currentPage = $currentPag;
        }$this->view->activePage = "news";
        $this->view->articles = $this->model->getArticles($link);
        $this->view->category = $this->model->category($link);
        $this->view->render('header');
        $this->view->render('news/index');
        $this->view->render('footer');
    }
}
