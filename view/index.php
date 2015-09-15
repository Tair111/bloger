<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Мой блог</title>
</head>
<body>
	<a>Главная</a> |
	<a href="./add.php">Добавить статью</a> |
	<a href="./editor.php">Консоль редактора</a> 
	<hr>
	<?php foreach ($news as $article ): ?>
	<article>
		<h1><?=$article['title']; ?></h1>
		<div><?=mb_substr($article['text'], 0, 12, 'utf-8'). '     ' ?><a href="./article.php?id=<?=$article['id'] ?>"> читать далее...</a></div>
	</article>
	<?php endforeach; ?>


</body>
</html>