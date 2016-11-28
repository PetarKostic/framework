<?php require('partials/header.php'); ?>
	
<div class="container-fluid" style="padding-top: 20px;">
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
        <script type="text/javascript">
                var map;
                function initialize() {

                    var latLng = new google.maps.LatLng(44.740889, 20.392849);

                    var mapOptions = {zoom: 12, scrollwheel: false, center: latLng};

                    map = new google.maps.Map(
                            document.getElementById('map'), mapOptions);

                    var marker = new google.maps.Marker({
                        position: latLng, map: map
                    });
                }
                google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBMX9SX9juUGDY51iI3_lF_3yLlSoWHAMM&callback=initMap"async defer></script>        
	<div class="col-md-12 container">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <h3 align="center" style="padding-bottom: 13px;">Kako do nas - <small>vidi mapu ispod.</small></h3> 
               <div id="map" style="height:500px"></div>
        </div>

        <div class="col-md-6" >
            <h3 style="padding-bottom: 10px;" align="center">Budite slobodni i kontaktirajte nas</h3>
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
					 	<label for="">Vase pitanje</label>
						<textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
					 </div>
					 <div class="form-group" style="padding-top: 40px;">
						<input type="submit" name="registracija" class="btn btn-primary btn-lg pull-right" value="Kontaktirajte nas ">
					 </div>
				</form>
        </div>
    </div>
</div>

<?php require('partials/footer.php'); ?>        