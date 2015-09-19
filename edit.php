<?php 
//header("Content-Type: text/html; charset=utf-8");

include_once __DIR__ . '/boot.php';


$Controller = new NewsController();
$Controller->action('edit');
