<?php get_header(); ?>

<div class="container">
	<ul class="nav-page">
		<li><a href="<?php echo get_home_url(); ?>">Home</a></li>
		<li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
		<li><span><?php the_title(); ?></span></li>
	</ul>

	<h2><?php the_field('titulo_page'); ?></h2>
</div>

<section class="section">
	<div class="container">

		<div class="row">
			<div class="col-12">

				<div class="contato-mapa">
					<div class="info-contato">
						<div class="item-info">
							<h2>EUA</h2>
							<div class="det-info">
								<span><i class="fa fa-envelope"></i>contato@zionTurismo.com.br</span>
								<span><i class="fa fa-phone"></i>(11) 3445-999</span>
								<span><i class="fa fa-map-marker"></i>339 E 3900 S #230, Salt Lake City, UT 84107, EUA</span>
							</div>
						</div>

						<div class="item-info">
							<h2>BRASIL</h2>
							<div class="det-info">
								<span><i class="fa fa-envelope"></i>contato@zionTurismo.com.br</span>
								<span><i class="fa fa-phone"></i>(11) 3445-999</span>
								<span><i class="fa fa-mobile"></i>(11) 9999-999</span>
								<span><i class="fa fa-map-marker"></i>Avenida Paulista, 123 sala 32</span>
							</div>
						</div>
					</div>

					<div id="map"></div>
					<script>
						function initMap() {
							var uluru = {lat: 40.6872851, lng: -111.8838732};
							var map = new google.maps.Map(document.getElementById('map'));
							var marker = new google.maps.Marker({
								position: uluru,
								map: map
							});

							var uluru = {lat: -23.5706485, lng: -46.6477426};
							var marker = new google.maps.Marker({
								position: uluru,
								map: map
							});

							var LatLngList = [
								new google.maps.LatLng (40.6872851,-111.8838732), 
								new google.maps.LatLng (-23.5706485,-46.6477426)
							],
							latlngbounds = new google.maps.LatLngBounds();

							LatLngList.forEach(function(latLng){
								latlngbounds.extend(latLng);
							});

							map.setCenter(latlngbounds.getCenter());
							map.fitBounds(latlngbounds); 
						}
					</script>
					<script async defer
					src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCOr_6RQUiMoHquENYdJHr-kDLy8Tzh75Q&callback=initMap"></script>
				</div>

			</div>
		</div>

	</div>
</section>

<section class="section section-contato">
	<div class="container">
		<form action="#" class="form-contato row">
			<fieldset class="col-6">
				<input type="text" name="" id="" class="" placeholder="NOME">
				<span class="icon-form"><i class='fa fa-user'></i></span>
			</fieldset>

			<fieldset class="col-6">
				<input type="text" name="" id="" class="" placeholder="E-MAIL">
				<span class="icon-form"><i class='fa fa-envelope'></i></span>
			</fieldset>

			<fieldset class="col-6">
				<input type="text" name="" id="" class="" placeholder="TELEFONE">
			</fieldset>

			<fieldset class="col-6">
				<input type="text" name="" id="" class="" placeholder="ASSUNTO">
			</fieldset>

			<fieldset class="col-12">
				<div class="place-textarea">
					<textarea name="" id=""></textarea>
					<span class="placeholder">COMENTÁRIOS</span>
					<span class="icon-form"><i class="fa fa-commenting-o" aria-hidden="true"></i></span>
				</div>

				<button type="submmit" class="enviar-mensagem">ENVIAR MENSAGEM</button>
			</fieldset>
		</form>
	</div>
</section>

<?php get_footer(); ?>