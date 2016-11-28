<?php 

	class App
	{

		protected static $kljucevi = [];

		public static function bind($kljuc,$vrednost)
		{
			self::$kljucevi[$kljuc] = $vrednost;
		}

		public static function get($kljuc)
		{
			return self::$kljucevi[$kljuc];
		}

	}

 ?>