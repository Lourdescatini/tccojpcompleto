<?php 
  if (isset($_GET['pgs']) && $_GET['pgs']=='login.php' || user_logged_in()==true ) { ?>
<ul id="dropdown1" class="dropdown-content">
  <li><a href="index.php?&pgs=perfil.php">Visualizar Perfil</a></li>
  <li class="divider"></li>
  <li><a href="index.php?&pgs=controle/sair.php">Sair</a></li>
</ul>
<div class="navbar-fixed">
  <nav class="blue-grey nav-wrapper" role="navigation">
    <div class="nav-wrapper container ">
      <a href="index.php"><i class="material-icons prefix left">arrow_back</i>Voltar</a>
      <a id="logo-container" href="index.php" class="brand-logo center white-text">OJP</a>
      <?php if (user_logged_in()==true) { ?>
      <ul class="right hide-on-med-and-down">
      <!-- Dropdown Trigger --> 
        <li><a class="dropdown-button white-text" href="#!" data-activates="dropdown1">Opções<i class="material-icons right">arrow_drop_down</i></a></li>
      </ul><?php } ?>
   
      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Cadastrar-se</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse top-nav waves-effect waves-light circle hide-on-large-only"><i class="material-icons btn-black">menu</i></a>
    </div>
  </nav>
</div>


 <?php }else{ ?>

  <ul id="dropdown1" class="dropdown-content">
  <li><a href="index.php?&pgs=candidato.php">candidato</a></li>
  <li class="divider"></li>
    <li><a href="index.php?&pgs=empresa.php">empregador</a></li>
  </ul>
	<div class="navbar-fixed">
      
  <nav class="blue-grey nav-wrapper" role="navigation">
    <div class="nav-wrapper  ">
      <a id="logo-container" href="index.php" class="brand-logo  white-text"><img src="image/favicon.ico"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php?&pgs=login.php" class="white-text">Sobre Nós</a></li>
        <li><a href="index.php?&pgs=login.php" class="white-text">Login</a></li>
     
        <!-- Dropdown Trigger --> 
        <li><a class="dropdown-button white-text" href="#!" data-activates="dropdown1">Cadastrar como<i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>
		    

      <a href="#" data-activates="nav-mobile" class="button-collapse top-nav waves-effect waves-light circle hide-on-large-only"><i class="material-icons btn-black">menu</i></a>
      <!--  <div class="nav-wrapper">
      <form>
        <div class="input-field inline">
          <input id="search" type="search" required>
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>
    </div>!-->
    </div>
  </nav>
</div>
<?php } ?>


