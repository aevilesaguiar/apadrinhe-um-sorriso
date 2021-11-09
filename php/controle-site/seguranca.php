<?php

    if(isset($_GET["sair"])=="true"){// Encerra sessão caso usuário deseja sair do login
    include "sessao.php";
    include "redirecionamento-pagina.php";
    encerra_sessao();
    redireciona(3);
    session_destroy();
    }else if(empty($_SESSION['usuario']['logado']) || $_SESSION['usuario']['logado']!== true){// Expulsa usuário caso não esteja conectado
        redireciona(4);
        session_destroy();
    }
    

?>