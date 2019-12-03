<?php 



if(isset($_POST['envia1']) ){
	
	cadastroEnd($_POST);
	$CaminhoMidia= "img/".$_FILES["CaminhoMidia"]["name"];
	$IdTipo=3;
	cadastro($_POST,$CaminhoMidia,$IdTipo);
	cadastroEmp($_POST);
	$caminho_imagem = "img/" . $_FILES["CaminhoMidia"]["name"];
	move_uploaded_file($_FILES ["CaminhoMidia"]["tmp_name"], $caminho_imagem);
	echo "  <script>alert('Sucesso'); window.location = 'funcional.html';</script>  ";
	//require 'val_login.php';
}
elseif (isset($_POST['envia'])) {
	cadastroEnd($_POST);
	$CaminhoMidia= "img/".$_FILES["CaminhoMidia"]["name"];
	$IdTipo=2;
	cadastro($_POST,$CaminhoMidia,$IdTipo);
	$caminho_imagem = "img/" . $_FILES["CaminhoMidia"]["name"];
	move_uploaded_file($_FILES ["CaminhoMidia"]["tmp_name"], $caminho_imagem);
	echo "  <script>alert('Sucesso');</script>  ";
	require 'val_login.php';
}

function cadastroEnd($dados){
    
	    $conexao = obterConexao();
	    extract($dados);
        
        $sql = "INSERT INTO `endereço`( `CEP`, `Rua`, `Cidade`, `Bairro`, `Estado`, `Numero`) VALUES('$CEP', '$Rua','$Cidade','$Bairro','$Estado','$numero')";
        $conexao->exec($sql);

      
}

Function ObterIDEnd($dados){
	
	$conexao = obterConexao();
	extract($dados);
	$consulta = $conexao->query("SELECT IdEnd FROM endereço WHERE CEP='$CEP' AND Numero='$numero' ");
	$IdEnd = $consulta->fetch(PDO::FETCH_ASSOC);
	return $IdEnd['IdEnd']; 

	
} 

function cadastro($dados,$CaminhoMidia,$IdTipo){
    
	    $conexao = obterConexao();
	    extract($dados);
	    $senhaCod= sha1($senha);
	    $IdEnd= ObterIDEnd($dados);
         $sql = "INSERT INTO `usuario`(`Nome`, `CPF`, `RG`, `Telefone1`, `Telefone2`, `Email`, `DataNasc`, `IdEnd`, `Senha`, `IdTipo`, `Img`) VALUES ('$Nome','$CPF','$RG','$Telefone1','$Telefone2','$email','$DataNasc','$IdEnd','$senhaCod','$IdTipo','$CaminhoMidia' )";
        $conexao->exec($sql);       
}

function cadastroEmp($dados){
    
	    $conexao = obterConexao();
	    extract($dados);

         $sql = "INSERT INTO `empresa`(`CNPJ`, `CPF`, `NomeEmpresa`, `AreaAtua`, `RazaoSoc`, `Email`) VALUES( '$CNPJ','$CPF','$NomeEmpresa','$AreaAtua','$RazaoSoc','$email' )";
        $conexao->exec($sql);       
}