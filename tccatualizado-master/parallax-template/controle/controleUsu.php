<?php
	#verifica se o usuário está logado
	function user_logged_in() {

		if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in']) {
			return true;
		} else {
			return false;
		}
	}
	# retorna o nome do usuário
	function user_name(){
		if (isset($_SESSION['user_name']))
			return $_SESSION['user_name'];
		
	}
	#retorna o id do usuario
	function id_usuario(){

		if (isset($_SESSION['usuarioId'])) 
			return $_SESSION['usuarioId'];
			
	}
	# retorna o nivel de acesso do usuário
	function access_level(){
		return $_SESSION['access_level'];
	}
	# verifica se o usuario tem acesso a pagina
	function page_access($required_level){
		# caso não esteja é redirecionado
		if (!user_logged_in()) {
			include_once 'javascript/ir_login.php';
			exit();
		} # caso não esteja e não tenha acesso apresenta msg 
		elseif(access_level() < $required_level){ 
			include_once 'templat/sem_acess.php';
			exit();
		}
	}

	function tipUser(){
	if (access_level()==NIVEL_USUARIO) {
		echo "Usuario Comum";
	}elseif(access_level()==NIVEL_COLABORADOR){
		echo "Colaborador";
	}else{
		echo "Administrador";
	}
						}