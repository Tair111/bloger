<?php 
//header("Content-Type: text/html; charset=utf-8");
include_once __DIR__ . '/boot.php';


$model = new ArticleClass();
//$news = $model->getAll();

$view = new View();
$view->news = $model->getAll();
$view->display('../view/index.php');

