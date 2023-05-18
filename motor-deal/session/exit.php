<?php
    //Verifica se a sessão de usuário existe.
    if(!isset($_SESSION)){

        //Caso ela não exista, cria a sessão de usuário.
        session_start();
        
        //apaga a variavel de sessao do usuario    
        unset($_SESSION["usuarioEmail"]);

        //destroi a sessao do usuario
        session_destroy();

        //redireciona o usuario p/ a area publica
        header("location:../index.php");
    }
?>