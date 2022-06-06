<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="sha512.js"></script>
        <script type="text/javascript" src="forms.js"></script>
        <title>Transporte PMSBC</title>
    </head>
    <body>
        <main>
            <h1 class="titulo"> Secretária de Transporte</h1>   
            <div class="login">
                <form method="post" action="process_login.php" method="POST">
                    <label for="usuario"></label>
                    <input type="text" placeholder="Usuário" name="usuario" id="usuario"><br>
                    <label for="password"></label>
                    <input type="password" placeholder="Senha" name="password" id="password"><br><br>
                    <input type="button" value="Acessar" onclick="formhash(this.form, this.form.password);">
                </form>
            </div>    
        </main>    
    </body>
</html>