<?php

require_once("./_conexao.php");

try {
    
    // comando que será executado no banco de dados
    $comandoSQL = "SELECT * FROM sites ORDER BY si_data_cadastro DESC";

    //executa o comando SQL na conexão e retorna com a resposta
    $dadosSelecionados = $conexao->query($comandoSQL);

    // organiza os dados para serem utilizados na página
    $dados = $dadosSelecionados->fetchAll();

    // retorna o total de linhas que retornaram da consulta
    $totalRegistros = $dadosSelecionados->rowCount();

} catch (PDOException $erro) {
    echo("Entre em contato com o suporte!!");
}