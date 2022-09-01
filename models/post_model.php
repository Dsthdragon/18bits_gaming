<?php

class post_model extends model {

	function __construct(){
		parent::__construct();
	}


	function getArticle($link)
	{
		$sth = $this->db->prepare("SELECT * FROM post WHERE link = :link");
		$sth->execute(array(':link' => $link));
		return $sth->fetch();
	}

	function getAuthor($id)
	{
		$sth = $this->db->prepare("SELECT * FROM admin WHERE id = :id");
		$sth->execute(array(':id' => $id));
		return $sth->fetch();
	}

	function getTags($id)
	{
		return $this->db->select("SELECT * FROM tag WHERE id IN (SELECT tag FROM post_tag WHERE post = :post)", array(':post' => $id));
	}

	function getOtherPost($id)
	{
		return $this->db->select("SELECT * FROM POST WHERE id != :id ORDER BY created_at DESC LIMIT 5", array(':id' => $id));
	}
}