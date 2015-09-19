<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Просмотр статьи</title>
</head>
<body>
	<a href="./index.php?r=news/all">Главная</a> |
	<a href="./index.php?r=news/add">Добавлние статьи</a> |
	<a href="./index.php?r=news/editor">Консоль редакора</a> 
	<hr>
	<article>
		<h1><?=$article['title']; ?></h1>
		<br>
		<br>
		<div><?=$article['text']; ?></div>
	</article>

	<hr>
	<footer>	
</body>
</html>