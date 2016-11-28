<?php 

	class UsersController
	{

		public function login()
		{
			return view('users/login');
		}

		public function register()
		{
			return view('users/register');
		}

		public function store()
		{
			if(isset($_POST['registracija'],$_POST['name'],$_POST['email'],$_POST['password'],$_POST['confirm-password']))
			{
				if($_POST['password'] === $_POST['confirm-password']){
					App::get('database')->insert('users',
				
				[
					'name' => $_POST['name'],
					'email' => $_POST['email'],
					'password'=> $_POST['password'],
					'token' =>  password_hash($_POST['password'], PASSWORD_DEFAULT),
					'created_at'=> dateTimeToString(new DateTime()),
					'updated_at'=> dateTimeToString(new DateTime())
				]);
					header('location: /login');

				}
			}

		}

		public function logovanje()
		{
			if(App::get('database')->logovanje($_POST['email'],$_POST['password']))
			{
				header('location: /');
			}
			else
			{
				header('location: /login');
			}
		}

		public function logout()
		{
			session_start();
			unset($_SESSION['user']);
			unset($_SESSION['id']);
			session_destroy();
			header("location: /");
		}


	}


 ?>