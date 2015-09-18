<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Добавление статьи</title>
</head>
<body>
	<a href="../index.php">Главная</a> |
	<a>Добавить статью</a> |
	<a href="./editor.php">Консоль редактора</a> 
	<hr>
	<br>
	<form action="../add.php" method="post" enctype="multipart/form-date" />
	Название:
	<br>
	<input type="text" size="40" name="title" value="<?=$title; ?>" />
	<br/>
	<br/>
	Содержание:	
	<br/>
	
	 <textarea name="text" cols="40" rows="3"><?=$text; ?></textarea>
	<br/>
	<br>
	<input type="submit" name="add" value="Добавить статью" />
	</form>
	
	<?=$msg ?>
	
	<hr>
	<footer>

</body>
</html>