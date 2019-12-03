
<head>
  <!-- CSS  -->
        	<style type="text/css">
      		.parallax-container {
     	 		height: 600px;
    		}
        body {
            background-image: url("image/logo.png");
        }
      	</style>
</head>

<div class="row container">
  <div class="card">
    <div class="card-content">
      <div class="row">
        <div class="col s2">
          <img src="<?php echo $_SESSION['usuarioImagem']; ?>" alt="" class="circle responsive-img">
        </div>
        <div class="col s10">
          <h1>  </h1>
        </div>
      </div>
      <hr>
      <h3>Dados Pessoais</h3>
      <h5>Nome: <?php echo  $_SESSION['user_name']; ?></h5>
      <h5>E-mail:<?php echo  $_SESSION['usuarioEmail']; ?></h5>
      <h5>Celular : <?php echo $_SESSION['usuarioTelefone1']; ?></h5>
      <h5>Telefone : <?php echo  $_SESSION['usuarioTelefone2']; ?></h5>
  </div>
 
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script type="text/javascript"></script>




