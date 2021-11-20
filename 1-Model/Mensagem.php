<?php
class Mensagem{

	Private $mensagens= Array(0=>'Bem vindo !',1=>'Salvo com Sucesso');	
	Private $codMensagem;
	
	public function salvar($codMensagem){
		$_SESSION['mensagem']=$this->mensagens[$codMensagem];	
		
	}

	public function exibir(){
		return $_SESSION['mensagem'];
	}

	public function apagar(){
		unset($_SESSION['mensagem']);
	}
}

?>
