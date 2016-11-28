<?php 

	class Proizvod 
	{
		public static function all()
		{
			return App::get('database')->selectAll('products');
		}
	}


 ?>