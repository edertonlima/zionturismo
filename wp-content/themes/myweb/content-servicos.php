<article class="section">
	<div class="container">

		<div class="row">
			<div class="col-12">

				<article class="item-servico">
					<?php 
						$imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );
						if($imagem[0]){ ?>
							<img src="<?php echo $imagem[0]; ?>" alt="<?php the_title(); ?>" class="img-servico">
						<?php } 
					?>

					<div class="cont-servico-list <?php if(!$imagem[0]){ echo 'no-image'; } ?>">
						<?php the_field('conteudo_servicos'); ?>
					</div>
				</article>

				<div class="quero-servico">
					<h3>QUERO ESTE SERVIÇO <i class="fa fa-angle-down" aria-hidden="true"></i></h3>
					<form action="#" class="form-solicitacao">
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
</article>