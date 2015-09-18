<?php 
include_once __DIR__ . '/models/ArticleClass.php';
function __autoload($class)
{
	include_once __DIR__ . '/classes/' . $class. '.php';
}