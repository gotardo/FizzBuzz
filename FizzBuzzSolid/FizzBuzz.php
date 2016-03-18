<?php

namespace FizzBuzz;
	 	 
require 'autoloader.php';
	 	 	 	


$app = new App(
	new \FizzBuzz\Renderer\Console
);

$app->run($argv[1]);