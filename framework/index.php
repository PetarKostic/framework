<?php 
	require('core/bootstrap.php');
	$router = Router::create('routes.php');
	$router->direct(Request::getUrl(),Request::getRequestMethod());

 ?>