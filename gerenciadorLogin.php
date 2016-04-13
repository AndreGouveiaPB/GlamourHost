<?php
header("content-type: text/html; charset=utf-8");

session_start();

include("config.php");

$email_salao = $_POST['email_sala'];
$entrar = $_POST['entrar'];
$senha_salao = $_POST['senha_salao'];
if (isset($entrar)) {

    $verifica = mysql_query ("SELECT * FROM salao WHERE email_salao ='$email_salao' and senha='$senha_salao'") or die("erro ao selecionar");


    if (mysql_num_rows($verifica) <= 0) {
        echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='loginglamour.html';</script>";
        die();
    } else {
        setcookie("email_salao", $email_salao);
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
	</style>

</head>
<body>


<div class="container">
</br>

<div class="panel panel-primary">
<div class="panel-heading"> <h1 class="panel-title text-center"> <strong> GlamourHost</strong> </h1>
</div>
                       
                       <div class="panel-body">
                    <!-- div class="row"></div-->
                       <div class="col-md-6">
                             <div class="well">
                             	<h2 class="text-center" id="muralFoto"> Foto do Salão </h2>
                             </div>


                       </div>
                       <div class="col-md-6">

                       <img src="img/logo.jpg" class="img img-responsive" width="125" />
                       <br />


                            <form class="form-group well" method="POST"  action="logar.php" >

                            <div class="form-group">
                                <input class="form-control" name="email_salao" id="email_salao" type="text" placeholder="Insira o login" /> </input>
                           <hr/>
                          	<div class="form-group">
                          	<input class="form-control" name="senha" type="password" placeholder="Insira a senha"/> </input>
                          	</div>

                          	<div class="form-inline">
                          	<input type="text" name="captcha" class="form-group" placeholder="Insira o Código" /></input>

                            <img src="" style="padding:3px;border-radius:5px;" class="form-control bg-primary"/>
                          	</div>



                          	<hr/>
                          	<input type="submit" value="Enviar" class="btn btn-success"/></input>



                          </form>


                       </div>
                       </div>
                       </div>




                       <div class="panel-footer"> 
                       <p class="text-center">&copy; GlamourHost </p>
                       </div>

</div>

</div>




































</body>
</html>