<?php  
    session_start();    
    unset(
            $_SESSION['usuarioId'], 
            $_SESSION['user_name'],
            $_SESSION['access_level'], 
            $_SESSION['usuarioEmail'],
            $_SESSION['usuarioImagem'],
            $_SESSION['usuarioSobrenome'],
            $_SESSION['usuarioDataNasc'],
            $_SESSION['senha'],
            $_SESSION['usuarioTelefone1'],
            $_SESSION['usuarioTelefone2'],
            $_SESSION['usuarioRG'],
            $_SESSION['user_logged_in']
    );    

    session_destroy();
    //session_start();    

    //$_SESSION['deslogado'] = "Deslogado com sucesso";
    
    //redirecionar o usuario para a página de login
    header("Location: index.php?&pgs=login.php");