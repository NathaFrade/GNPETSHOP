<?php
 require_once "Classe/daotabCliente.class.php";
 require_once "Classe/tabCliente.class.php";
 

 
 $nome = addslashes($_POST['nome']);
 $email = $_POST['email'];
 $telefone = $_POST['telefone'];
 $sexo =$_POST['sexo'];
 $sen =  sha1($_POST['senha']);
 $cpf = $_POST['cpf'];
 $endere = $_POST['endereço'];
 $data = $_POST['datadenascimento'];
 date_default_timezone_set("Brazil/East");
 $datac = date("y-m-d");
 $v=new TabCliente;
 $dao=new DaoTabCliente;
 $v-> setNome($nome);
 $v-> setData($data);
 $v-> setTelefone($telefone);
 $v-> setEmail($email);
 $v-> setDatac ($datac);
 $v-> setSen ($sen);
 $v-> setCpf($cpf);
 $v-> setEndere($endere);
  if ($dao->cadastrar($v)){
	   // header('Location:Index.php');
	  echo "sucesso";
	 }else{
		 echo "erro";
	 }
	 
?>