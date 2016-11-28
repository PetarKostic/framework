<?php 

	class Kategorija
	{

		public static function all()
		{
			return App::get('database')->selectAll('categories');
		}
	}


 ?>