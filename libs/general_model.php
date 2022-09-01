<?php

class general_model extends model
{
    function __construct()
    {
        parent::__construct();
    }

    function getAuthor($id)
    {	
		$sth = $this->db->prepare("SELECT * FROM admin WHERE id = :id");
		$sth->execute(array(':id' => $id));
		return $sth->fetch();
    }

    public function gameGenres($game){
        return $this->db->select("SELECT * FROM genre WHERE id IN ( SELECT genre FROM game_genre WHERE game = :game)", array(':game' => $game));
    }

    public function gamePlatforms($game){

        return $this->db->select("SELECT * FROM platform WHERE id IN ( SELECT platform FROM game_platform WHERE game  = :game)", array(':game' => $game));
    }
}