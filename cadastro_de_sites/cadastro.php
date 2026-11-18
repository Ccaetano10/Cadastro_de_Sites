<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CADASTRO</title>

        <link rel="stylesheet" href="./css/style.css">
    </head>

    <body>
        <div class="login-container">
            <h1><center>CADASTRO</center></h1>
            <form action="cadastrobd.php" method="post"enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        <label for="nome_completo">NOME COMPLETO</label>
                        <input type="text" name="nome_completo" id="nome_completo" 
                        placeholder="Nome Completo">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="usuario">USUÁRIO</label>
                        <input type="text" name="usuario" id="usuario" 
                        placeholder="Usuário">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="senha1">SENHA</label>
                        <input type="password" name="senha1" id="senha1" 
                        placeholder="Senha com oito caracteres">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="senha2">CONFIRME A SENHA</label>
                        <input type="password" name="senha2" id="senha2" 
                        placeholder="Senha com oito caracteres">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <input type="submit" value="SALVAR">
                    </div>
                    <div class="col">
                        <input type="button" value="VOLTAR" onclick="window.location.href='index.php'">
                    </div>
                </div>
            </form>
        </div>

        <footer>
            <p>© 2026 Caiã - Todos os direitos reservados.</p>
        </footer>
    </body>
</html>