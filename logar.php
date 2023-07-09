<?php
	//inicia a sessão
	session_cache_expire(10);
	session_name(md5('gnpetshop'.$_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']));
	session_start();

	//chama os arquivos 
 	require_once "classe/tabCliente.class.php"; 
 	require_once "classe/daotabCliente.class.php"; 
	
	//pega os dados do formulário
	$cpf = $_POST["cpf"];
	$sen =  sha1($_POST["senha"]);

	//instancia objeto da classe
	$u = new TabCliente();
	$dao = new DaoTabCliente();
	
	//envia os dados para a classe model
	$u->setCpf($cpf);
	$u->setSen($sen);

	//envia o objeto do model para o método da classe dao
	if ($dao->logar($u)){			
		//redireciona para a área restrita
		 header('Location:Index.php');
	}else{
		echo "<div><font color=red>Login e/ou senha incorretos</font></div>";	
	}

?>
