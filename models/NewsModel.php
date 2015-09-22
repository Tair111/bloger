<?php 
include __DIR__ . '/AbstractModel.php';

Class NewsModel
	extends AbstractModel
{
	static protected $table = 'bloger';
	static protected $columns = ['title', 'text'];
	
}

//$article = new NewsModel();

//$article = NewsModel::findAll();
//$article->title = '222222222222222222222222';
//$article->text = '666633333333333333333333333';
//$article->delete();
//$article->id;

//var_dump($article);
