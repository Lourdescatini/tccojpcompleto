<?php 
	require 'controle/cadastrar-uso.php';
 ?>
<body>
	<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<div class="navbar-fixed">
		<head>
			<style type="text/css">
        		body {
            	background-image: url("image/cadastro.jpg");
        		}
      		</style>
  		</head>	
	</div>
			<div class="row container">
				<div class="col s12">
					<div class="card N/A transparent">
						<form class="col s12" method="POST" action="" enctype="multipart/form-data">
							<h1 class="white-text bold"><i class="material-icons prefix large white-text">account_circle</i>Candidato</h1>
						<h3 class="white-text">Preencha o formulário abaixo para se cadastrar</h3>
							<div class="input-field inline col s6">
								<input  id="first_name" name="Nome" type="text" class="validate white-text">
								<label for="first_name" class="white-text">Nome</label>
							</div> 
							<div class="input-field col s3">
								<input type="date" name="DataNasc" class="datepicker white-text">
								<label for="last_name"  class="white-text">Data de Nascimento</label>
							</div>
							<div class="col s3"></div>
							<div class="input-field col s6">
								<input  id="first_name" name="RG" type="text" class="validate white-text">
								<label for="first_name" class="white-text">RG</label>
							</div>
							<div class="input-field col s3">
								<input  id="first_name" name="CPF" type="text" class="validate white-text">
								<label for="first_name" class="white-text">CPF</label>
							</div>
							<div class="col s3"></div>
							<div class="input-field col s6">
								<input  id="first_name" name="Telefone1" type="text" class="validate white-text">
								<label for="first_name" class="white-text">tefone(1)</label>
							</div>
							<div class="input-field col s3">
								<input  id="first_name" name="Telefone2" type="text" class="validate white-text">
								<label for="first_name" class="white-text">telefone(2)</label>
							</div>
							
							<div class="input-field col s6">
								<input  id="first_name" name="Cidade" type="text" class="validate white-text">
								<label for="first_name" class="white-text">Cidade</label>
							</div>
				<div class="input-field col s6">
					<select name="Estado"  class="white-text">
						<option value=""  class="white-text">Selecione o estado em que mora</option>
								<option value="AC">Acre</option>
								<option value="AL">Alagoas</option>
								<option value="AP">Amapá</option>
								<option value="AM">Amazonas</option>
								<option value="BA">Bahia</option>
								<option value="CE">Ceará</option>
								<option value="DF">Distrito Federal</option>
								<option value="ES">Espírito Santo</option>
								<option value="GO">Goiás</option>
								<option value="MA">Maranhão</option>
								<option value="MT">Mato Grosso</option>
								<option value="MS">Mato Grosso do Sul</option>
								<option value="MG">Minas Gerais</option>
								<option value="PA">Pará</option>
								<option value="PB">Paraíba</option>
								<option value="PR">Paraná</option>
								<option value="PE">Pernambuco</option>
								<option value="PI">Piauí</option>
								<option value="RJ">Rio de Janeiro</option>
								<option value="RN">Rio Grande do Norte</option>
								<option value="RS">Rio Grande do Sul</option>
								<option value="RO">Rondônia</option>
								<option value="RR">Roraima</option>
								<option value="SC">Santa Catarina</option>
								<option value="SP">São Paulo</option>
								<option value="SE">Sergipe</option>
								<option value="TO">Tocantins</option>
								<option value="EX">Estrangeiro</option>
					</select>
					<label>Estado</label>
				</div>
							<div class="input-field col s6">
								<input  id="first_name" name="Rua" type="text" class="validate white-text">
								<label for="first_name" class="white-text">Rua</label>
							</div>
							<div class="input-field col s3">
								<input  id="first_name" name="numero" type="text" class="validate white-text">
								<label for="first_name" class="white-text">Número</label>
							</div>
							<div class="input-field col s6">
								<input  id="first_name" name="Bairro" type="text" class="validate white-text">
								<label for="first_name" class="white-text">Bairro</label>
							</div>
				<div class="input-field col s3">
								<input  id="first_name" name="CEP" type="text" class="validate white-text">
								<label for="first_name" class="white-text">CEP</label>
							</div>
							<div class="input-field col s6">
								<input  id="first_name" name="email" type="text" class="validate white-text">
								<label for="first_name" class="white-text">E-mail</label>
							</div>
							<div class="file-field input-field col s6">
						<div class="btn">
							<span>Escolha Sua Imagem</span>
							<input type="file" name="CaminhoMidia">
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate white-text" type="text">
						</div>
					</div>
							<div class="input-field col s6">
								<input  id="first_name" name="Login" type="email" class="validate white-text">
								<label for="first_name" class="white-text">Corfime o email</label>
							</div>
							<div class="input-field col s3">
								<input  id="first_name" name="senha" type="password" class="validate white-text">
								<label for="first_name" class="white-text">senha</label>
							</div>
							<div class="input-field col s3">
								<input  id="first_name" name="senhaR" type="password" class="validate white-text">
								<label for="first_name" class="white-text">Confirme a senha</label>
							</div>
 					
						
						<div class="card-content white-text">
							<input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
							<label for="filled-in-box">Concordo com os termos de uso</label>
						</div>
						<div class="card-action">
									 <input  type="Submit" id="botao" class="btn btn-floating btn-large cyan accent-2 pulse halfway-fab tooltipped" name="envia"><i class="material-icons">send</i>
						</div>
						</form>
					</div>
				</div>
			</div>
			<script>$('.datepicker').pickadate({
		selectMonths: true, // Creates a dropdown to control month
		selectYears: 15, // Creates a dropdown of 15 years to control year,
		today: 'Today',
		clear: 'Clear',
		close: 'Ok',
		closeOnSelect: false // Close upon selecting a date,
	});
 $(document).ready(function() {
		$('select').material_select();
	});</script>
		</body>
	</html>