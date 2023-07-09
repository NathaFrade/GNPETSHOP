<?php
class TabCliente{
	private $nome;
	private $email;
	private $telefone;
	private $data;
	private $datac;
	private $sen;
	private $endere;
	private $cpf;
	private $cep;
	private $cidade;
	private $bairo;
	private $nume;
	
	
	public function getNome(){
		return $this->nome;
	}
		public function setNome($nome){
			$this->nome=$nome;
		
	}
	
	public function getEmail(){
		return $this->email;
	}
		public function setEmail($email){
			$this->email=$email;
		
	}
	
	public function getTelefone(){
		return $this->telefone;
	}
		public function setTelefone($telefone){
			$this->telefone=$telefone;
		}
		public function getData(){
		return $this -> data;
		}
		public function setData($data){
			$this -> data=$data;
		
	}
	public function getDatac(){
		return $this -> datac;
		}
		public function setDatac($datac){
			$this -> datac = $datac;
		
	}
	public function getSen(){
		return $this->sen;
	}
		public function setSen($sen){
			$this->sen = $sen;
		
	}

	public function getCpf(){
		return $this->cpf;
	}
		public function setCpf($cpf){
			$this->cpf = $cpf;
		
	}
	public function getEndere(){
		return $this->endere;
	}
	public function setEndere($endere){
		$this->endere = $endere;
		
	}
	public function getCep(){
		return $this->cep;
	}
	public function setCep($cep){
		$this->cep = $cep;
		
	}
	public function getCidade(){
		return $this->cidade;
	}
	public function setCidade($cidade){
		$this->cidade = $cidade;
		
	}
	public function getBairro(){
		return $this->bairro;
	}
	public function setBairro($bairro){
		$this->bairro = $bairro;
		
	}
	public function getNume(){
		return $this->nume;
	}
	public function setNume($nume){
		$this->nume = $nume;
		
	}
	
}
?>