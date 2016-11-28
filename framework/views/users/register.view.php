<?php require('views/partials/header.php'); ?>

<h2 align="center">Dobro dosli na stranicu za registraciju korisnika</h2><hr>
<div class="container">
	<div class="col-md-6 col-md-offset-3">
	<form action="/register" method="post">
		<div class="form-group">
		<label for="">Vase ime</label>
			<input type="text" name="name" class="form-control" placeholder="Unesite vase ime">
		 </div>
		<div class="form-group">
		<label for="">Vas email</label>
			<input type="email" name="email" class="form-control" placeholder="Unesite vas email">
		 </div>
		 <div class="form-group">
		 	<label for="">Vasa sifra</label>
			<input type="password" name="password" class="form-control" placeholder="Unesite vasu sifru">
		 </div>
		 <div class="form-group">
		 	<label for="">Potvrda sifre</label>
			<input type="password" name="confirm-password" class="form-control" placeholder="Unesite potvrdu sifre">
		 </div>
		 <div class="form-group" style="padding-top: 20px;">
			<input type="submit" name="registracija" class="btn btn-primary pull-right" value="Registracija">
		 </div>
		
	</form>
</div>
</div>