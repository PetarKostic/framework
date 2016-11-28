<?php 
	require('vendor/autoload.php');
	require('helper.php');
	App::bind('config', require('config.php'));
	App::bind('database',new QueryBuilder(Connection::make(App::get('config')['database'])));

 ?>