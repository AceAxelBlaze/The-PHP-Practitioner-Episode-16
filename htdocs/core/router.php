<?php

/**
* router class
*/
class Router 
{
	protected $routes = [];
	public static function load($filename)
	{
		$router = new static;
		require $filename;
		return $router;
	}

	public function define($routes)
	{
		echo 'i am from router ';
		$this->routes = $routes;
	}

	public function direct($uri){
		if(array_key_exists($uri,$this->routes)){
			var_dump($uri);
			return $this->routes[$uri];		
		}
		throw new Exception('no route defined for this url');
		
	}
}