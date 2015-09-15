<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Просмотр статьи</title>
</head>
<body>
	<a href="./index.php">Главная</a> |
	<a href="./add.php">Добавлние статьи</a> |
	<a href="./editor.php">Консоль редакора</a> 
	<hr>
	<article>
		<h1><?=$article['title']; ?></h1>
		<br>
		<br>
		<div><?=$article['text']; ?></div>
	</article>
	
</body>
</html>