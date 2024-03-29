<?php
    include 'php/geral/conexao-banco.php';
    include "php/controle-site/sessao.php";
    include "php/controle-site/consulta.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
<link rel="apple-touch-icon" sizes="57x57" href="image/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="image/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="image/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="image/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="image/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="image/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="image/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="image/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="image/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="image/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="image/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="image/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="image/favicon/favicon-16x16.png">
<link rel="manifest" href="image/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="image/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="js/mask.js"></script>

<script
src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
crossorigin="anonymous"></script>


<script>
$(function() {
$(".toggle").on("click", function() {
    if ($(".item").hasClass("active")) {
        $(".item").removeClass("active");
    } else {
        $(".item").addClass("active");
    }
});
});
    
    </script>

</head>


<link rel="stylesheet" type="text/css" href="css/style.css">

 <title>Controle Apadrinhamento- APADRINHE UM SORRISO </title>
</head>
<body>
 <header class="menu-bg">
        <div class=" menu" >

                <div class="menu-logo">
                 <a href="#"> <img src="image/logotipo-1.svg" alt="logo-menu">
                 </a>
                 </div> 

              
                 <nav class="menu-nav"><!--flexitem é o nav-->
                <ul>
                    <li class="item"><a href="index.php">INÍCIO</a></li>
                    <li class="item menu-sep"><a href="index.php">SOBRE NÓS</a></li>
                    <li class="item menu-sep"><a href="index.php">POR QUE DOAR?</a></li>
                    <li class="item menu-sep"><a href="index.php">COMO DOAR?</a></li>
                    <li class="item menu-sep"><a href="index.php">SERVIÇO</a></li>              
                    <li class="item menu-sep"><a href="index.php">CONTATO</a></li>

                    
                    <div><a class="button-menu" href="login.php" ><i class="fas fa-hand-holding-heart" aria-hidden="true"></i>APADRINHAR</a>
                    </div>
                    <div>
                    <?php if(isset($_SESSION['logado'])!==TRUE){?>
                        <a class=" button-menu" href="php/controle-site/seguranca.php?sair=true" ><i class="fas fa-hand-holding-heart" aria-hidden="true"></i>
                        SAIR
                        </a>
                    <?php }?>
                     <li class="toggle"><span class="bars"></span></li>
                </ul>


            </nav>
         
           
        </div>
</header>


<main class="main-board dist-mob-form">
    <div class="dist-menu"></div>
<div class="p-doar">

