<?php 

include_once __DIR__ . '/../functions/db.php';

function getAll()
{
	return DBQuery("
		SELECT * FROM bloger
		");
}