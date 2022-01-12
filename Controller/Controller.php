<?php

require_once 'CadastrarController.php'; //Arquivo com funções de cadastro

if(isset($_POST['btnCadastraUsuario']) && isset($_POST['doador_pf'])){ // Se pressionar o botão cadastrar do formulario e se for um doador pessoa física.
    if(cadastrarUsuarioController($_POST['email'],$_POST['senha'],$_POST['confirm_senha'])==true && 
    cadastrarDadosGeraisController($_POST['tipo_usuario'],$_POST['nome'],$_POST['telefone'],$_POST['telefone'],$_POST['email'],$_POST['numero'],
    $_POST['endereco'],$_POST['cidade'],$_POST['estado'],$_POST['cep'],$_POST['bairro'],$_POST['complemento'])==true &&
    cadastrarPessoaFisicaController($cpf,$rg)==true)
    {
        
       header('Location:../login.php'); //Redireciona para pagina de Login
        
    }
    else 
    {
        header('Location:../cadastro-pessoa-fisica.php'); //Redireciona para formulario doador pessoa física
    }
}