<div class="altura-doar ">

            <h2 class="tit">CONTROLE ORGANIZAÇÃO</h2>
        </div>
            <div class="sep-item "></div>
           
           <div class="textos-item " >  
           <div class="container">
    <div class="main-body">
    
   
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">

                <img src= image/logo-empresa.jpg alt="Admin"  max-width="100%" style="border-radius: 2px;" >
                  

              </div>
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                <?php if($_SESSION['usuario_org']['site']!==""){?>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Site</h6>
                    <span class="text-secondary"><?php echo $_SESSION['usuario_org']['site']; ?></span>
                  </li>
                    <?php } ?>
                    <?php if($_SESSION['usuario_org']['rede_social']!==""){?>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Rede social</h6>
                  <span class="text-secondary"><?php echo $_SESSION['usuario_org']['rede_social']; ?></span> 
                    <?php } ?>
                </ul>
              </div>
              
            </div>
            
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nome Completo:</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $_SESSION['usuario_org']['nome'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $_SESSION['usuario_org']['email'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Telefone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $_SESSION['usuario_org']['telefone'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Função :</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $_SESSION['usuario_org']['tipo_cadastro']=='colaborador'?'Colaborador':'Administrador';?>
                    </div>
                  </div>
                 
                
                </div>

                
              </div>
        <div class="row gutters-sm">
                <div class="col-sm-12 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2 ">assignment</i>Status</h6>
                      <?php
                $status_cadastro = $conecta->query(consulta_status_cadastro($_SESSION['usuario_org']['id_cadastro']));
                foreach($status_cadastro as $status){
                }
                if($status['status_cadastro']=="EA"){
            ?>
                <p class="text-php-reprovado">Cadastro em Análise:</p>
                    <?php

                }else if($status['status_cadastro']=="RP"){
            ?>
                <p class="text-php-reprovado">Cadastro Reprovado:</p>
            <?php
                $mensagens = $conecta->query(consulta_mensagem($_SESSION['usuario_org']['id_cadastro']));

                if($conta=$mensagens->num_rows>=1){
                foreach($mensagens as $status_mensagem){
                    if($status_mensagem['status_sistema']!=="FINALIZADO"){
            ?>
            <p class=""><?php echo $status_mensagem['mensagem']; ?></p>
            <?php
                }
            }
            }
        }
          ?>
                     
                      
                    </div>
                  </div>
                </div>
              
              </div>

    </div>

 
    <div class="dist-menu"></div>
        <table class="table">
        <thead>
        <tr>
<th colspan="3" style="text-align: center;">Relatórios e Cadastros</th>
</tr>   
            </thead>
        <tbody>
        <tr>
                <th scope="col" > <a href="lista-cadastro-doador-pf.php" target=_blank class="text4">Lista de doadores PF</a></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="col"> <a href="lista-cadastro-doador-pj.php" target=_blank class="text4">Lista de doadores PJ</a></th>

            </tr>
        </tbody>
        <tbody>
                <tr>
                <th scope="col"> <a href="lista-recebimento-doacoes.php" target=_blank class="text4">Lista de Recebimento de doações</a></th>

            </tr>
        </tbody>
        <tbody>
                <tr>
                <th scope="col"> <a href="lista-criancas-apadrinhadas.php" target=_blank class="text4">Lista de crianças</a></th>

            </tr>
        </tbody>
        <tbody>

        </tbody>
        <tbody>
                <tr>
                <th scope="col"> <a href="cadastro-familia.php" target=_blank class="text4">Cadastrar Familia</a></th>

            </tr>
        </tbody>
        <tbody>
                <tr>
                <th scope="col"> <a href="cadastro-colaborador-organizacao.php" target=_blank class="text4">Cadastro de colaboradores Organização</a></th>

            </tr>
        </tbody>
        <tbody>
                <tr>
                <th scope="col"> <a href="lista-colaboradores-organizacao.php" target=_blank class="text4">Lista de colaboradores</a></th>

            </tr>
        </tbody>
        <tbody>
                <tr>
                <th scope="col"> <a href="lista-confirmacao-de-entrega.php" target=_blank class="text4">Entrega do Presente</a></th>

            </tr>
        </tbody>
        </table>

        <div class="dist-menu-botao"></div>
       
   </div>
        </tbody>



   </div>               
</div>
</main>

<footer >
    <div class="sep-item-footer-1"></div>
    <div class="sobre-dado-footer">

        <div class="sobre-item-footer">
            <h3 class="t-icon-footer">QUEM SOMOS</h3>
            <ul>
                <li ><a href="index.php">Sobre Nós</a></li>
            </ul>

        </div>

        <div class="sobre-item-footer">
            <h3 class="t-icon-footer">DOAÇÕES</h3>

            <ul>
                <li class="footer-itens"><a href="index.php">Porque-doar</a></li>
                <li class="footer-itens"><a href="index.php">Como doar?</a></li>
                <li class=" footer-itens"><a href="cadastro-pessoa-juridica.php">Doação Empresa</a></li>
                <li class=" footer-itens"><a href="cadastro-pessoa-fisica.php">Doação Pessoa Física</a></li>
            </ul>
        </div>

        <div class="sobre-item-footer">
            <h3 class="t-icon-footer">CONTATO</h3>
            <ul>
                <li class="footer-itens"><a href="index.php">Fale Conosco</a></li>
                <li class="footer-itens"><a href="index.php">Newsletter</a></li>
                <li class="footer-itens"><a href="index.php">Taxa de Serviços</a></li>
            </ul>
        </div>
        <div class="sobre-item-footer">
            <h3 class="t-icon-footer">REDES SOCIAIS</h3>
          <div>
            <li class="footer-lista simb"><a href="https://www.facebook.com/" target=_blank title=Facebook><img src="image/iconrede/facebook.svg" alt="">   </a></li>
            <li class="footer-lista simb"><a href="https://instagram.com/" target=_blank  title=Twitter><img src="image/iconrede/instagram.svg" alt=""></a></li>
            <li class="footer-lista simb"><a href="https://twitter.com" target=_blank  title=linkedin><img src="image/iconrede/twitter.svg" alt=""></a></li>
            <li class="footer-lista simb"><a href="https://www.youtube.com/" target=_blank  title=YouTube><img src="image/iconrede/youtube.svg" alt=""></a></li>
          </div>
           
        </div>



    </div>
    <div class="sep-item-footer"></div>
        
    <div class="sobre-dado-footer sobre-dado-footer-rod">
    <p>©2021 | APADRINHE UM SORRISO</p>
    </div>
    <div>


    </div>

</footer>

</body>

</html>