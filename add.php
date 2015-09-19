<?php 
include_once __DIR__ . '/boot.php';

$Controller = new NewsController();
$Controller->action('add');
