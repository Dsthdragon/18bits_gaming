<?php 

class index_model extends model
{
	function __construct()
	{
		parent::__construct();
	}
	
	function getConfig(){
		$sth = $this->db->prepare("SELECT c.*, v.youtube_id FROM config c LEFT JOIN video v ON v.id = c.bannerVideo");
		$sth->execute();
		return $sth->fetch();
	}

	function getArticles(){
		return $this->db->select("SELECT * FROM post WHERE published = 1 ORDER BY created_at DESC LIMIT 5");
	}

	function getGames(){
		return $this->db->select("SELECT g.*, gi.image FROM game g LEFT JOIN game_image gi ON gi.game = g.id AND gi.main = 1 WHERE g.published = 1 ORDER BY created_at DESC LIMIT 5");
	}

	function getGallery(){
		return $this->db->select("SELECT * FROM image WHERE id NOT IN (SELECT image FROM game_image WHERE game IN (SELECT id FROM game WHERE published = 0) ) ORDER BY created_at DESC LIMIT 5");
	}
}
