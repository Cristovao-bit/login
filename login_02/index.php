<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Teste 03</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
        <link rel="stylesheet" href="css/reset.css"/>
        <link rel="stylesheet" href="css/Admin.css"/>
        <link rel="stylesheet" href="asset/icon.css"/>
    </head>
    <body>
        <section class="login">
            <div class="boxin">
                <h2>Administrador</h2>
                <form method="post" name="AdminLoginForm" action="">
                    <input type="email" name="user" placeholder="Informe seu nome"/>
                    <input type="password" name="pass" placeholder="Informe sua senha"/>
                    
                    <input class="btn btn-black" type="submit" name="AdminLogin" value="Logar"/>
                </form>
                <a href="#!">retornar ao site</a>
                <a href="#!">esqueci minha senha</a>
                <div class="toggle"></div>
            </div>
        </section>
        
        <script src="js/jquery.js"></script>
        <script src="js/admin.js"></script>
    </body>
</html>
