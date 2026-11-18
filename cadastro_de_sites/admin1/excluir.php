<?php
    require_once("../_sessao.php"); 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EXCLUIR</title>

        <link rel="stylesheet" href="../css/estilo.css">
    </head>

    <body>

        <?php
            require_once("./_header.php"); 
        ?>

        <h1>EXCLUIR</h1>

        <div class="conteudo">
            <?php require_once("./excluir_view.php");?>

            <form action="excluirbd.php" method="post"enctype="multipart/form-data">
                <input type="hidden" name="codigo" value="<?=$codigo;?>">
                <input type="hidden" name="foto" value="<?=$dados["si_foto"];?>">
                <div class="row">
                    <div class="col">
                        <label for="nome">NOME DO SITE</label>
                        <input type="text" name="nome" id="nome" 
                        placeholder="Nome DO SITE"
                        readonly
                        value="<?=$dados["si_nome"]; ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="url">URL</label>
                        <input type="text" name="url" id="url" 
                        placeholder="URL DO SITE"
                        readonly
                        value="<?=$dados["si_url"]; ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="categoria">CATEGORIA</label>
                        <input type="text" name="categoria" id="categoria" 
                        placeholder="Telecategoria do Visitante"
                        readonly
                        value="<?=$dados["si_categoria"]; ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="descricao">DESCRIÇÃO</label>
                        <input type="text" name="descricao" id="descricao" 
                        placeholder="Descrição do Site"
                        readonly
                        value="<?=$dados["si_descricao"]; ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="foto">FOTO DO SITE</label>
                        <input type="file" name="foto" id="foto" disabled>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <input type="submit" style="background-color:red; border:1px solid red;" value="EXCLUIR">
                    </div>
                    <div class="col">
                        <input type="reset" style="background-color:green; border:1px solid green;" onclick ="javascript:history.go(-1);" value="VOLTAR">
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