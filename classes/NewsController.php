<?php 

Class NewsController
	extends AController 
{

		protected function actionAll()
		{
			$model = new ArticleClass();
			$view = new View();
			$view->news = $model->getAll();
			$view->display('../view/index.php');
		}
		
		protected function actionOne()
		{
			if(isset($_GET['id']))
			$id = $_GET['id'];

			$model = new ArticleClass();
			$view = new View();
			$view->article = $model->getOne($id);
			$view->display('../view/article.php');
		}
		
		protected function actionAdd()
		{	
			header("Content-Type: text/html; charset=utf-8");
			$view = new View();
			$view->msg = 'Заполните все графы';

			if(isset($_POST['add']))
			{
				if(!empty($_POST['title']) and !empty($_POST['text']))
				{
					$view->title = $_POST['title'];
					$view->text = $_POST['text'];
		
					$title = $_POST['title'];
					$text = $_POST['text'];
					$model = new ArticleClass();
					$model->setArticle($title, $text);
					$view->msg = 'Статья добавлена';
				}else{
					$view->title = $_POST['title'];
					$view->text = $_POST['text'];
					$view->msg = 'Заполните все графы';
					}
			}
			$view->display('../view/add.php');
		}
	
		protected function actionEditor()
		{
			if (isset($_GET['id']))
		{
			$id = $_GET['id'];
			$model = new ArticleClass();
			$model->delArticle($id);
		}
		$model = new ArticleClass();
		$view = new View();
		$view->news = $model->getAll();
		$view->display('../view/editor.php');
		}
		
		protected function actionEdit()
		{
				$model = new ArticleClass();
			$view = new View();
		$view->news = $model->getAll();
	
		if (isset($_GET['id']))
		{
			$id = $_GET['id'];
			$view->new_article = $model->getOne($id);
		}

		if(isset($_POST['edit']))
		{
			if(!empty($_POST['title']) and !empty($_POST['text']))
			{
				$title = $_POST['title'];
				$text = $_POST['text'];
				$id = $_POST['id'];
				$model->updateArticle($title, $text, $id);
				$view->msg = 'Статья изменена';
		
				$view->title = $title;
				$view->text = $text;		
				$view->new_article = $model->getOne($id);
			}else{
				$view->new_article = $model->getOne($id);
				$view->msg = 'Заполните все графы';
				}
		}

		if(isset($_POST['no_edit']))
		{
				header("Location: ./editor.php");
		}

		$view->display('../view/edit.php');
		}

}