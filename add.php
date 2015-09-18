<?php 
//header("Content-Type: text/html; charset=utf-8");

include_once __DIR__ . '/models/ArticleClass.php';

if(isset($_POST['add']))
{
	if(!empty($_POST['title']) and !empty($_POST['text']))
	{
		$title = $_POST['title'];
		$text = $_POST['text'];
		$model = new ArticleClass();
		$model->setArticle($title, $text);
		$msg = 'Статья добавлена';
	}else{
		$title = $_POST['title'];
		$text = $_POST['text'];
		$msg = 'Заполните все графы';
		}
}

include_once __DIR__ . '/view/add.php';
