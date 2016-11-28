<?php 

	class QueryBuilder
	{
		protected $pdo;
		public function __construct($pdo)
		{
			$this->pdo = $pdo;
		}

		public function selectAll($table)
		{
			$statement = $this->pdo->prepare("select * from {$table}");
			$statement->execute();
			return $statement->fetchAll(PDO::FETCH_OBJ);
		}

		public function insert($table,$nizPodataka)
		{
			if(!empty($nizPodataka)&& is_array($nizPodataka))
			{
			$sql = sprintf(

				'insert into %s (%s) values (%s)' ,
				$table,
				implode(',' , array_keys($nizPodataka)),
				':' . implode(', :' , array_keys($nizPodataka))
				);
			try
			{
				$statement = $this->pdo->prepare($sql);

				$statement->execute($nizPodataka);
			} catch(Exception $e)
			{
				die($e->getMessage());
			}
			}else
			{
				die('Prosledjen je prazan niz');
			}

		}

		public function logovanje($email,$sifra)
		{
			$statement = $this->pdo->prepare("select * from users where email = '$email'");
			$statement->execute();
			$users = $statement->fetch(PDO::FETCH_OBJ);
			$hashed_password = $users->token;
			if(password_verify($sifra, $hashed_password))
			{
				session_start();
				$_SESSION['id'] = $users->id;
				$_SESSION['user'] = $users->name;
				return true;
			}
		}

	}

 ?>