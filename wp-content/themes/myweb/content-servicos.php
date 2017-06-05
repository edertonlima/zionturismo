<article class="section">
	<div class="container">

		<div class="row">
			<div class="col-12">
				
				<p><?php the_field('conteudo_servicos'); ?></p>

				<div class="quero-servico">
					<h3>QUERO ESTE SERVIÇO <i class="fa fa-angle-down" aria-hidden="true"></i></h3>
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
</article>