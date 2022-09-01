<?php

class gallery_model extends model {

	function __construct()
	{
		parent::__construct();
	}


	function getGallery(){
		return $this->db->select("SELECT * FROM image WHERE id NOT IN (SELECT image FROM game_image WHERE game IN (SELECT id FROM game WHERE published = 0) ) ORDER BY created_at DESC");
	}

	function getVideos(){
		return $this->db->select("SELECT * FROM video WHERE id NOT IN (SELECT video FROM game_video WHERE game IN (SELECT id FROM game WHERE published = 0) ) ORDER BY created_at DESC");
	}
}