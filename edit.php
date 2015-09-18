<?php 
//header("Content-Type: text/html; charset=utf-8");

include_once __DIR__ . '/models/ArticleClass.php';

	$model = new ArticleClass();
	
if (isset($_GET['id']))
{
	$id = $_GET['id'];
	
	$new_article = $model->getOne($id);
}

if(isset($_POST['edit']))
{
	if(!empty($_POST['title']) and !empty($_POST['text']))
	{
		$title = $_POST['title'];
		$text = $_POST['text'];
		$id = $_POST['id'];
		$model->updateArticle($title, $text, $id);
		$msg = 'Статья изменена';
		$new_article = $model->getOne($id);
	}else{
		$new_article = $model->getOne($id);
		$msg = 'Заполните все графы';
		}
}

if(isset($_POST['no_edit']))
{
		header("Location: ./editor.php");
}

include_once __DIR__ . '/view/edit.php';
