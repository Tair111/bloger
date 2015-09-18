<?php 
//include_once __DIR__ . '/../functions/db.php';

abstract Class AbstractClass
{
	abstract public function getAll();
	abstract public function getOne($id);
	abstract public function delArticle($id);
	abstract public function setArticle($title, $text);
	abstract public function updateArticle($title, $text, $id);
	
}