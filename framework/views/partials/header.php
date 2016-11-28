<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pocetna strana</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style>
		body
		{
			padding-top: 50px;
		}
	</style>
</head>
<body>	
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<ul class="nav navbar-nav">
			<li><a href="./">Home</a></li>
			<li><a href="/about">About</a></li>
			<li><a href="/contact">Contact</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<?php if(!isset($_SESSION['id'])): ?>
				<li><a href="/login">Login</a></li>
				<li><a href="/register" style="margin-right: 20px;">Register</a></li>
			<?php else: ?>
				<li><a href="" >Trenutni korisnik: <?= $_SESSION['user']; ?></a></li>
				<li><a href="/logout" style="margin-right: 20px;">Logout</a></li>
			<?php endif; ?>
		</ul>
	</nav>