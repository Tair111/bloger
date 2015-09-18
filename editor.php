<?php 
//header("Content-Type: text/html; charset=utf-8");

include_once __DIR__ . '/models/ArticleClass.php';

if (isset($_GET['id']))
{
	$id = $_GET['id'];
	$model = new ArticleClass();
	$model->delArticle($id);
}

$model = new ArticleClass();
$news = $model->getAll();

include_once __DIR__ . '/view/editor.php';
