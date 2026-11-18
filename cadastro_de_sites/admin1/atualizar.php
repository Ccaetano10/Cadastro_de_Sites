<?php
    require_once("../_sessao.php"); 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ATUALIZAR</title>

        <link rel="stylesheet" href="../css/estilo.css">
    </head>

    <body>

        <?php
            require_once("./_header.php"); 
        ?>

        <h1>ATUALIZAR</h1>

        <div class="conteudo">
            <?php require_once("./atualizar_view.php");?>

            <form action="atualizarbd.php" method="post"enctype="multipart/form-data">
                <input type="hidden" name="codigo" value="<?=$codigo;?>">
                <input type="hidden" name="foto" value="<?=$dados["si_foto"];?>">
                <div class="row">
                    <div class="col">
                        <label for="nome">NOME DO SITE</label>
                        <input type="text" name="nome" id="nome" 
                        placeholder="Nome DO Site"
                        value="<?=$dados["si_nome"]; ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="url">URL</label>
                        <input type="text" name="url" id="url" 
                        placeholder="URL DO Site"
                        value="<?=$dados["si_url"]; ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="categoria">CATEGORIA</label>
                        <input type="text" name="categoria" id="categoria" 
                        placeholder="Categoria do Site"
                        value="<?=$dados["si_categoria"]; ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="descricao">DESCRIÇÃO</label>
                        <input type="text" name="descricao" id="descricao" 
                        placeholder="Descrição do Site"
                        value="<?=$dados["si_descricao"]; ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col1">
                        <img id="previa" src="../foto/<?=$dados["si_foto"]; ?>" 
                        alt="Foto do Site" width="65px">
                    </div>
                    <div class="col">
                        <label for="foto">FOTO DO SITE</label>
                        <input type="file" name="foto" id="foto" 
                        value="../foto/<?=$dados["si_foto"]; ?>"
                        accept="image/*">
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

        <script>
            const campoFoto = document.getElementById("foto");
            const previa = document.getElementById("previa");

            campoFoto.addEventListener("change", function(){
                const arquivo = this.files[0];

                if(arquivo){
                    previa.src = URL.createObjectURL(arquivo);
                }
            });
        </script>
    </body> 
</html>