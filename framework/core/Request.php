<?php 

	class Request
	{
		public static function getUrl()
		{
			return trim(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH),'/');
		}

		public static function getRequestMethod()
		{
			return $_SERVER['REQUEST_METHOD'];
		}
	}


 ?>