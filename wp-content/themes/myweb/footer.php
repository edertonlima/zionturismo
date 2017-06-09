	<section class="section news">
		<div class="container">
			<h2>Newsletter</h2>
			<p>Quer receber no seu email descontos exclusivos? cadastre-se abaixo</p>
			<form action="#">
				<input type="text" name="" id="" class="email-news" placeholder="Digite seu e-mail">
				<button type="submit" class="news-enviar">Enviar</button>
			</form>
		</div>
	</section>

	<footer class="footer">
		<div class="bg-footer">
			<div class="container">
				<div class="row info-footer">
						
					<div class="col-4 col-footer">
						<h2>Sobre:</h2>
						<p><?php the_field('descricao_rodape',5); ?></p>
						<?php if(get_field('cnpj','option')){ ?>
							<br>
							<p>CNPJ: <?php the_field('cnpj','option'); ?></p>
						<?php } ?>
						<?php if(get_field('img_certificado','option')){ ?>
							<img src="<?php the_field('img_certificado','option'); ?>" alt="" class="cadastur">
						<?php } ?>
					</div>

					<div class="col-4">
						<h2>Siga-nos:</h2>
						<div class="fb-page" data-href="https://www.facebook.com/zionturismo/?ref=br_rs" data-tabs="p&#xe1;gina" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/zionturismo/?ref=br_rs" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/zionturismo/?ref=br_rs">Zion Turismo</a></blockquote></div>
					</div>

					<div class="col-4 info-footer-end">
						<h2>Contatos:</h2>

						<?php if(get_field('endereco_br','option')){ ?>
							<span><i class="fa fa-map-marker"></i> <?php the_field('endereco_br','option'); ?></span>
						<?php } ?>

						<?php if(get_field('endereco_en','option')){ ?>
							<span><i class="fa fa-map-marker"></i> <?php the_field('endereco_en','option'); ?></span>
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
					</div>

				</div>
			</div>

			<div class="copy">
				<div class="container">
					<div class="row">
						<div class="col-4">
							<p><i class="fa fa-copyright" aria-hidden="true"></i> Todos os direitos reservados</p>
						</div>
						<div class="col-4">
							<p align="center"><a href="<?php echo get_permalink(get_page_by_path('politica-privacidade')); ?>" title="Politica de privacidade"><?php the_field('titulo_page',get_page_by_path('politica-privacidade')); ?></a></p>
						</div>
						<div class="col-4">
							<p>Desenvolvimento: <a href="#" target="_blank">Finale Agência Digital</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

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
	(function(w,d,u,b){
		s=d.createElement('script');r=(Date.now()/1000|0);s.async=1;s.src=u+'?'+r;
		h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
	})(window,document,'https://cdn.bitrix24.com/b4324261/crm/site_button/loader_2_qpaelr.js');
</script>
