<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Мой блог</title>
</head>
<body>
	<a>Главная</a> |
	<a href="./index.php?r=news/add">Добавить статью</a> |
	<a href="./index.php?r=news/editor">Консоль редактора</a> 
	<hr>
	<?php foreach ($news as $article ): ?>
	<article>
		<h1><?=$article['title']; ?></h1>
		<div><?=mb_substr($article['text'], 0, 12, 'utf-8'). '     ' ?><a href="./index.php?r=news/one&id=<?=$article['id'] ?>"> читать далее...</a></div>
	</article>
	<?php endforeach; ?>
	
	<hr>
	<footer>
</body>
</html>