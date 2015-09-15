<?php 
//header("Content-Type: text/html; charset=utf-8");

include_once __DIR__ . '/models/news.php';

if (isset($_GET['id']))
{
	$id = $_GET['id'];
	delArticle($id);
}

$news = getAll();

include_once __DIR__ . '/view/editor.php';
