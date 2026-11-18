<?php

    // echo("<pre>");
    // print_r($_POST);
    // print_r($_FILES);
    // echo("</pre>");

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $codigo = filter_input(INPUT_POST, "codigo", FILTER_SANITIZE_NUMBER_INT);
        $foto = filter_input(INPUT_POST, "foto", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        $pastaUpload = "../foto/";

        try {
            // Chama a conexão com o banco de dados
            require_once("./_conexao.php");

            // Preparando para atualizar os dados no banco
            $comandoSQL = $conexao->prepare(
                "DELETE FROM sites WHERE si_id = :codigo");

            // executando o comando digitado acima
            $comandoSQL->execute(array(
            ":codigo" => $codigo
            ));

            //
            if($comandoSQL->rowCount() > 0){
            if($foto != "foto.png"){
                unlink($pastaUpload.$foto);
            }
            header("location: ./visualizar.php");
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
        }
    
    }

    else{
        echo("Entre em contato com o suporte!!");
    }