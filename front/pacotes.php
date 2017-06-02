<?php include "includes/head.php"; ?>

<body class="pacotes">
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

		<h2>PACOTES DE VIAGENS INTERNACIONAIS</h2>
	</div>

	<section class="section pacotes">
		<div class="container">

			<div class="row">
				<div class="col-9">
					<?php for($i=1; $i<=3; $i++){ ?>
					<div class="item-pacote">

							<img src="assets/images/img-list-pacote.jpg" alt="">
							<div class="info-item">
								<h3>Grupo Disney - Setembro 2017</h3>
								<p>Viajar em grupo é sinônimo de segurança e muita diversão. Conte com a experiência de 20 anos.</p>
								<div class="det-item">
									<span class="info-pacote"><i class="fa fa-clock-o" aria-hidden="true"></i> 11 noites</span>
									<span class="info-pacote"><i class="fa fa-globe" aria-hidden="true"></i> Orlando, FL</span>
								</div>
							</div>
							<div class="preco">
								<span class="val-preco">R$ 6.328</span>
								<span class="det-preco">por pessoa</span>
								<a href="det-pacote.php" class="button ver-pacote" title="">VER PACOTE</a>
							</div>
						
					</div>
					<?php } ?>
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
	
	<?php include "includes/footer.php"; ?>
