<?php
    require_once("../_sessao.php"); 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HOME</title>

        <link rel="stylesheet" href="../css/estilo_usuario.css">
    </head>

    <body>

        <?php
            require_once("./_header.php"); 
        ?>

        <h1>HOME</h1>

        <div class="cards">

            <?php require_once("./visualizarbd.php"); ?>
                
                <?php
                    if($totalRegistros > 0){
                        foreach($dados as $linha){
                ?>

            <div class="card">

                <div class="foto">
                    <img src="../foto/<?=$linha["si_foto"];?>" alt="Foto do Site">
                </div>
                
                <div class="cont">
                    <p>NOME: <?=$linha["si_nome"];?></p>
                    <p>URL: <a href=<?=$linha["si_url"];?> 
                    target="_blank"><?=$linha["si_url"];?></a></p>
                    <p>CATEGORIA: <?=$linha["si_categoria"];?></p>
                    <p>DESCRIÇÃO: <?=$linha["si_descricao"];?></p>
                </div> 
                
            </div>

            <?php
                    }
                }          
                
                else{
                    echo("<tr>");
                    echo("<td colspan=6>Não há registros!!</td>");
                    echo("</tr>");
                }
            ?>
        </div>

        <footer>
            <div class="copi">
                <p>© 2026 Caiã - Todos os direitos reservados.</p>
            </div>
        </footer>
    </body>
</html>