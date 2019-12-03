<?php 

	function Login($email,$senha)
	{

		$senhaCod=sha1($senha);
		$conexao = obterConexao();
	        $resultado=[];
	        $consulta = $conexao->query("SELECT `Nome`, `CPF`, `RG`, `Telefone1`, `Telefone2`, `Email`, `DataNasc`, `IdEnd`, `Senha`, `IdTipo`, `Img` FROM `usuario` WHERE Email='$email' AND Senha='$senhaCod' LIMIT 1");
	        $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
	        return $resultado;

	}
 ?>