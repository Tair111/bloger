<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Главная страница сайта</title>
</head>
<body>
	<a href="./index.php?r=news/all">Главная</a> |
	<a href="./index.php?r=news/add">Добавить статью</a> |
	<a>Консоль редактора</a> 
	<hr>
	<?php foreach ($news as $article ): ?>
	<article>
		<h1><?=$article['title']; ?></h1>
		<a href="./index.php?r=news/edit&id=<?=$article['id'];?>">Редактировать</a> |
		<a href="./index.php?r=news/editor&id=<?=$article['id'];?>">Удалить</a>
	</article>
	<?php endforeach; ?>

	<hr>
	<footer>
</body>
</html>