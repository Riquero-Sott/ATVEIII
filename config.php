<?php

    $dbHost = 'Localhost';
    $dbUsuario = 'root';
    $dbSenha = '';
    $dbBancoNome = 'usuariosprodutos';

    $conexao = new mysqli($dbHost, $dbUsuario, $dbSenha, $dbBancoNome);

    // if($conexao -> connect_errno)
    // {
    //     echo "Erro!";
    // }
    // else
    // {
    //     echo "Conexão Efetuada!";
    // }

?>