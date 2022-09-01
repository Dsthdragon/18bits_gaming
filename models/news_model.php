<?php

class news_model extends model {

	function __construct()
	{
		parent::__construct();
	}


	function getArticles($link){
		$category = $this->category($link);
		if(empty($category)){
			return $this->db->select("SELECT p.*, c.title as category_title, c.link as category_link FROM post p LEFT JOIN category c ON c.id = p.category WHERE p.published = 1 ORDER BY p.created_at DESC ");
		} else {
			return $this->db->select("SELECT p.*, c.title as category_title, c.link as category_link FROM post p LEFT JOIN category c ON c.id = p.category WHERE p.published = 1 AND p.category  = :category ORDER BY p.created_at DESC ", array(':category' => $category['id']));
		}
	}

	function category($link){
		$sth = $this->db->prepare("SELECT * FROM category WHERE link = :link");
		$sth->execute(array(":link" => $link));
		return $sth->fetch();
	}

}