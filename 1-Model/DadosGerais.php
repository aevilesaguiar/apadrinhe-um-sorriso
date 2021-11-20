<?php

class DadosGerais{
	Private $IDCadastro;
	Private $tipoCadastro;
	Private $nome;
	Private $endereco;
	Private $numero;
	Private $bairro;
	Private $cidade;
	Private $estado;
	Private $redeSocial;
	Private $email;
	Private $telefone;
	Private $cep;	

	public function setIDCadastro($IDCAdastro):void{
			$this->IDCadastro=$IDCasdatro;
	}
	public function getIDCadastro():string{
		return $this->setIDCadastro;
	}
	public function setTipoCadastro($tipoCadastro):void{
		$this->tipoCadastro=$tipoCadastro;
	}
	public function getTipoCadastro(){
		return $this->tipoCadastro;
	}
	public function setNome($nome):void{
		$this->nome=$nome;
	}
	public function getNome():string{
		return $this->nome;
	}
	public function setEndereco($endereco):void{
		$this->endereco=$endereco;
	}

	public function getEndereco():string{
		return $this->endereco;
	}
	public function setNumero($numero):void{
		$this->numero=$numero;
	}
	public function getNumero():string{
		return $this->numero;
	}
	public function setBairro($bairro):void{
		$this->bairro=$bairro;
	}
	public function getBairro():string{
		return $this->bairro;
	}
	public function setCidade($cidade):void{
		$this->cidade=$cidade;
	}
	public function getCidade():string{
		return $this->cidade;
	}
	public function setEstado($estado):void{
		$this->estado=$estado;
	}
	public function getEstado():string{
		return $this->estado;
	}
	public function setRedeSocial($redeSocial):void{
		$this->redeSocial=$redeSocial;
	}
	public function getRedeSocial():string{
		return $this->redeSocial;
	}
	public function setEmail($email):void{
		$this->email=$email;
	}
	public function getEmail():string{
		return $this->email;
	}
	public function setCEP($cep):void{
		$this->cep=$cep;
	}
	public function getCEP():string{
		return $this->cep;
	}
	public function setTelefone($telefone):void{
		$this->telefone=$telefone;
	}
	public function getTelefone():string{
		return $this->telefone;
	}

	public function cadastrarBD():bool{

		require_once 'ConexaoBD.php'; //Conexão com Banco de Dados
		$conexao = new ConexaoBD();
		$inserir = 'INSERT INTO perfil(tipo_cadastro,nivel_acesso,status_cadastro,nome,telefone,rede_social
		e_mail,numendereco,logradouro,cidade,estado,cep,bairro,complemento,fk_user) 
		VALUES("'.$this->tipoCadastro.'","0","EA","'.$this->nome.'","'.$this->telefone.'","'.$this->redeSocial.'","'.$this->email.'","'.$this->email.'","'.$this->numero.'",
		"'.$this->endereco.'","'.$this->cidade.'","'.$this->estado.'",
		"'.$this->cep.'","'.$this->bairro.'","'.$this->complemento.'","'.$this->email.'")';

		if($conexao->query($inserir)){
			return true;
			$conexao->Close();
		}else{
			return false;
		}
	}

	public function atualizarBD():bool{
		
		require_once 'ConexaoBD.php'; //Conexão com Banco de Dados
		$conexao = new ConexaoBD();
		$conexao->open();//Abre conexão com o banco de dados

		$alterar = 'UPDATE SET perfil nome="'.$this->nome.'",telefone="'.$this->telefone.'",rede_social="'.$this->redeSocial.'",e_mail="'.$this->email.'",
		numendereco="'.$this->numero.'",logradouro="'.$this->endereco.'",cidade"'.$this->cidade.'",estado="'.$this->estado.'",cep="'.$this->CEP.'",bairro="'.$this->bairro.'",complemento="'.$this->complemento.'",
		fk_user="'.$this->email.'" WHERE id_cadastro="'.$this->idCadastro.'"';

		if($conexao->query($alterar)){
			
			return true;
		
		}else{
			return false;
		}
		
		$conexao->close(); // Fecha conexao com o banco de dados
	}
	
	public function exibirDadosBD(){
		
		require_once 'ConexaoBD.php'; //Conexão com Banco de Dados
		$conexao = new ConexaoBD();
		$conexao->open();//Abre conexão com o banco de dados
		
		$selecionar = 'SELECT * FROM perfil WHERE id_cadastro="'.$this->idCadastro.'"';
		
		if($r = $conexao->query($selecionar)){
			return $r;
		}else{
			return false;
		}
		
		$conexao->close(); // Fecha conexao com o banco de dados
	}

}

?>