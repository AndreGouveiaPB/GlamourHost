<?php
header("content-type: text/html; charset=utf-8");

$raiz = "../";

session_start();

include("Include/config.php");

$login_salao = $_POST['login_salao'];
@$entrar = $_POST['entrar'];
@$senha_salao = $_POST['senha_salao'];
if (isset($entrar)) {

    $verifica = mysql_query("SELECT * FROM salao WHERE login_salao ='$login_salao' and senha_salao='$senha_salao'") or die("erro ao selecionar");


    if (mysql_num_rows($verifica) <= 0) {
        echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='gerenciadorLogin.html';</script>";
        die();
    } else {
        setcookie("login_salao", $login_salao);
        echo"<script language='javascript' type='text/javascript'>window.location.href='gerenciador.php';</script>";
    }
}
?>

<!DOCTYPE html>

<html>
    <head>
        <title> Gerenciador-Login </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/animate.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css">

        <script type="js/jquery-2.2.2.js"></script>
        <script type="js/bootsatrap.min.js"></script>

        <style>
            img {margin:0 auto;}
            #muralFoto {min-height: 400px;}
            .navbar {
                margin-bottom: 0;
                background-color: #f4511e;
                z-index: 9999;
                border: 0;
                font-size: 12px !important;
                line-height: 1.42857143 !important;
                letter-spacing: 4px;
                border-radius: 0;
                font-family: Montserrat, sans-serif;
            }
            .navbar li a, .navbar .navbar-brand {
                color: #fff !important;
            }
            .navbar-nav li a:hover, .navbar-nav li.active a {
                color: #f4511e !important;
                background-color: #fff !important;
            }
            .navbar-default .navbar-toggle {
                border-color: transparent;
                color: #fff !important;
            }
        </style>


    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><h1 class="panel-title text-center">   </h1></li>   
                    </ul>
                </div>


            </div>
        </nav>


        <div class="container" style="margin-top:10px">
            </br>

            <div class="panel panel-primary">
                <div class="panel-heading"> <h1 class="panel-title text-center"> <strong> GlamourHost</strong> </h1>
                </div>

                <div class="panel-body">
                    <!-- div class="row"></div-->
                    <div class="col-md-6">

                        <div class="well" style="margin-top:50px">
                            <h2 class="text-center"> </h2>
                            <img src="<?=$raiz?>img/logoglamour.jpg" class="img img-responsive"  />
                        </div>


                    </div>
                    <div class="col-md-6">


                        <br />




                        <form action="gerenciador.php" method="post" name="formulario" id="formulario">


                            <div class="col-md-10 well form-group sombra redondo" style="margin: 0 auto; float: none; padding-bottom: 20px;">
                                <img src="<?=$raiz?>img/logo.jpg" class="img img-responsive" width="125" />
                                <form id="frmlogin" method="post" action="gerenciador.php" class="col-lg-11" style="float: none; margin: 0 auto;">
                                    <input type="text" name="login_salao" id="login_salao" title="Digite o nome do usuário: (login)." class="form-control" placeholder="Seu login aqui." style="margin-top: 20px; margin-bottom: 20px;">
                                    <input type="password" name="senha_salao" id="senha_salao" title="Digite a senha do usuário." class="form-control" placeholder="Sua senha aqui.">
                                    <br>
                                    <input type="text" name="captcha" class="form-control" title="Digite o código ao lado." placeholder="Insira o código" style="width: 47%; margin-right: 2%; float: left;"> 

                                    <img src="<?=$raiz?>funcao/captcha.php" style="float: left; max-width: 30%; padding: 0px; " class="form-control btn btn-default">
                                    <br /><br /><br />


                                    <input type="submit" class="btn btn-primary" value="Entrar" id="entrar" name="entrar" style="width: 100%;">
                                </form>
                            </div>


                            <hr/>




                        </form>


                    </div>
                </div>
            </div>




            <div class="panel-footer"> 
                <p class="text-center">&copy;<a href="<?=$raiz?>/index.php"> GlamourHost </a> </p> 
            </div>

        </div>

    </div>

</body>
</html>
