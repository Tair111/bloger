<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Главная страница сайта</title>
</head>
<body>
	<a href="./index.php">Главная</a> |
	<a href="./add.php">Добавить статью</a> |
	<a>Консоль редактора</a> 
	<hr>
	<?php foreach ($news as $article ): ?>
	<article>
		<h1><?=$article['title']; ?></h1>
		<a href="./edit.php?id=<?=$article['id'];?>">Редактировать</a> |
		<a href="./editor.php?id=<?=$article['id'];?>">Удалить</a>
	</article>
	<?php endforeach; ?>


</body>
</html>