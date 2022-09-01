<?php

class post extends controller
{
    function __construct()
    {
        parent::__construct();
        auth::hangin();
    }

    function index($link)
    {


        $this->view->article = $article = $this->model->getArticle($link);
        if(!empty($article)){
            $this->view->activePage = "news";
            $this->view->title = $article['title'];
            $this->view->description = $article['abstract'];
            $this->view->meta_image = loadmedia::image($article['image'], "img");
            $this->view->author = $this->model->getAuthor($article['admin']);
            $this->view->tags = $this->model->getTags($article['id']);
            $this->view->posts = $this->model->getOtherPost($article['id']);
            $this->view->render('header');
            $this->view->render('new/index');
            $this->view->render('footer');
        } else {
            $this->view->render('header');
            $this->view->render('error/index');
            $this->view->render('footer');
        }
    }
}
