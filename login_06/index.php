<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Login e Register</title>
        <link rel="stylesheet" href="_css/boot.css"/>
        <link rel="stylesheet" href="_css/style.css"/>
    </head>
    <body>
        <div class="container">
            <section class="main_area_client">
                <h1 class="font-zero">Área do Cliente</h1>
                <artilce class="area_client_login">
                    <h2>Área de Login</h2>
                    <form method="post" action="">
                        <input type="email" placeholder="Informe seu email" required/>
                        <input type="password" placeholder="Informe sua senha" required/>

                        <input type="submit" value="Logar"/>
                    </form>

                    <a href="#!">Esqueci minha senha</a>
                </artilce>

                <artilce class="area_client_register">
                    <h2>Área de Registro</h2>
                    <form method="post" action="">
                        <input type="text" placeholder="Informe seu nome" required/>
                        <input type="email" placeholder="Informe seu email" required/>
                        <input type="password" placeholder="Informe uma senha" required/>
                        <input type="password" placeholder="Confirmar a senha" required/>

                        <input type="submit" value="Registar"/>
                    </form>
                </artilce>
            </section>
        </div>
    </body>
</html>
