<?php 
include __DIR__ . '/Storage.php';

Class View
	extends Storage
{
	public function display($template)
	{
		foreach($this as $k=>$v){
			$$k = $v;
		}
		
//	ob_start();
	require __DIR__ . '/' . $template;
//	ob_get_clean();
	}
}

/*
$view = new View();
$view->articles = [
		['title' => '������ �������', 'text' => '����� ������ �������'],
		['title' => '������ �������', 'text' => '����� ������ �������'],
];
$view->display('../view/test.php');
*/
