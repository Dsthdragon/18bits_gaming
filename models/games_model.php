<?php

/**
 * 
 */
class games_model extends model
{
	
	function __construct()
	{
		# code...
		parent::__construct();
	}

	public function getGames(){
		return $this->db->select("SELECT g.*, gi.image FROM game g LEFT JOIN game_image gi ON gi.game = g.id AND gi.main = 1 WHERE g.published = 1 ORDER BY g.created_at DESC");
	}

	public function genres(){
		return $this->db->select("SELECT * FROM genre WHERE id IN ( SELECT genre FROM game_genre WHERE game IN (SELECT id FROM game WHERE published = 1))");
	}

	public function platforms(){

		return $this->db->select("SELECT * FROM platform WHERE id IN ( SELECT platform FROM game_platform WHERE game IN (SELECT id FROM game WHERE published = 1))");
	}
}