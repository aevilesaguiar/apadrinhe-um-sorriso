<?php

include '../geral/conexao-banco.php';
include "sessao-org.php"; //Inicia sessao e encerra sessões
include "consulta-org.php";
include 'funcoes-cadastro-org-colab.php';
include '../controle-site/mensagens.php';

if(isset($_POST['btnCadastraColaborador'])){

    //cadastra_perfil - perfil
    $tipo_cadastro=$_POST['tipo_usuario'];//Tipos de usuário : colaborador
    $email = $_POST['email'];
    $_SESSION['dados_form']['email']=$email;
    $nome = $_POST['nome'];
    $_SESSION['dados_form']['nome']=$nome;
    $telefone=$_POST['telefone'];
    $_SESSION['dados_form']['telefone']=$telefone;
    $cep=$_POST['cep'];
    $_SESSION['dados_form']['cep']=$cep;
    $endereco=$_POST['numero'];
    $_SESSION['dados_form']['endereco']=$endereco;
    $numero=$_POST['numero'];
    $_SESSION['dados_form']['numero']=$numero;
    $cidade=$_POST['cidade'];
    $_SESSION['dados_form']['cidade']=$cidade;
    $estado=$_POST['estado'];
    $_SESSION['dados_form']['estado']=$estado;
    $bairro=$_POST['bairro'];
    $_SESSION['dados_form']['bairro']=$bairro;
    $complemento=$_POST['complemento'];
    $_SESSION['dados_form']['complemento']=$complemento;

}

if ($tipo_cadastro =="colaborador"){
    $rede_social = null;
    $usuario = "colaborador@padrao.com";
    $status_cadastro = "OK";
}

if(isset($_POST['btnCadastraColaborador'])){

    $cpf = $_POST['cpf_colaborador'];
    $_SESSION['dados_form']['cpf']=$cpf;

    //cadastra_colaborador - colaborador
    $funcao = $_POST['funcao'];
    $_SESSION['dados_form']['funcao']=$funcao;

    //Dados comuns para cadastro login
    $usuario=$_POST['email'];
    $_SESSION['dados_form']['email']=$usuario;
    $senha=$_POST['senha'];
    $_SESSION['dados_form']['senha']=$senha;
    $confirm_senha=$_POST['confirm_senha'];
    $_SESSION['dados_form']['confirm_senha']=$confirm_senha;

}

if(isset($_POST['btnCadastraColaborador'])){
    
    //cadastra usuário
    $cadastra_usuario = $conecta->query(cadastra_usuario($usuario,$senha));

    $cadastra=mysqli_query($conecta, cadastra_dados_gerais($tipo_cadastro,$nome,
    $telefone,$rede_social,$email,$numero,$endereco,$cidade,$estado,$cep,$bairro,
    $complemento,$usuario));

    //retorna id cadastro
    $id_cadastro = mysqli_insert_id($conecta);

    //cadastra mae no banco de dados de pessoa física
    $cadastra_pf=mysqli_query($conecta, cadastra_pf($cpf,$id_cadastro));
}



if(isset($_POST['btnCadastraColaborador'])){

    //cadastra na tabela colaborador
    $cadastra_colaborador=$conecta->query(cadastra_colaborador($funcao,$id_cadastro));

    //retorna id colaborador
    $id_colaborador = mysqli_insert_id($conecta);

    

    /*cadastra usuário*/
    $id_org = $_SESSION['usuario_org']['id_cadastro'];
    $cnpj_org = $conecta->query(ret_cnjpj_org($id_org));
    foreach($cnpj_org as $cnpj){

    }
    //cadastra colaborador na possui_colab
    $cadastra_possui_colab=mysqli_query($conecta, cadastra_possui_colab($cpf,$cnpj['cnpj'],$id_cadastro));
    header("Location:../../cadastro-colaborador-organizacao.php");
    sessao_mensagem(mensagem(36));
    
}





