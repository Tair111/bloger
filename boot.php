<?php 
//include_once __DIR__ . '/models/ArticleClass.php';
//include_once __DIR__ . '/classes/Route.php';

function __autoload($class)
{
	$fileName = ['classes', 'functions', 'models'];
	foreach($fileName as $field)
	{
		$classPath = __DIR__ . '/' . $field . '/' . $class. '.php';
		if(is_readable($classPath))
		{
		require_once  $classPath;
		break;
		}
	}
}