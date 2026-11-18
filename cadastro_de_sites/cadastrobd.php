<?php

    // echo("<pre>");
    // print_r($_POST);
    // print_r($_FILES);
    // echo("</pre>");

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome_completo = filter_input(INPUT_POST, "nome_completo", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $usuario = filter_input(INPUT_POST, "usuario", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $senha1 = filter_input(INPUT_POST, "senha1", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        try {
            // Chama a conexão com o banco de dados
            require_once("./_conexao.php");

            // Preparando para salvar os dados no banco
            $comandoSQL = $conexao->prepare("INSERT INTO usuario(
            usu_nome,
            usu_login,
            usu_senha,
            usu_tipo) 
            VALUES (
            :usu_nome,
            :usu_login,
            :usu_senha,
            :usu_tipo) 
            ");

            $comandoSQL->execute(array(
                ":usu_nome" => $nome_completo,
                ":usu_login" => $usuario,
                ":usu_senha" => password_hash($senha1, PASSWORD_DEFAULT),
                ":usu_tipo" => "usuario"
            ));

            if($comandoSQL->rowCount() > 0){
                header("location: index.php");
                exit();
            }
            else{
                echo("Entre em contato com o suporte!!"); 
            }
        } 
        
        catch (PDOException $erro) {
            echo("Entre em contato com o suporte!!");
            // echo("<pre>");
            // echo($comandoSQL->debugDumpParams());
            // echo("</pre>");   
            // echo "ERRO: " . $erro->getMessage();
        }
    
    }

    else{
        echo("Entre em contato com o suporte!!");
    }