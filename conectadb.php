<?php
    ## ARQUIVO DE ACESSO AO BANCO DE DADOS ##
    ## ALERTA EM MODO PROFISSIONAL ARQUIVO DEVE-SE MANTER OCULTO E PROTEGIDO ##

    ## LOCALIZA O PC OU O SERVIDOR COM O BANCO (NOME DO COMPUTADOR)
    $servidor = "localhost";
    ## NOME DO BANCO
    $banco = "projeto22";
    ##USUARIO DE ACESSO
    $usuario = "admin";
    ##SENHA DO USUARIO
    $senha = "123";

    #LINK DE CONEXÂO
    $link = mysqli_connect($servidor, $usuario, $senha, $banco);
?>