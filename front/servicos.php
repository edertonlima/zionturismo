<?php include "includes/head.php"; ?>

<body class="servicos">
	<header class="header">
		<?php include "includes/header.php"; ?>
	</header>

	<div class="container">
		<ul class="nav-page">
			<li><a href="index.html">Home</a></li>
			<li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
			<li><a href="servicos.php">SERVIÇOS</a></li>
			<li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
			<li><span>ASSESSORIA CONSULAR</span></li>
		</ul>

		<h2>ASSESSORIA CONSULAR</h2>
	</div>

	<section class="section">
		<div class="container">

			<div class="row">
				<div class="col-12">
					
					<p>Para a aquisição dos serviços de passaporte e visto será necessário o preenchimento de um questionário com dados pessoais e números de documentos. Este questionário será mantido em posse da Magic Blue Viagens e Turismo LTDA de maneira confidencial até a finalização dos serviços. Após o término dos serviços, este material será destruído.</p>

					<p>A Magic Blue não se responsabiliza por informações incorretas, falsas ou incompletas, as quais podem causar recusa do pedido de visto ou ainda não atendimento pessoal do requerente no dia agendado para entrevista, bem como não garante a aprovação do passaporte e/ou visto americano em nenhuma hipótese. Nosso serviço é de preenchimento, agendamento e orientação.</p>

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
	</section>
	
	<?php include "includes/footer.php"; ?>
