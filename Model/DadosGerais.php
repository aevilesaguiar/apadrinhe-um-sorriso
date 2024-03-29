﻿<?php

class DadosGerais{
	Private $idCadastro;
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
	Private $complemento;

	public function setIdCadastro($idCadastro):void{
			$this->idCadastro=$idCadastro;
	}
	public function getIdCadastro():string{
		return $this->setidCadastro;
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
	public function setTelefone($telefone):void{
		$this->telefone=$telefone;
	}
	public function getTelefone():string{
		return $this->telefone;
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
	public function setNumero($numero):void{
		$this->numero=$numero;
	}
	public function getNumero():string{
		return $this->numero;
	}
	public function setEndereco($endereco):void{
		$this->endereco=$endereco;
	}
	public function getEndereco():string{
		return $this->endereco;
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
	public function setCep($cep):void{
		$this->cep=$cep;
	}
	public function getCep():string{
		return $this->cep;
	}
	public function setBairro($bairro):void{
		$this->bairro=$bairro;
	}
	public function getBairro():string{
		return $this->bairro;
	}
	public function setComplemento($complemento):void{
		$this->complemento=$complemento;
	}
	public function getComplemento():string{
		return $this->complemento;
	}

	public function validarDados():bool{
		if(strlen($this->nome)>80){
            return false;
        }
        if(strlen($this->telefone)>15){
            return false;
        }
        if(strlen($this->redeSocial)>100){
            return false;
        }
        if(strlen($this->email)>50){
            return false;
        }
        if(strlen($this->numero)>5 || !is_numeric($this->numero)){
            return false;
        }
        if(strlen($this->endereco)>30){
            return false;
        }
        if(strlen($this->cidade)>30){
            return false;
        }
		if(strlen($this->estado)>2){
            return false;
        }
		if(strlen($this->cep)>10){
            return false;
        }
		if(strlen($this->bairro)>30){
            return false;
        }
		if(strlen($this->complemento)>30){
            return false;
		}
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
			$this->idCadastro=$conexao->mysqli_insert_id();// Retorna o id do cadastro
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
		fk_user="'.$this->email.'" WHERE id_cadastro="'.$this->IDCadastro.'"';

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
		
		$selecionar = 'SELECT * FROM perfil WHERE id_cadastro="'.$this->IDCadastro.'"';
		
		if($r = $conexao->query($selecionar)){
			return $r;
		}else{
			return false;
		}
		
		$conexao->close(); // Fecha conexao com o banco de dados
	}

}

?>