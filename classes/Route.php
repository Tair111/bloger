<?php 
Class Route
{
	public $controller;
	public $action;
	public $route;
	
	public function __construct($route)
	{
		$this->route = $route;
		if(isset($this->route))
		{
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
