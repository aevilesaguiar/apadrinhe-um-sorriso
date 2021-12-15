<?php

require_once 'DadosGerais.php';

class PessoaJuridica extends DadosGerais{
	Private $cnpj; 
	Private $nomeFantasia;
	Private $segmento;
	Private $descricao;
	Private $site;
	
	public function setCnpj($cnpj):void{
		$this->cnpj=$cnpj;
	}
	
	public function getCnpj():string{
		return $this->cnpj;
	}
	
	public function setNomeFantasia($nomeFantasia):void{
		$this->nomeFantasia=$nomeFantasia;
	}
	
	public function getNomeFantasia():string{
		return $this->nomeFantasia;
	}

	public function setSegmento($segmento):void{
		$this->segmento=$segmento;
	}
	
	public function getSegmento($segmento):string{
		return $this->segmento;
	}
	
	public function setDescricao($descricao):void{
		$this->descricao=$descricao;
	}
	
	public function getDescricao():string{
		return $this->descricao;
	}
	
	public function setSite($site):void{
		$this->site=$site;
	}
	
	public function getSite(){
		return $this->site;
	}
	
	public function cadastrarBD():bool{
		
		require_once 'ConexaoBD.php';
		
		$conexao = new ConexaoBD();
		$conexao->open();
	
		$cadastra = 'INSERT INTO dados_pj(cnpj,nome_fantasia,site,tipo_pj,fk_id_cadastro) VALUES("'.$this->cnpj.'","'.$this->nomeFantasia.'","'.$this->site.'","'.$this->segmento.'","'.$this->idCadastro.'")';

		if($conexao->query($cadastra)){
			return true;	
		}else{
			return false;
		}
		$conexao->close();	
		
	}
	
	public function atualizarBD(){
		require_once 'ConexaoBD.php';
		
		$conexao = new ConexaoBD();
		$conexao->open();
		
		$atualiza = 'UPDATE dado_pj SET nome_fantasia="'.$this->nomeFantasia.'",segmento="'.segmento.'",descricao="'.$this->descricao.'",site="'.$this->site.'" ';
		
		if($r=$conexao->query($atualiza)){
			return $r;
		}else{
			return false;
		}
		$conexao->close();
	}
	
	public function exibirDadosBD(){
		require_once 'ConexaoBD.php';
		
		$conexao = new ConexaoBD();
		$conexao->open();
		
		$selecionar ='SELECT * FROM dados_pj WHERE fk_id_cadastro="'.$this->idCadastro.'"';
		
		if($r=$conexao->query($selecionar)){
			return $r;
		}else{
			return false;
		}
		$conexao->close();	
	}
	
	
}	

?>