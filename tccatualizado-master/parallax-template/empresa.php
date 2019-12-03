<?php 
  require 'controle/cadastrar-uso.php';
 ?>

    <head>
      <style type="text/css">
        body {
            background-image: url("image/cadastro.jpg");
              
        }
        input {
          color: white;
        }
      </style>
    </head>
</div>
          <div class="row container">
        <div class="col s12">
          <div class="card transparent">
            <form class="col s12" method="POST" action="" enctype="multipart/form-data">
            	<h1 class="white-text"><i class="material-icons prefix large white-text">account_circle</i>Empresa</h1>
            <h3 class="white-text">Preencha o formulário abaixo para se  cadastrar</h3>
            <h5 class="white-text">Prencha com os dados do proprietário empresarial</h5>

              <div class="input-field inline col s6">
                <input  id="first_name" name="Nome" type="text" class="validate">
                <label for="first_name" class="white-text">Nome</label>
              </div>
              <div class="input-field col s3">
                <input type="date" name="DataNasc" class="datepicker">
                <label for="last_name" class="white-text">Data de Nascimento</label>
              </div>
              <div class="col s3"></div>
              <div class="input-field col s6">
                <input  id="first_name" name="RG" type="text" class="validate">
                <label for="first_name" class="white-text">RG</label>
              </div>
              <div class="input-field col s3">
                <input  id="first_name" name="CPF" type="text" class="validate">
                <label for="first_name" class="white-text">CPF</label>
              </div>
              <div class="col s3"></div>
              <div class="input-field col s6">
                <input  id="first_name" name="Telefone1" type="text" class="validate">
                <label for="first_name" class="white-text">tefone(1)</label>
              </div>
              <div class="input-field col s3">
                <input  id="first_name" name="Telefone2" type="text" class="validate">
                <label for="first_name" class="white-text">telefone(2)</label>
              </div>
               
              <div class="col s12">
              <h4 class="white-text">Dados da empresas</h4>
              </div>
              <div class="input-field col s6">
                <input  id="first_name" name="NomeEmpresa" type="text" class="validate">
                <label for="first_name" class="white-text">Nome da empresa</label>
              </div>
              <div class="input-field col s6">
          <select name="AreaAtua">
            <option value="" disabled selected>Selecione a Área</option>

            <option value="a">Agropecuária</option> 
            <option value="m">Mecânica</option> 
            <option value="t">T.I</option> 
            <option value="s">Serviços</option> 
            <option value="i">Industrial</option>
            <option value="i">Comercial</option>
          </select>
          </div>
              <div class="input-field col s6">
                <input  id="first_name" name="CNPJ" type="text" class="validate">
                <label for="first_name"  class="white-text">CNPJ</label>
              </div>
              <div class="input-field col s6">
                <input  id="first_name" name="RazaoSoc" type="text" class="validate">
                <label for="first_name" class="white-text">Razão social</label>
              </div>
              <div class="input-field col s6">
                <input  id="first_name" name="Cidade" type="text" class="validate">
                <label for="first_name" class="white-text">Cidade</label>
              </div>
			  <div class="input-field col s6">
			    <select name="Estado">
			      <option value="" disabled selected>Selecione o Estado em que a empresa se localiza</option>

				    <option value="ac">Acre</option> 
				    <option value="al">Alagoas</option> 
				    <option value="am">Amazonas</option> 
				    <option value="ap">Amapá</option> 
				    <option value="ba">Bahia</option> 
				    <option value="ce">Ceará</option> 
				    <option value="df">Distrito Federal</option> 
				    <option value="es">Espírito Santo</option> 
				    <option value="go">Goiás</option> 
				    <option value="ma">Maranhão</option> 
				    <option value="mt">Mato Grosso</option> 
				    <option value="ms">Mato Grosso do Sul</option> 
				    <option value="mg">Minas Gerais</option> 
				    <option value="pa">Pará</option> 
				    <option value="pb">Paraíba</option> 
				    <option value="pr">Paraná</option> 
				    <option value="pe">Pernambuco</option> 
				    <option value="pi">Piauí</option> 
				    <option value="rj">Rio de Janeiro</option> 
				    <option value="rn">Rio Grande do Norte</option> 
				    <option value="ro">Rondônia</option> 
				    <option value="rs">Rio Grande do Sul</option> 
				    <option value="rr">Roraima</option> 
				    <option value="sc">Santa Catarina</option> 
				    <option value="se">Sergipe</option> 
				    <option value="sp">São Paulo</option> 
				    <option value="to">Tocantins</option>
			    </select>
			    <label class="white-text">Estado</label>
			  </div>
              <div class="input-field col s6">
                <input  id="first_name" name="Rua" type="text" class="validate">
                <label for="first_name" class="white-text">Rua</label>
              </div>
              <div class="input-field col s3">
                <input  id="first_name" name="numero" type="text" class="validate">
                <label for="first_name" class="white-text">Número</label>
              </div>
              <div class="input-field col s6">
                <input  id="first_name" name="Bairro" type="text" class="validate">
                <label for="first_name" class="white-text">Bairro</label>
              </div>
			  <div class="input-field col s3">
                <input  id="first_name" name="CEP" type="text" class="validate">
                <label for="first_name" class="white-text">CEP</label>
              </div>
              <div class="input-field col s6">
                <input  id="first_name" name="email" type="text" class="validate">
                <label for="first_name" class="white-text">E-mail</label>
              </div>
              <div class="file-field input-field col s6">
			      <div class="btn">
			        <span class="white-text">Escolha Sua Imagem</span>
			        <input type="file" name="CaminhoMidia">
			      </div>
			      <div class="file-path-wrapper">
			        <input class="file-path validate" type="text">
			      </div>
			    </div>
              <div class="input-field col s6">
                <input  id="first_name" type="text" class="validate">
                <label for="first_name" class="white-text">Login do usuário</label>
              </div>
              <div class="input-field col s3">
                <input  id="first_name" name="senha" type="text" class="validate">
                <label for="first_name" class="white-text">senha</label>
              </div>
              <div class="input-field col s3">
                <input  id="first_name" type="text" class="validate">
                <label for="first_name" class="white-text">Confirme a senha</label>
              </div>
           
            <div class="card-content white-text">
              <span class="card-title">Termos de Uso</span>

              <p class="white-text">Para continuar você precisa aceitar os termos de uso  do aplicativo mesmo nâo tendo cosciência.</p>
              <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />

              <label for="test5" class="white-text">Concordo com os termos de uso do OJP</label>
            </div>
            <div class="card-action">
              <a href="candidato.html"><p>Sou Candidato</p></a>

                    <input type="submit" name="envia1" id="botao" class="btn btn-floating btn-large cyan accent-2 pulse halfway-fab tooltipped" data-tooltip="enviar"><i class="material-icons">send</i>
            </div> </form>
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