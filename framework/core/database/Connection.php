<?php 


	class Connection 
	{

		public static function make($config)
		{
			return new PDO($config['connection'].$config['name'],$config['user'],$config['password'],$config['options']);
		}

	}

 ?>