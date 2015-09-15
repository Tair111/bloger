<?php 

include_once __DIR__ . '/../functions/db.php';

function getAll()
{
	return  DBQueryAll("
		SELECT * FROM bloger
		");
}

function getOne($id)
{
	return DBQueryOne("
		SELECT * FROM bloger WHERE id = '$id'
		");
}

function delArticle($id)
{
	DBQuery("
		DELETE FROM bloger WHERE id = '$id'
	");
}

function setArticle($title, $text)
{
	//$date = date('Y-m-d H:i:s');
	DBQuery("
		INSERT INTO bloger (title, text) VALUES ('$title', '$text');
	");
}

function updateArticle($title, $text, $id)
{
	DBQuery("
		UPDATE bloger SET title='$title', text='$text' WHERE id='$id';
	");
}

/* Пример вставки статьи + время
function send_message($name, $text)
{
	$name = trim($name);
	$text = trim($text);

	if ($name == "" || $text == "")
		return;

	$dt = date('Y-m-d H:i:s');
	
	$sql = "INSERT INTO messages (dt, name, text) 
			VALUES ('$dt', '$name', '$text')";
		   
	$result = mysql_query($sql);
									
	if (!$result)
		die(mysql_error());		   
}
*/