<?php
	//iniciar a sessao
	session_cache_expire(10);
	session_name(md5('gnpetshop'.$_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']));
	session_start();

	//se existir a variavel abaixo
    if (isset($_SESSION['session_id'])) {
		
		//se o valor da variavel for diferente do id atual da sessao
		if ($_SESSION['session_id'] != session_id()) {
			
			//redireciona para a página de logoff
			header ("Location:Index.php");
		}		
	}else{
		//se não existir a variavel, redireciona para a página de logoff
		header ("Location:Index.php");
	}

?>
