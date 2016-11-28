<?php 

	$router->get('','PagesController@index');
	$router->get('login','UsersController@login');
	$router->get('register','UsersController@register');
	$router->get('about','PagesController@about');
	$router->get('contact','PagesController@contact');
	$router->post('register','UsersController@store');
	$router->post('login','UsersController@logovanje');
	$router->get('logout','UsersController@logout');
 ?>