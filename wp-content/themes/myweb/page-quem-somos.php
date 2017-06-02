<?php get_header(); ?>

	<section class="section">
		<div class="container">

			<div class="row">
				<div class="col-7">
					<p>A ZION TURISMO surgiu para trazer um conceito diferente em Consultoria de Viagens. O grande desafio da ZION é fazer com que seus clientes se sintam seguros e assistidos para que a sua viagem dos sonhos possa ocorrer conforme planejado, imaginado e sonhado.</p>
					<p>Temos como maior preocupação manter a qualidade de nossos serviços e consequentemente, a satisfação de nossos clientes, sustentando de forma sólida nosso crescimento e sucesso profissional.</p>

					<h2 class="missao">MISSÃO</h2>
					<p>A missão da Zion turismo é “Superar as expectativas dos nossos clientes através de sólidas parcerias, colaboradores comprometidos e excelência nos serviços prestados, viabilizando o crescimento sustentável.”.</p>
					<p>Deste modo sustentamos nosso compromisso de fazer da sua viagem inesquecível, trabalhando com excelente desde seu primeiro contato até o seu retorno, viabilizando uma experiência fantástica.</p>

					<h2>VISÃO</h2>
					<p>“Ser reconhecida por seus clientes, fornecedores e colaboradores como a melhor empresa de turismo em inovação, excelência e credibilidade”.</p>

					<h2>VALORES</h2>
					<p>Nosso trabalho é construído diariamente sob os seguinte alicerces: ética, trabalho em equipe, comprometimento, comunicação, transparência, respeito às pessoas, justiça e equidade, qualidade, capacitação profissional, desenvolvimento humano e excelência no atendimento aos clientes.</p>
				</div>

				<div class="col-5">
					<div class="slide owl-carousel owl-theme">
						<?php for($i=1; $i<=5; $i++){ ?>
						<div class="item">
							<span class="num-slide"><?php echo $i; ?> / 5</span>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/slide-quem-somos<?php echo $i; ?>.jpg" alt="">
							<span class="title-slide">Unidade Vila Guilherme <?php echo $i; ?></span>
						</div>
						<?php } ?>
					</div>

					<div class="consulte">
						<span class="tit-consulte">NÃO ACHOU O QUE PROCURAVA?</span>
						<h2>CONSULTE-NOS</h2>
						<span class="tel">+55 (11) 3030-4040</span>
						<span class="email">contato@zionturismo.com.br</span>
					</div>
				</div>
			</div>

		</div>
	</section>

<?php get_footer(); ?>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
<script type="text/javascript">
	var owl = jQuery('.slide');
	owl.owlCarousel({
		margin: 15,
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