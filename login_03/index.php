<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Online Tutorials || Interface Design User</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <section>
            <div class="share active">
                <ul>
                    <li><a href="#!" class="icon-notext icon-facebook-square"> Facebook</a></li>
                    <li><a href="#!" class="icon-notext icon-linkedin-square"> Linkedin</a></li>
                    <li><a href="#!" class="icon-notext icon-instagram"> Instagram</a></li>
                    <li><a href="#!" class="icon-notext icon-twitter-square"> Twitter</a></li>
                    <li><a href="#!" class="icon-notext icon-google-plus-square"> Google+</a></li>
                </ul>
                <div class="toggle icon-pinterest"></div>
            </div>
        </section>

        <script src="jquery.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('.toggle').click(function () {
                    $('.share').toggleClass('active');
                });
            });
        </script> 
    </body>
</html>
