<?php 
include_once __DIR__ . '/models/news.php';

$news = getAll();

include_once __DIR__ . '/view/index.php';
