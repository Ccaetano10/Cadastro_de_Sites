<?php
    require_once("../_sessao.php"); 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CADASTRAR</title>

        <link rel="stylesheet" href="../css/estilo.css">
    </head>

    <body>

        <?php
            require_once("./_header.php"); 
        ?>

        <h1>CADASTRAR</h1>

        <div class="conteudo">
            <form action="cadastrarbd.php" method="post"enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        <label for="nome">NOME DO SITE</label>
                        <input type="text" name="nome" id="nome" 
                        placeholder="Nome do Site">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="url">URL</label>
                        <input type="text" name="url" id="url" 
                        placeholder="URL do Site">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="categoria">CATEGORIA</label>
                        <input type="text" name="categoria" id="categoria" 
                        placeholder="Categoria do Site">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="descricao">DESCRIÇÃO</label>
                        <input type="text" name="descricao" id="descricao" 
                        placeholder="Descrição do Site">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="foto">FOTO DO SITE</label>
                        <input type="file" name="foto" id="foto">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <input type="submit" value="SALVAR">
                    </div>
                    <div class="col">
                        <input type="reset" onclick ="javascript:history.go(-1);" value="VOLTAR">
                    </div>
                </div>
            </form>
        </div>

        <footer>
            <div class="copi">
                <p>© 2026 Caiã - Todos os direitos reservados.</p>
            </div>
        </footer>
    </body>
</html>