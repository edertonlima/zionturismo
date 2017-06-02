<?php include "includes/head.php"; ?>

<body class="pacotes det-pacote">
	<header class="header">
		<?php include "includes/header.php"; ?>
	</header>

	<div class="container">
		<ul class="nav-page">
			<li><a href="#">Home</a></li>
			<li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
			<li><a href="pacotes.php">PACOTES</a></li>
			<li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
			<li><span>PACOTES DE VIAGENS INTERNACIONAIS</span></li>
		</ul>

		<h2>GRUPO DISNEY MAGICA - SETEMBRO 2017</h2>
	</div>

	<section class="section pacotes">
		<div class="container">

			<div class="row">
				<div class="col-9">
					<div class="slide-produto owl-carousel owl-theme">
						<?php for($i=1; $i<=3; $i++){ ?>
						<div class="item">
							<img src="assets/images/slide-produto<?php echo $i; ?>.jpg" alt="">
						</div>
						<?php } ?>
					</div>

					<div class="det-item">
						<span class="info-pacote">
							<i class="fa fa-clock-o" aria-hidden="true"></i>
							<div class="tit-info">
								11 noites <span class="complemento">Duração</span>
							</div>
						</span>

						<span class="info-pacote">
							<i class="fa fa-globe" aria-hidden="true"></i>
							<div class="tit-info">
								Orlando, FL <span class="complemento">Localização</span>
							</div>
						</span>

						<span class="info-pacote">
							<i class="fa fa-credit-card" aria-hidden="true"></i>
							<div class="tit-info">
								até 10x sem juros <span class="complemento">Parcelamento</span>
							</div>
						</span>

						<span class="info-pacote">
							<i class="fa fa-calendar-check-o" aria-hidden="true"></i>
							<div class="tit-info">
								02 de Setembro <span class="complemento">Datas</span>
							</div>
						</span>
					</div>

					<p>Confira os detalhes da excursão para Disney Orlando abaixo e solicite cotação da sua cidade ou em diferentes datas:</p>

					<ul class="info-tecnico">
						<li class="item">	
							<span class="tit-info">AÉREO</span>
							<ul>
								<li>Consulte valores pela saída de sua cidade. Fale com uma de nossas consultoras</li>
							</ul>
						</li>
						<li class="item">
							<span class="tit-info">INCLUSO</span>
							<ul class="ico">
								<li><i class="fa fa-check" aria-hidden="true"></i> 11 noites de hospedagem no Disney's All Star Movies Resort</li>
								<li><i class="fa fa-check" aria-hidden="true"></i> 4 dias de Ingresso Disney World (Magic Kingdom, EPCOT, Hollywood Studios e Animal Kingdom)</li>
							</ul>
						</li>
						<li class="item">
							<span class="tit-info">NÃO INCLUSO</span>
							<ul class="ico">
								<li><i class="fa fa-close" aria-hidden="true"></i> Passagem aérea (consulte saída de sua cidade com nossas consultoras)</li>
								<li><i class="fa fa-close" aria-hidden="true"></i> Taxas de embarque</li>
								<li><i class="fa fa-close" aria-hidden="true"></i> Despesas pessoais</li>
							</ul>
						</li>
						<li class="item">	
							<span class="tit-info">ROTEIRO</span>
							<ul class="roteiro">
								<li><strong>DIA 03/09 - EMBARQUE E CHEGADA</strong> E finalmente chegou o dia do nosso embarque! Orlando nos espera! O embarque será no dia 02/09 a noite ou no dia 03/09 pela manhã, direto de sua capital para a cidade dos sonhos. Boa viagem! Chegada e acomodação no hotel, jantar no hotel. Acompanhamento desde o Brasil sob coordenação de Joice Ferreira e sua equipe.</li>
								<li><strong>DIA 03/09 - EMBARQUE E CHEGADA</strong> E finalmente chegou o dia do nosso embarque! Orlando nos espera! O embarque será no dia 02/09 a noite ou no dia 03/09 pela manhã, direto de sua capital para a cidade dos sonhos. Boa viagem! Chegada e acomodação no hotel, jantar no hotel. Acompanhamento desde o Brasil sob coordenação de Joice Ferreira e sua equipe.</li>
							</ul>
						</li>
					</ul>
				</div>

				<div class="col-3">					
					<div class="list-produtos">
						<h3>PRODUTOS</h3>
						<div class="box-list-produtos">
							<?php for($i=1; $i<=4; $i++){ ?>
							<div class="item-prod">
								<img src="assets/images/img-list-pacote.jpg" alt="">
								<div class="info-prod">
									<h4>Ingressos Sea World</h4>
									<a href="#">Visualizar</a>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>

	<section class="section">
		<div class="container">

			<div class="row">
				<div class="col-12">

					<div class="quero-servico">
						<h3>EU QUERO ESTE PACOTE <i class="fa fa-angle-down" aria-hidden="true"></i></h3>
						<form action="#" class="form-servico">
							<fieldset>
								<label for="nome">Nome (obrigatório)</label>
								<input type="text" name="nome" id="nome" placeholder="Nome e Sobrenome" class="">
							</fieldset>

							<fieldset>
								<label for="email">E-mail (obrigatório)</label>
								<input type="text" name="email" id="email" placeholder="E-mail" class="">
							</fieldset>

							<fieldset>
								<label for="telefone">Telefone ou Celular com DDD</label>
								<input type="text" name="telefone" id="telefone" placeholder="DDD + número" class="">
							</fieldset>

							<fieldset>
								<label for="preferencia">Como prefere ser contactado por nossa equipe?</label>
								<label for="" class="radio">
									<input type="radio" name="preferencia"> E-mail
								</label>
								<label for="" class="radio" name="preferencia">
									<input type="radio"> Telefone
								</label>
								<label for="" class="radio" name="preferencia">
									<input type="radio"> WhatsApp
								</label>
							</fieldset>

							<fieldset>
								<label for="qtd_passageiros">Quantidade de passageiros</label>
								<input type="text" name="qtd_passageiros" id="qtd_passageiros" placeholder="Digite a quantidade de pessoas" class="">
							</fieldset>

							<fieldset>
								<label for="mensagem">Sua mensagem</label>
								<textarea name="mensagem" id="mensagem" class=""></textarea>
							</fieldset>

							<fieldset>
								<button class="enviar">Enviar</button>
							</fieldset>
						</form>
					</div>

				</div>
			</div>

		</div>
	</section>
	
	<?php include "includes/footer.php"; ?>

	<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
	<script type="text/javascript">
		jQuery.noConflict();
		var owl = jQuery('.slide-produto');
		owl.owlCarousel({
			margin: 0,
			loop: false,
			nav: true,
			navigation: true,
			navText: [
				'<i class="fa fa-angle-left" aria-hidden="true"></i>',
				'<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			lazyLoad: true,
			responsive: {
				0: {
					items: 1
				}
			}
		})
	</script>
