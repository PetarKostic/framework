<?php require('partials/header.php'); ?>	
<div id="headerWrapper">
    <img src="public/img/river.jpg" alt="" height="350px" width="100%">
</div>
<?php require('partials/navigation.php'); ?>

<div class="col-md-4 col-md-offset-4" style="padding-bottom: 50px;">  
    <form action="/search" method="get" class="form-inline">
        <div class="form-group">
            <div class="">
                <input type="text" name="search" id="search" placeholder="Search">
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-1">
                <input type="submit" class="btn btn-primary" value="Search" name="nadji" style="width: 150px;" onkeyup="posaljiZahtev()">
            </div>
        </div>
    </form>  
</div>

<div class="container " id="sve">
    <div class="content">
	    <div id="products_box" class="col-md-12">
	    	<?php foreach($proizvodi as $pro): ?>
		         <div class="col-md-4  thumbnail" >
		            <a href=""><h2 align="center"><?= $pro->product_title; ?></h2></a>
		            <a href=""><img src="public/img/<?= $pro->product_image; ?>" height="142" width="200" class="img-rounded"></a>
		            <div class="col-md-12">     
		                <div class="col-md-6"> <p class="pull-left">Cena : <?= $pro->product_price . "$"; ?></p></div>
		                <div class="col-md-6 "> <a class="pull-right" href="products/<?= $pro->product_id;?>">detaljnije</a></div>
		            </div>
		        </div>       
	    	<?php endforeach; ?>
	    </div>
    </div> 
</div>






	
