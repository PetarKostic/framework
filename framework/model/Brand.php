<?php 

	class Brand
	{
		public static function all()
		{
			return App::get('database')->selectAll('brands');
		}
	}


 ?>