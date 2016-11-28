<?php 

	class Router
	{

		protected $routes = 
			[

				'GET'=>[],
				'POST'=>[]
			];

		public function get($key,$controller)
		{
			$this->routes['GET'][$key] = $controller;
		}

		public function post($key,$controller)
		{
			$this->routes['POST'][$key] = $controller;
		}

		public static function create($file)
		{
			$router = new static;
			require($file);
			return $router;
		}

		public function direct($url,$requestMethod)
		{
			if(array_key_exists($url , $this->routes[$requestMethod]))
			{
				return $this->callAction(

						...explode("@", $this->routes[$requestMethod][$url])
					);
			}
			throw new Exception('Nije pronadjena ruta za odredjeni url');
		}

		public function callAction($controller,$action)
		{
			
				if(class_exists($controller))
				{
					$controller = new $controller;
			
			if(method_exists($controller, $action))
			{
				return $controller->$action();
			}
				throw new Exception("Nije pronadjena akcija - {$action} , kontrolera " .  get_class($controller));
			}

				throw new Exception("Ne postoji klasa " . $controller);

		}


	}


 ?>