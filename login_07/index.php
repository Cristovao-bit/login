<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-AU-Compatible" content="IE=edge"/>
        <title>Manutenção Lira - Painel Administrativo</title>
        <link rel="stylesheet" href="_css/style.css"/>
        <script src="_js/jquery.js"></script>
        <script>
            $(document).ready(function(){
               $('.signIn').click(function(){
                   $('.fold').toggleClass('active');
               }); 
            });
        </script>
    </head>
    <body>
        <div class="container">
            <div class="signIn">Click Here to Sign In</div>
            <div class="fold">
                <form>
                    <input type="text" name="" placeholder="UserName"/>
                    <input type="password" name="" placeholder="PassWord"/>
                    <input type="submit" name="" value="Login"/>
                    <a href="!#">Forget Password</a>
                </form>
            </div>
        </div>
    </body>
</html>
