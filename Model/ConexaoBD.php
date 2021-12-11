<?php 

class ConexaoBD{

    Private $host='localhost';
    Private $user='root';
    Private $senha='';
    Private $dbName='apadrinhe_um_sorriso';

    public function conectar():string{

        $conexao = new Mysqli($this->host,$this->user,$this->senha,$this->dbName);
        
        return $conexao;

    }
}