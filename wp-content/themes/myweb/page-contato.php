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

						<?php if(get_field('endereco_en','option')){ ?>
							<div class="item-info">
								<h2>EUA</h2>
								<div class="det-info">
									<?php if(get_field('email_en','option')){ ?>
										<span><i class="fa fa-envelope"></i><?php the_field('email_en','option'); ?></span>
									<?php } ?>

									<?php if(get_field('tel1_en','option')){ ?>
										<span><i class="fa fa-phone"></i><?php the_field('tel1_en','option'); ?></span>
									<?php } ?>

									<?php if(get_field('tel2_en','option')){ ?>
										<span><i class="fa fa-phone"></i><?php the_field('tel2_en','option'); ?></span>
									<?php } ?>

									<?php if(get_field('celular_en','option')){ ?>
										<span><i class="fa fa-mobile"></i><?php the_field('celular_en','option'); ?></span>
									<?php } ?>

									<?php if(get_field('endereco_en','option')){ ?>
										<span><i class="fa fa-map-marker"></i><?php the_field('endereco_en','option'); ?></span>
									<?php } ?>
								</div>
							</div>
						<?php } ?>

						<?php if(get_field('endereco_br','option')){ ?>
							<div class="item-info">
								<h2>BRASIL</h2>
								<div class="det-info">
									<?php if(get_field('email','option')){ ?>
										<span><i class="fa fa-envelope"></i><?php the_field('email','option'); ?></span>
									<?php } ?>

									<?php if(get_field('tel1','option')){ ?>
										<span><i class="fa fa-phone"></i><?php the_field('tel1','option'); ?></span>
									<?php } ?>

									<?php if(get_field('tel2','option')){ ?>
										<span><i class="fa fa-phone"></i><?php the_field('tel2','option'); ?></span>
									<?php } ?>

									<?php if(get_field('celular','option')){ ?>
										<span><i class="fa fa-mobile"></i><?php the_field('celular','option'); ?></span>
									<?php } ?>

									<?php if(get_field('endereco_br','option')){ ?>
										<span><i class="fa fa-map-marker"></i><?php the_field('endereco_br','option'); ?></span>
									<?php } ?>
								</div>
							</div>
						<?php } ?>
					</div>

					<div id="map"></div>
					<script>
						function initMap() {

							var map = new google.maps.Map(document.getElementById('map'));

							<?php if((get_field('endereco_LAT_BR','option')) and (get_field('endereco_LON_BR','option'))){ $end_br = true; ?>
								var uluru = {lat: <?php the_field('endereco_LAT_BR','option'); ?>, lng: <?php the_field('endereco_LON_BR','option'); ?>};
								var marker = new google.maps.Marker({
									position: uluru,
									map: map
								});

							<?php } ?>

							<?php if((get_field('endereco_LAT_EN','option')) and (get_field('endereco_LON_EN','option'))){ $end_en = true; ?>
								var uluru = {lat: <?php the_field('endereco_LAT_EN','option'); ?>, lng: <?php the_field('endereco_LON_EN','option'); ?>};
								var marker = new google.maps.Marker({
									position: uluru,
									map: map
								});
							<?php } ?>

							<?php if(($end_br) and ($end_en)){ ?>
								var LatLngList = [
									new google.maps.LatLng (<?php the_field('endereco_LAT_BR','option'); ?>,<?php the_field('endereco_LON_BR','option'); ?>), 
									new google.maps.LatLng (<?php the_field('endereco_LAT_EN','option'); ?>,<?php the_field('endereco_LON_EN','option'); ?>)
								];
							<?php }else{ ?>
								var LatLngList = [
									new google.maps.LatLng (<?php the_field('endereco_LAT_BR','option'); ?>,<?php the_field('endereco_LON_BR','option'); ?>)
								];
							<?php } ?>
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