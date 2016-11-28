<?php require('views/partials/header.php'); ?>

<h2 align="center">Dobro dosli na login stranicu</h2><hr>
<div class="container">
	<div class="col-md-6 col-md-offset-3">
	<form action="/login" method="post">
		<div class="form-group">
		<label for="">Vas email</label>
			<input type="email" name="email" class="form-control" placeholder="Unesite vas email">
		 </div>
		 <div class="form-group">
		 	<label for="">Vas password</label>
			<input type="password" name="password" class="form-control" placeholder="Unesite vas password">
		 </div>
		 <div class="form-group" style="padding-top: 20px;">
			<input type="submit" name="logovanje" class="btn btn-primary pull-right" value="Logovanje">
		 </div>
	</form>
</div>
</div>