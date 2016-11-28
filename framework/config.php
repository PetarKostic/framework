<?php 
	return 
	[
		'database'=>
			[

				'host'=>'localhost',
				'name'=>'ecommerce',
				'user'=>'root',
				'password'=>'',
				'connection'=>'mysql:host=localhost;dbname=',
				'options'=>
					[
						PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
					]
			]
	];
 ?>