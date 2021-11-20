<?php

require_once 'DadosGerais.php';

class Usuario extends DadosGerais{
	Private $senha;
	
	public function setEmail($email){
		$this->email=$email;
	}
	public function getEmail(){
		$this->email;
		return $this;
		
	}

	public function setSenha($senha){
		$this->senha=$senha;
	
	}
	
	public function getSenha(){
		return $this->senha;
	}
	public function cadastrarBD():bool{
		
		require_once 'ConexaoBD.php';
		
		$conexao = new ConexaoBD();
		$conexao->open();
		
		$cadastra = 'INSERT INTO usuario(usuario,senha) VALUES("'.$this->email.'","'.$this->senha.'")';

		if($conexao->query($cadastra)){

			return true;

		}else{

			return false;

		}
		
		$conexao->close();
		
	}
	public function verificarUsuario(){
		require_once 'ConexaoBD.php';
		
		$conexao = new ConexaoBD();
		$conexao->open();

		$seleciona = 'SELECT * FROM usuario WHERE usuario="'.$this->usuario.'" AND senha="'.$this->senha.'" ';

		if($r=$conexao->query($seleciona)){
			return $r;	
		}else{
			return false;
		}
		
		$conexao->close();
	}

}

?>