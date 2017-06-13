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

				<?php
				// Start the loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				// End the loop.
				endwhile;
				?>

				<div class="form-passagem">
					<h3>QUERO UMA PROPOSTA<i class="fa fa-angle-down" aria-hidden="true"></i></h3>
					<p class="info-prosta">Preencha aqui os detalhes da sua viagem e receba propostas das melhores agências do Brasil.</p>

					<form action="#" class="form-solicitacao">
						<div class="row">
							<fieldset class="col-12">
								<label for="nome">Nome (obrigatório)</label>
								<input type="text" name="nome" id="nome" placeholder="Nome e Sobrenome" class="">
							</fieldset>

							<fieldset class="col-12">
								<label for="email">E-mail (obrigatório)</label>
								<input type="text" name="email" id="email" placeholder="Seu E-mail" class="">
							</fieldset>

							<fieldset class="col-6">
								<label for="telefone">Telefone ou Celular com DDD</label>
								<input type="text" name="telefone" id="telefone" placeholder="DDD + número" class="">
							</fieldset>

							<fieldset class="col-6">
								<label for="cidade">Cidade</label>
								<input type="text" name="cidade" id="cidade" placeholder="Qual a sua cidade?" class="">
							</fieldset>

							<fieldset class="col-12">     
								<label for="" class="">Data da viagem:</label>
								<input type="text" name="data_ida" id="data_ida" placeholder="Qual Data de ida?" class="col-6">
								<input type="text" name="data_volta" id="data_volta" placeholder="Qual Data de volda?" class="col-6">
							</fieldset>

							<fieldset class="col-6">
								<label for="">Saindo de:</label>
								<input type="text" name="" id="" placeholder="Escolher a cidade ou país de origem" class="">
							</fieldset>

							<fieldset class="col-6">
								<label for="">Quem vai com você</label>
								<input type="text" placeholder="0" name="" class="span-input adultos"><span class="label-pessoas">Adultos</span><input type="text" placeholder="0" name="" class="span-input adultos"><span class="label-pessoas">Crianças</span><input type="text" placeholder="0" name="" class="span-input adultos"><span class="label-pessoas">Bebês</span><!--<span class="span-input adultos">0</span><span class="label-pessoas">Adultos</span><span class="span-input criancas">0</span><span class="label-pessoas">Crianças</span><span class="span-input bebes">0</span><span class="label-pessoas">Bebês</span>-->
								<input type="hidden" name="adultos" id="adultos">
								<input type="hidden" name="criancas" id="criancas">
								<input type="hidden" name="bebes" id="bebes">
							</fieldset>

							<fieldset class="col-12">
								<label for="destino">Destino:</label>
								<input type="text" name="destino" placeholder="Escolha a cidade ou país de destino" class="">
							</fieldset>

							<div id="new-destino"></div>

							<fieldset class="col-12">
								<button id="add-destino" type="button"><i class="fa fa-plus-circle" aria-hidden="true"></i> Adicionar mais um destino</button>
							</fieldset>

							<fieldset class="col-6 objetivo">
								<label for="">Objetivo da viagem:</label>
								<select name="" id="">
									<option value="" selected="selected">Turismo</option>
									<option value="">Intercâmbio</option>
									<option value="">Luz de mel</option>
									<option value="">Corporativa</option>
								</select>
							</fieldset>

							<fieldset class="col-6">
								<label for="">Meu orçamento:</label>
								<select name="" id="">
									<option value="" selected="selected">Econômico</option>
									<option value="">Padrão</option>
									<option value="">Luxo</option>
								</select>
							</fieldset>

							<fieldset class="col-6">
								<button type="button" class="enviar">Solicitar orçamento</button>
							</fieldset>
						</div>
					</form>

				</div>

			</div>
		</div>

	</div>
</section>

<?php get_footer(); ?>
<!--
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap-datetimepicker.css" />
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/moment.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap-datetimepicker.min.js"></script>-->
<script type="text/javascript">
	jQuery.noConflict();
	jQuery(function () {
		/*jQuery('#data_ida').datetimepicker({
            viewMode: 'months',
            format: 'DD/MM/YYYY'
		});*/
	});


	function delete_destino(id_elem){
		var elem = '#inputDestino_'+id_elem;
		jQuery(elem).remove();
	}

	var inputDestino = 0;
	jQuery('#add-destino').click(function(){
		jQuery('#new-destino').append('<fieldset class="col-12 add_destino" id="inputDestino_'+inputDestino+'"><label for="inputDestino_'+inputDestino+'">Destino:</label><input type="text" name="inputDestino_'+inputDestino+'" placeholder="Escolha a cidade ou país de destino" class=""><button type="button" onclick="delete_destino('+inputDestino+');" class="close_destino"><i class="fa fa-times-circle" aria-hidden="true"></i></button></fieldset>');
		inputDestino = inputDestino+1;
	});
</script>