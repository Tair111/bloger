<?php 
//header("Content-Type: text/html; charset=utf-8");

include_once __DIR__ . '/models/news.php';

$news = getAll();

include_once __DIR__ . '/view/index.php';
