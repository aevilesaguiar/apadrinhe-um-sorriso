<?php
	
require_once 'DadosGerais.php';

class PessoaFisica extends DadosGerais{
	Private $cpf;
	Private $rg;
	Private $dataNascimento; //Não disponivel como atributo no banco de dados no momento
	Private $sexo; // Não disponivel como atributo no banco de dados no momento

	public function cadastrarBD():bool{
		require_once 'ConexaoBD.php';
		
		$conexao = new ConexaoBD();
		$conexao->open();
		
		$inserir = 'INSERT INTO dados_pf(cpf,fk_id_cadastro) VALUES("'.$this->cpf.'","'.$this->rg.'","'.$this->IDCadastro.'")';
		
		if($conexao->query($inserir)){
			return true;
			$conexao->close();
		}else{
			return false;
		}
	}
	
	public function exibirDados(){
		
		require_once 'ConexaoBD.php';
		
		$conexao = new ConexaoBD();
		$conexao->open();
		
		$selecionar = 'SELECT * FROM dados_pf where fk_id_cadastro="'.$this-> IDCadastro.'"';
		
		if($r=$conexao->query($selecionar)){
			return $r;
			$conexao->close();
		}else{
			return false;
		}
	}
}

?>