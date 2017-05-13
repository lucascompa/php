<?php
	
	require_once "sg/vendor/autoload.php";

	use \Slim\Slim;

	$app = new \Slim\Slim();

	$app->get('/hello/:name', function ($name) {
	    echo "Hello, " . $name;
	});

	$app->run();


?>