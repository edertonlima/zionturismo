<?php
	global $idioma;
	global $url_idioma;
	$idioma = WPGlobus::Config()->language;
	if($idioma == 'en'){
		$url_idioma = explode('/en',home_url());
	}else{
		if($idioma == 'pt'){
			$url_idioma = explode('/pt',home_url());
		}else{
			$url_idioma = home_url();
		}
	}
?>

	<section class="section news">
		<div class="container">
			<h2>Newsletter</h2>
			<p><?php if($idioma == 'en'){ echo 'Do you want to receive exclusive discounts on your email? Sign Up below'; }else{ echo 'Quer receber no seu email descontos exclusivos? cadastre-se abaixo'; } ?></p>
			<form action="#">
				<input type="text" name="" id="" class="email-news" placeholder="<?php if($idioma == 'en'){ echo 'Type your e-mail
'; }else{ echo 'Digite seu e-mail'; } ?>">
				<button type="submit" class="news-enviar"><?php if($idioma == 'en'){ echo 'Send'; }else{ echo 'Enviar'; } ?></button>
			</form>
		</div>
	</section>

	<footer class="footer">
		<div class="bg-footer">
			<div class="container">
				<div class="row info-footer">
						
					<div class="col-4 col-footer">
						<h2><?php if($idioma == 'en'){ echo 'About:'; }else{ echo 'Sobre:'; } ?></h2>
						<?php if($idioma == 'en'){ ?>
							<p><?php the_field('descricao_rodape_en','option'); ?></p>
							<?php if(get_field('cnpj_en','option')){ ?>
								<br>
								<p>CNPJ: <?php the_field('cnpj_en','option'); ?></p>
							<?php } ?>
							<?php if(get_field('img_certificado_en','option')){ ?>
								<img src="<?php the_field('img_certificado_en','option'); ?>" alt="" class="cadastur">
							<?php } ?>
						<?php }else{ ?>
							<p><?php the_field('descricao_rodape','option'); ?></p>
							<?php if(get_field('cnpj','option')){ ?>
								<br>
								<p>CNPJ: <?php the_field('cnpj','option'); ?></p>
							<?php } ?>
							<?php if(get_field('img_certificado','option')){ ?>
								<img src="<?php the_field('img_certificado','option'); ?>" alt="" class="cadastur">
							<?php } ?>
						<?php } ?>
					</div>

					<div class="col-4">
						<h2><?php if($idioma == 'en'){ echo 'Follow us:'; }else{ echo 'Siga-nos:'; } ?></h2>
						<div class="fb-page" data-href="https://www.facebook.com/zionturismo" data-tabs="p&#xe1;gina" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"></div>
					</div>

					<div class="col-4 info-footer-end">
					<?php if($idioma == 'en'){ ?>
						<h2>Contacts:</h2>

						<?php if(get_field('endereco_en','option')){ ?>
							<span><i class="fa fa-map-marker"></i> <?php the_field('endereco_en','option'); ?></span>
						<?php } ?>

						<?php if(get_field('email_en','option')){ ?>
							<span><i class="fa fa-envelope"></i> <?php the_field('email_en','option'); ?></span>
						<?php } ?>

						<?php if(get_field('skype_en','option')){ ?>
							<span><i class="fa fa-skype"></i> <?php the_field('skype_en','option'); ?></span>
						<?php } ?>

						<?php if(get_field('tel1_en','option')){ ?>
							<span><i class="fa fa-phone"></i> <?php the_field('tel1_en','option'); ?></span>
						<?php } ?>

						<?php if(get_field('tel2_en','option')){ ?>
							<span><i class="fa fa-phone"></i> <?php the_field('tel2_en','option'); ?></span>
						<?php } ?>

						<?php if(get_field('celular_en','option')){ ?>
							<span><i class="fa fa-whatsapp"></i> <?php the_field('celular_en','option'); ?></span>
						<?php } ?>

					<?php }else{ ?>

						<h2>Contatos:</h2>

						<?php if(get_field('endereco_br','option')){ ?>
							<span><i class="fa fa-map-marker"></i> <?php the_field('endereco_br','option'); ?></span>
						<?php } ?>

						<?php if(get_field('email','option')){ ?>
							<span><i class="fa fa-envelope"></i> <?php the_field('email','option'); ?></span>
						<?php } ?>

						<?php if(get_field('skype','option')){ ?>
							<span><i class="fa fa-skype"></i> <?php the_field('skype','option'); ?></span>
						<?php } ?>

						<?php if(get_field('tel1','option')){ ?>
							<span><i class="fa fa-phone"></i> <?php the_field('tel1','option'); ?></span>
						<?php } ?>

						<?php if(get_field('tel2','option')){ ?>
							<span><i class="fa fa-phone"></i> <?php the_field('tel2','option'); ?></span>
						<?php } ?>

						<?php if(get_field('celular','option')){ ?>
							<span><i class="fa fa-whatsapp"></i> <?php the_field('celular','option'); ?></span>
						<?php } ?>

					<?php } ?>
					</div>

				</div>
			</div>

			<div class="copy">
				<div class="container">
					<div class="row">
						<div class="col-4">
							<p><i class="fa fa-copyright" aria-hidden="true"></i> <?php if($idioma == 'en'){ echo 'All rights reserved'; }else{ echo 'Todos os direitos reservados'; } ?></p>
						</div>
						<div class="col-4 links">
							<p align="center"><a href="<?php echo get_permalink(get_page_by_path('politica-privacidade')); ?>" title="Politica de privacidade"><?php the_field('titulo_page',get_page_by_path('politica-privacidade')); ?></a></p>
						</div>
						<div class="col-4 dev">
							<p><?php if($idioma == 'en'){ echo 'Development:'; }else{ echo 'Desenvolvimento:'; } ?> <a href="#" target="_blank">Finale Agência Digital</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>



<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/594180d5e9c6d324a47358d3/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->



</body>
</html>

<div id="fb-root"></div>
<script>
	(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.9&appId=225132384553127";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>

<script data-skip-moving="true">
	/*(function(w,d,u,b){
		s=d.createElement('script');r=(Date.now()/1000|0);s.async=1;s.src=u+'?'+r;
		h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
	})(window,document,'https://cdn.bitrix24.com/b4324261/crm/site_button/loader_2_qpaelr.js');*/
</script>
