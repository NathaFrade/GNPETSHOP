<?php
	//iniciar a sessao
	session_cache_expire(10);
	session_name(md5('gnpetshop'.$_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']));
	session_start();

	//se existir a variavel abaixo
    session_destroy();
		
	//redireciona para a página principal
	header ("Location:entrar.php");
?>
