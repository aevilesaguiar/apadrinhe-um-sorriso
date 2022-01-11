<?php

    function cadastrarUsuarioController($email,$senha):bool
    {
        require_once '../Model/Usuario.php';

        $usuario = new Usuario();

        $usuario->setEmail($email);
        $usuario->setSenha($senha);
        
        if($usuario->validarDados()==true) // Valida dados
        {
            if($usuario->cadastrarBD()==true)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        else 
        {
            return false;
        }
    }

    function cadastrarDadosGeraisController($tipoCadastro,$nome,$telefone,$redeSocial,
    $email,$numero,$endereco,$cidade,$estado,$cep,$bairro,$complemento):bool
    {

        require_once '../Model/DadosGerais.php';

        $dadosGerais = new DadosGerais();
        $dadosGerais->setTipoCadastro($tipoCadastro); // Define o perfil do usuário no sistema
        $dadosGerais->setNome($nome);
        $dadosGerais->setTelefone($telefone);
        $dadosGerais->setRedeSocial($redeSocial);
        $dadosGerais->setEmail($email);
        $dadosGerais->setNumero($numero);
        $dadosGerais->setEndereco($endereco);
        $dadosGerais->setCidade($cidade);
        $dadosGerais->setEstado($estado);
        $dadosGerais->setCep($cep);
        $dadosGerais->setBairro($bairro);
        $dadodGerais->setComplemento($complemento);

        
        if($dadosGerais->validarDados()==true) //Valida Dados
        {
            if($dadosGerais->cadastrarBD()==true)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        else 
        {
            return false;
        }

    }

    function cadastrarPessoaFisicaController($cpf,$rg):bool
    {
    
        require_once '../Model/PessoaFisica.php';

        $pessoaFisica = new PessoaFisica();
        $pessoaFisica->setCpf($cpf);
        $pessoaFisica->setRg($rg);

        if($pessoaFisica->cadastrarBD()==true)
        {
            return true;
        }else
        {
            return false;
        }

    }

    function cadastrarPessoaJuridicaController()
    {
        
        require_once '../Model/PessoaJuridica.php';

        $pessoaJuridica = new PessoaJuridica();
        $pessoaJuridica->setCnpj($cnpj);
        $pessoaJuridica->setNomeFantasia($nomeFantasia);
        $pessoaJuridica->setSite($site);
        $pessoaJuridica->setSegmento($segmento);
        
        if($pessoaFisica->cadastrarBD()==true)
        {
            return true;
        }else
        {
            return false;
        }
    }



?>