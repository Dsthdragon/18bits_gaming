<?php

class game extends controller
{
    function __construct()
    {
        parent::__construct();
        auth::hangin();
    }

    function index($link)
    {
        $this->view->game = $game = $this->model->getGame($link);
        if(!empty($game)){
            $this->view->activePage = "games";
            $this->view->platforms = $this->model->getPlatforms($link);
            $this->view->stores = $this->model->getStores($link);
            $this->view->genres = $this->model->getGenres($link);
            $this->view->images = $this->model->getImages($link);
            $this->view->videos = $this->model->getVideos($link);
            $this->view->render('header');
            $this->view->render('game/index');
            $this->view->render('footer');
        } else {
            $this->view->render('header');
            $this->view->render('error/index');
            $this->view->render('footer');
        }
    }
}
