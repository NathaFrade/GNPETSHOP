<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>
	<link rel="stylesheet" type="text/css" href="css/estilo.css"/>
<body>
	
		<div class="contenador-form">
			<div class="toggle">
				<span> Criar Conta</span>
			</div>
			
		<div class="formulario">
			<h2>
				Iniciar Sessão
			</h2>
				<form  action="logar.php" method="POST" >
		
					<input type="text" placeholder="usuario" maxlenght="14" name="cpf" required>
		
					<input type="password" placeholder="digite sua senha" name="senha" required>
					
				
		
					<input type="submit" value="Entrar">
				</form>
		</div>
			
			
		<div class="formulario">
			<h2>
				Cadastra-se
			</h2>
				<form  action="cadastro1.php" method="post">
	
							<input type="text" placeholder="digite seu nome" name="nome" required>
		
							<input type="date" placeholder="digite sua data de nascimento" alt="digite sua data" name="datadenascimento" required >
							
							<input type="email" placeholder="digite seu email" name="email" required>
							
							<input type="tel" placeholder="digite seu telefone" maxlenght="11"name="telefone" required>
							
				<div class="select">	
					Sexo: <input  type="radio" name="sexo" value="masculino"/>Masculino  
      					<input type="radio" name="sexo" value="feminino"/> Feminino
				</div>
				
							<input type="password" placeholder="sua senha"name="senha" required>
							<input type="text" placeholder="digite seu cpf" name="cpf" required>
							<input type="text" placeholder="digite seu endeço" name="endereço" required>
							
							<input type="submit" value="registra-se">
				</form>
		</div>
			<div class="reset-password">
				<a href="resetar.php" ><span>esqueceu a senha?</span></a>
			</div>
	</div>
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>