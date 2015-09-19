<?php 
Class Route
{
	public $controller;
	public $action;
	
	public function __construct()
	{
		if(isset($_GET['r']))
		{
			$route = $_GET['r'];
			$routeParts = explode('/', $route);
			if(2 == count($routeParts))
			{
				$this->controller = $routeParts[0];
				$this->action = $routeParts[1];
			}
		}else{
				$this->controller = 'news';
				$this->action = 'all';		
		}
	}
}
