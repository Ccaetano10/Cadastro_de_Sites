<?php

    // echo("<pre>");
    // print_r($_POST);
    // print_r($_FILES);
    // echo("</pre>");

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $codigo = filter_input(INPUT_POST, "codigo", FILTER_SANITIZE_NUMBER_INT);

        $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $url = filter_input(INPUT_POST, "url", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $categoria = filter_input(INPUT_POST, "categoria", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $descricao = filter_input(INPUT_POST, "descricao", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        $pastaUpload = "../foto/";
        $fotoAnterior = filter_input(INPUT_POST, "foto", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $foto = filter_input(INPUT_POST, "foto", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        if(!empty($_FILES["foto"]["name"])){
            $foto = str_replace(" ", "_", $_FILES["foto"]["name"]);

            $token = uniqid(rand(), true);

            $foto = $token.$foto;
        }

        try {
            // Chama a conexão com o banco de dados
            require_once("./_conexao.php");

                // Preparando para atualizar os dados no banco
                $comandoSQL = $conexao->prepare("UPDATE sites SET
                    si_nome = :nome,
                    si_url = :url,
                    si_categoria = :categoria,
                    si_descricao = :descricao,
                    si_foto = :foto
                    WHERE si_id = :codigo"
                );

                // executando o comando digitado acima
                $comandoSQL->execute(array(
                    ":codigo" => $codigo,
                    ":nome" => $nome,
                    ":url" => $url,
                    ":categoria" => $categoria,
                    ":descricao" => $descricao,
                    ":foto" => $foto
                ));
            

            //
            if($comandoSQL->rowCount() >= 0){
                if(!empty($_FILES["foto"]["name"])){
                    if($fotoAnterior != "foto.png"){
                        unlink($pastaUpload.$fotoAnterior);
                    }
                    move_uploaded_file($_FILES["foto"]["tmp_name"], $pastaUpload.$foto);
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