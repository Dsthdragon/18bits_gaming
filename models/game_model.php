<?php

/**
 * 
 */
class game_model extends model
{
	
	function __construct()
	{
		# code...
		parent::__construct();
	}

	public function getGame($link){
		$sth = $this->db->prepare("SELECT g.*, gi.image FROM game g LEFT JOIN game_image gi ON gi.game = g.id AND gi.main = 1 WHERE g.published = 1 AND g.link = :link ORDER BY g.created_at DESC");
		$sth->execute(array(":link" => $link));
		return $sth->fetch();
	}

	public function getPlatforms($link){
		return $this->db->select("SELECT gp.*, p.logo, p.title as platform_title, s.title as status_title  FROM game_platform gp LEFT JOIN platform p ON p.id = gp.platform LEFT JOIN status s ON s.id = gp.status LEFT JOIN game g ON g.id = gp.game WHERE g.link = :link", array(':link' => $link));
	}

	public function getStores($link) {
		return $this->db->select("SELECT gs.*, s.logo, s.title as store_title FROM game_store gs LEFT JOIN store s ON s.id = gs.store LEFT JOIN game g ON g.id = gs.game WHERE g.link = :link", array(':link' => $link));
	}

	public function getGenres($link) {

		return $this->db->select("SELECT gg.*, g.title as genre_title FROM game_genre gg LEFT JOIN genre g  ON g.id = gg.genre LEFT JOIN game ga ON ga.id = gg.game WHERE ga.link = :link", array(':link' => $link));
	}

	public function getImages($link) {
		return $this->db->select("SELECT gi.* FROM game_image gi LEFT JOIN game g ON g.id = gi.game WHERE gi.main = 0 AND g.link = :link", array(':link' => $link));
	}

	public function getVideos($link) {
		return $this->db->select("SELECT v.* FROM game_video gv LEFT JOIN video v ON v.id = gv.video LEFT JOIN game g ON g.id = gv.game WHERE g.link = :link", array(':link' => $link));
	}
}