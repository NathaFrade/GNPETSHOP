<?php
require_once "conecta.class.php";
require_once "tabCliente.class.php";
	class DaoTabCliente{
	public function cadastrar(TabCliente $t){
			$sql="insert into cliente (NOME,EMAIL,TEL,DATA_NASC,DATA_REGISTRO,senha,CPF,ENDERECO) 
			values (:nome,:email,:telefone,:datadenascimento,:datacri,:sen,:cpf,:endere);";
			$stmt = Conecta::abrirConexao()->prepare($sql);
			$stmt -> bindValue(':nome',$t->getNome());
			$stmt -> bindValue(':email',$t->getEmail());
			$stmt -> bindValue(':telefone',$t->getTelefone());			
			$stmt -> bindValue(':datadenascimento',$t->getData());
			$stmt -> bindValue(':datacri',$t->getDatac());
			$stmt -> bindValue(':sen',$t->getSen());
			$stmt -> bindValue(':cpf',$t->getCpf());
			$stmt -> bindValue(':endere',$t->getEndere());
			
			 if($stmt->execute()){
				return 1;
			
			}else{
				
			return 0;
			
			}
			
		
		}
		
		public function logar(TabCliente $u){		
			try	{
				$sql = "SELECT * FROM cliente WHERE CPF LIKE :cpf AND senha LIKE :sen;";
				$stmt = Conecta::abrirConexao()->prepare($sql);
				$stmt->bindValue(':cpf', $u->getCpf());
				$stmt->bindValue(':sen', $u->getSen());
				$stmt->execute();
				if ($linha = $stmt->fetch(PDO::FETCH_OBJ)){
					$_SESSION['session_id']=session_id();					
					$_SESSION['nome']= $linha->NOME;
					$_SESSION['cpf']= $linha->CPF;
					$_SESSION['idc']= $linha->idCliente;
					
					
					
					return true;
				}else {
					return false;
				}
			}catch( PDOExcepfunction $e) {
				echo 'Erro ao logar: ' . $e->getMessage();
				return false;
			}
				
		}//fim método logar
		public function listarclientes(){		
			try	{
				//monta o sql que exibe a quantidade de online
				$sql = "select * from cliente; ;";

				//prepara a execução
				$stmt = Conecta::abrirConexao()->prepare($sql);
				
				//executa o sql
				$stmt->execute();
								
				//cria um array
				$resultado = array();

				//monta o array com os registros
				while($linha = $stmt->fetch(PDO::FETCH_OBJ)) {
					$u = new TabCliente();
					$u->setId($linha->idCliente);
					$u->setNome($linha->nome);
					$u->setEmail($linha->email);
					$u->setTelefone($linha->telefone);
					$u->setData($linha->datan);
					$u->setSexo($linha->sexo);
					$u->setDataC($linha->datacriaçao);
					$u->setSen($linha->senha);
					$u->setEndere($linha->endereço);
					$u->setCpf($linha->cpf);
					
					$resultado[] = $u;
				}
				
				//retorna o array com os registros
				return $resultado;
			}catch( PDOExcepfunction $p) {
				echo 'Erro: ' . $p->getMessage();
				return false;
			}catch( Excepfunction $e) {
				echo 'Erro: ' . $e->getMessage();
				return false;
			}	
		}//fim método listar
		
		
public function listar($idc){		
			try	{
				//monta o sql que exibe a quantidade de online
				$sql = "select * from cliente where  idCliente = :idcliente;";
				
				
					
				//prepara a execução
				$stmt = Conecta::abrirConexao()->prepare($sql);
				
				$stmt->bindValue(':idcliente', $idc);
				
				//executa o sql
				$stmt->execute();
								
				//cria um array
				$resultado = array();

				//monta o array com os registros
				while($linha = $stmt->fetch(PDO::FETCH_OBJ)) {
					$u = new TabCliente();
					$u->setId($linha->idCliente);
					$u->setNome($linha->nome);
					$u->setSexo($linha->sexo);
					$u->setEmail($linha->email);
					$u->setTelefone($linha->telefone);
					$u->setCpf($linha->cpf);
					$u->setEndere($linha->endereço);
					$u->setData($linha->datan);
					$u->setDatac($linha->datacriaçao);
					$u->setCep($linha->cep);
					$u->setCidade($linha->cidade);
					$u->setBairro($linha->bairro);
					$u->setNume($linha->numero);
					$resultado[] = $u;
				}
				
				//retorna o array com os registros
				return $resultado;
			}catch( PDOExcepfunction $p) {
				echo 'Erro: ' . $p->getMessage();
				return false;
			}catch( Excepfunction $e) {
				echo 'Erro: ' . $e->getMessage();
				return false;
			}	
		}//fim método listar
		public function alterar(TabCliente $u){		
			try	{
				$sql = "UPDATE cliente SET nome=:nome, email=:email,telefone=:telefone,sexo=:sexo,datan=:data,cep=:cep,cpf=:cpf,numero=:numero,bairro=:bairro,cidade=:cidade,login=:login  WHERE idCliente =:idc;";
				$stmt = Conecta::abrirConexao()->prepare($sql);
				$stmt->bindValue(':idc', $u->getId());
				$stmt->bindValue(':nome', $u->getNome());
				$stmt->bindValue(':email', $u->getEmail());
				$stmt->bindValue(':telefone', $u->getTelefone());
				$stmt->bindValue(':sexo', $u->getSexo());
				$stmt->bindValue(':data', $u->getData());
				$stmt->bindValue(':cep', $u->getCep());
				$stmt->bindValue(':cpf', $u->getCpf());
				$stmt->bindValue(':numero', $u->getNume());
				$stmt->bindValue(':bairro', $u->getBairro());
				$stmt->bindValue(':cidade', $u->getCidade());
				$stmt->bindValue(':login', $u->getLogi());

				$stmt->execute();
				echo $u->getNome();
				return true;
			}catch( PDOExcepfunction $e) {
				echo 'Erro ao alterar: ' . $e->getMessage();
				return false;
			}		
		}//fim método alterar
		public function buscar($nome){			
			try	{
				$nome = "%$nome%";
				
				//monta o sql que exibe a quantidade de online
				$sql = "select * from cliente WHERE nome like :nome;";

				//prepara a execução
				$stmt = Conecta::abrirConexao()->prepare($sql);

				//passando os valores
				$stmt->bindValue(':nome', $nome);

				//executa o sql
				$stmt->execute();
								
				//cria um array
				$resultado = array();

				//monta o array com os registros
				while($linha = $stmt->fetch(PDO::FETCH_OBJ)) {
					$u = new TabCliente();
					$u->setNome($linha->nome);
					$u->setEmail($linha->email);
					$u->setSen($linha->senha);
					$u->setTelefone($linha->telefone);
					$u->setData($linha->datan);
					$u->setDatac($linha->datacriaçao);
					$u->setBairro($linha->bairro);
					$u->setCidade($linha->cidade);
					$u->setCep($linha->cep);
					$u->setCpf($linha->cpf);
					$u->setNume($linha->numero);
					$u->setEndere($linha->endereço);
					
					$resultado[] = $u;
				}			
				//retorna o array com os registros
				return $resultado;
			}catch( PDOExcepfunction $p) {
				echo 'Erro: ' . $p->getMessage();
				return false;
			}catch( Excepfunction $e) {
				echo 'Erro: ' . $e->getMessage();
				return false;
			}
		}//fim método buscar
	

	}	
?>