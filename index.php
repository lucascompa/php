<?php
	
	function __autoload($class)
	{
		//echo $class;
		require_once("sg/vendor/instar_funcoes/".$class.".php");
		echo "OI";
	}

	$lucas = new Lucas();
	$lucas->falarBem();

	echo $lucas;
	/*require_once "sg/vendor/autoload.php";

	use \Slim\Slim;

	$app = new \Slim\Slim();

	$app->get('/hello/:name', function ($name) {
	    echo "Hello, " . $name;
	});

	$app->run();
*/

?>