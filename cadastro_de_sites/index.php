<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LOGIN</title>

        <link rel="stylesheet" href="./css/style.css">
    </head>

    <body>
        <div class="login-container">
            <h1><center>LOGIN</center></h1>
            <form action="indexbd.php" method="post"enctype="multipart/form-data">
                <div class="row1">
                    <div class="col">
                        <label for="usuario">USUÁRIO</label>
                    </div>
                    <div class="col">
                        <input type="text" name="usuario" id="usuario" 
                        placeholder="Usuário">
                    </div>
                </div>

                <div class="row1">
                    <div class="col">
                        <label for="senha1">SENHA</label>
                    </div>
                    <div class="col">
                        <input type="password" name="senha1" id="senha1" 
                        placeholder="Senha com oito caracteres">
                    </div>
                </div>

                <br>
                
                <div class="row">
                    <div class="col">
                        <input type="submit" value="ENTRAR">
                    </div>
                    <div class="col">
                        <input type="reset" value="LIMPAR">
                    </div>
                </div>
            </form>
            <p>Não possui uma conta? <a href="./cadastro.php">Cadastre-se</a></p>
        </div>

        <footer>
            <p>© 2026 Caiã - Todos os direitos reservados.</p>
        </footer>
    </body>
</html>