<?php session_start();
  include_once 'controle/controle.php';
  include_once 'controle/controleUsu.php'; 
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>OJP/home</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        	<style type="text/css">
      		.parallax-container {
     	 		height: 465px;
    		}
        #card{
          width: 50% ;
        }
      	</style>

</head>
<body>
	<header>
    <?php 
            include_once 'menu.php';
     ?>
  </header>
    <section>
      <?php ins_dados(filter_input(INPUT_GET, 'pgs')); ?>
    </section>
  <footer class="page-footer teal blue-grey">
    <?php include  'rodape.php'; ?>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script type="text/javascript"></script>
  <script type="text/javascript">
    $( document ).ready(function)
  </script>
  </body>
</html>
