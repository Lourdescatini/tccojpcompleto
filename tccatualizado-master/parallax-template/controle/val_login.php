<?php  
      
    
    //Incluindo a conexão com banco de dados   
    include_once("loginf.php");  
    //O campo usuário e senha preenchido entra no if para validar
    
    if((isset($_POST['email'])) && (isset($_POST['senha']))){ 
        

        $resultado=Login($_POST['email'],$_POST['senha']);
        //Encontrado um usuario na tabela usuário com os mesmos dados digitados no formulário
        if($resultado!=false){


            $_SESSION['usuarioId'] = $resultado['CPF'];
            $_SESSION['user_name'] = $resultado['Nome'];
            $_SESSION['access_level'] = $resultado['IdTipo'];
            $_SESSION['usuarioEmail'] = $resultado['Email'];
            $_SESSION['usuarioImagem']= $resultado['Img'];
            $_SESSION['usuarioDataNasc']=$resultado['DataNasc'];
            $_SESSION['senha']=$resultado['Senha'];
            $_SESSION['usuarioTelefone1']=$resultado['Telefone1'];
            $_SESSION['usuarioTelefone2']=$resultado['Telefone2'];
            $_SESSION['usuarioRG']=$resultado['RG'];
            $_SESSION['user_logged_in'] = true;
            if($_SESSION['access_level'] == "2"){
                header("Location: index.php");
            }elseif($_SESSION['access_level'] == "3"){
                header("Location: index.php");
            }else{
                header("Location: index.php");
            }
        //Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        //redireciona o usuario para a página de login
        }else{    
            //Variavel global recebendo a mensagem de erro
            $_SESSION['loginErro'] = "Usuário ou senha Inválido";
            header("Location: index.php?&pgs=login.php");
        }
    //O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
    }else{
        $_SESSION['loginErro'] = "Usuário ou senha inválido";
        header("Location: index.php?&pgs=login.php");
    }

