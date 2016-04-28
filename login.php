<?php
/*
mb_internal_encoding("UTF-8"); 
mb_http_output( "UTF-8" );  
ob_start("mb_output_handler");   
header("Content-Type: text/html; charset=UTF-8",true);
*/

session_start();

include("config.php");

$email = $_POST['email'];
@$entrar = $_POST['entrar'];
@$senha = md5(mysql_real_escape_string(($_POST['senha'])));

if (isset($entrar)) {

    $verifica = mysql_query ("SELECT * FROM cliente WHERE email ='$email' and senha='$senha'") or die("erro ao selecionar");


    if (mysql_num_rows($verifica) <= 0) {
        echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='loginglamour.php';</script>";
        die();
    } else {
       
        $dados = mysql_fetch_array($verifica);
        $_SESSION['usuarioid'] = $dados['idCliente'];
        $_SESSION['usuarionome'] = $dados['nome_cliente'];
        setcookie("email", $email);
    }
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> GlamourHost </title>
        <link rel="icon"  type="image/jpg" href="img\logo.jpg" />


        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="js/jquery.js"></script>


        <style>
           
        </style>
    </head>

    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

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
                    <ul class="nav navbar-nav navbar-left">
                        <li><a href="servicos.html"> SERVIÇOS  </a></li>
                        <li><a href="contato.php">  CONTATO </a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="usuario.php">  <i class="fa fa-user"></i>  <?=$_SESSION['usuarionome']?></a></li>
                        <li><a href="logoff.php"> <i class="fa fa-sign-out"></i> Sair</a>
                            </ul>
                                    
                                    </div>


                                    </div>
                                    </nav>

                                    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
                                    <div class="jumbotron text-center">
                                        
                                        <h1> GlamourHost </h1> 
                                        <p> Solicite seu agendamento ! </p> 

                                        <form class="form-inline">
                                            <input type="" class="form-control" size="50" placeholder="Procurar" required>
                                            <button type="button" class="btn btn-info"> <i class="fa fa-search"></i>  </button>
                                        </form>
                                    </div>
                                    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->


                                    <div class="" style="text-align:center;">

                                        <h1> <i class="fa fa-hand-o-down"></i> Salões Disponiveis </h1>

                                    </div>

                                    <br>

                                    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
                                    <div class="col-md-12">


                                        <div class="col-md-6">
                                            <div id="about" class="container-fluid">
                                                <div class="row">
                                                    <div class="col-sm-8">
                                                        <h2>Salão Novo Stilos</h2><br>

                                                        <p> 
                                                            Rua:Treze de Maio nº 1313 </br>
                                                            Bairro:Centro </br>
                                                            Cidade:Campina Grande-PB </br>
                                                            Telefone <i class="fa fa-phone"></i> (83) 9 3011-3011 </br>
                                                        </p>


                                                        <br> <a href="agendamento.php" class="btn btn-primary"> Agendar </a>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <img class="img img-responsive" style="display:inline;" src="img\Salao1.jpg"  width="250" height="200">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="col-md-6">
                                            <div id="about" class="container-fluid">
                                                <div class="row">
                                                    <div class="col-sm-8">
                                                        <h2>Salão Novo Stilos</h2><br>

                                                        <p> 
                                                            Rua:Treze de Maio nº 1313 </br>
                                                            Bairro:Centro </br>
                                                            Cidade:Campina Grande-PB </br>
                                                            Telefone <i class="fa fa-phone"></i> (83) 9 3011-3011 </br>
                                                        </p>


                                                        <br> <a href="agendamento.php" class="btn btn-primary"> Agendar </a>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <img class="img img-responsive" style="display:inline;" src="img\Salao2.jpg" width="250" height="200">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div id="about" class="container-fluid">
                                                <div class="row">
                                                    <div class="col-sm-8">
                                                        <h2> Fio a Fio </h2><br>

                                                        <p> 
                                                            Rua:Treze de Maio nº 1313 </br>
                                                            Bairro:Centro </br>
                                                            Cidade:Campina Grande-PB </br>
                                                            Telefone <i class="fa fa-phone"></i> (83) 9 3011-3011 </br>
                                                        </p>


                                                        <br> <a href="agenda.php" class="btn btn-primary"> Agendar </a>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <img class="img img-responsive" style="display:inline;" src="img\Salao3.jpg" width="250" height="200">
                                                    </div>
                                                </div>




                                            </div>
                                        </div>




                                        <div class="col-md-6">
                                            <div id="about" class="container-fluid">
                                                <div class="row">
                                                    <div class="col-sm-8">
                                                        <h2> Fio a Fio </h2><br>

                                                        <p> 
                                                            Rua:Treze de Maio nº 1313 </br>
                                                            Bairro:Centro </br>
                                                            Cidade:Campina Grande-PB </br>
                                                            Telefone <i class="fa fa-phone"></i> (83) 9 3011-3011 </br>
                                                        </p>


                                                        <br> <a href="agendamento.html" class="btn btn-primary"> Agendar </a>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <img class="img img-responsive" style="display:inline;" src="img\Salao3.jpg" width="250" height="200">
                                                    </div>
                                                </div>


                                            </div>
                                        </div>



                                    </div>

                                    <div class="col-md-12" style="text-align: center;">
                                        <ul class="pagination">
                                            <li class="disabled"><a href="#">&laquo;</a></li>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">&raquo;</a></li>
                                        </ul>
                                    </div>

                                    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
                                    <div class="col-md-12" style="text-align:center;background-color: white;">

                                        <h2> Publicidade </h2>

                                        <img src="img/publicidade.jpg" width="200" height="160">
                                        <img src="img/publicidade.jpg" width="200" height="160">
                                        <img src="img/publicidade.jpg" width="200" height="160">
                                        <img src="img/publicidade.jpg" width="200" height="160">

                                        <hr id="sepador" class="col-md-12">


                                    </div>


                                    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

                                    <div class="col-md-12">
                                        <div class="alert alert-dismissible alert-info">
                                            <strong> Ajuda ?! </strong> Entre em contato conosco <a href="#" class="alert-link"> glamourhost@gmail.com </a>.
                                        </div>
                                    </div>

                                    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
                                    <div class="col-md-12 footer" style="text-align:center;">
                                        <p> ©2016 - GlamourHost.
                                        <p>Desenvolvido por Equipe Glamour 
                                    </div>

                                    </body>
                                    </html>
