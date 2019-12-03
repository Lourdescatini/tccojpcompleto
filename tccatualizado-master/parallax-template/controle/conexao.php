<?php
function obterConexao()
{
    $usuario   = "root";
    $senha     = "";
    $nome_banco= "emprego";

    try 
    {
        $conexao = new PDO("mysql:host=localhost;dbname=$nome_banco;charset=utf8", $usuario, $senha,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        return $conexao;
    
    } catch(PDOException $erro){
        echo "Conexao falhou: ". $erro->getMessage();
    }
}