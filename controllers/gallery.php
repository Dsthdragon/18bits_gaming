<?php

class gallery extends controller {

	function __construct(){
		parent::__construct();
	}

	function index($type="image"){
		if($type == "image"){
			$this->view->gallery = $this->model->getGallery();
			$this->view->activePage = "gallery";
            $this->view->render('header');
            $this->view->render('gallery/image');
            $this->view->render('footer');
		} else {
			
			$this->view->videos = $this->model->getVideos();
			$this->view->activePage = "videos";
            $this->view->render('header');
            $this->view->render('gallery/videos');
            $this->view->render('footer');
		}
	}
}