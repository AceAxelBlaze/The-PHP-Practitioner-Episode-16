<?php

$query = require 'core/bootstrap.php';

// $router = new Router;

// require 'routes.php';

$uri = trim($_SERVER['REQUEST_URI'],'/');
echo "this is ".$uri;
var_dump($uri);

require Router::load('routes.php')
	->direct($uri);
