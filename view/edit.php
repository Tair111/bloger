<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Добавление статьи</title>
</head>
<body>
	<a href="../index.php">Главная</a> |
	<a href="./add.php">Добавлние статьи</a> |
	<a href="./editor.php">Консоль редакора</a> 
	<hr>
	<br>
	<br>
	<form action="../edit.php" method="post" enctype="multipart/form-date" />
	Статья №
	<input type="text" size="1" name="id" value="<?=$new_article['id']; ?>" />
	<br/>
	<br/>
	Название:
	<br>
	<input type="text" size="40" name="title" value="<?=$new_article['title']; ?>" />
	<br/>
	<br/>
	Содержание:	
	<br/>
	<textarea cols="60" rows="20" name="text" required><?=$new_article['text']; ?>
	</textarea>
	<br>
	<input type="submit" name="edit" value="Изменить статью" />
	<input type="submit" name="no_edit" value="Отменить изменения" />
	<br/>
	<br>
	<?=$msg; ?>
	</form>


</body>
</html>