<?php

// conexão com o banco de dados

require_once("./_conexao.php");

try {
    $codigo = filter_input(INPUT_GET, "codigo", FILTER_SANITIZE_NUMBER_INT);

    $comandoSQL = $conexao->prepare("SELECT * FROM sites WHERE si_id=:codigo");

    $comandoSQL->execute(array(":codigo"=>$codigo));

    $dados = $comandoSQL->fetch();
} 
catch (PDOException $erro) {
    echo("Entre em contato com o suporte!!");
}