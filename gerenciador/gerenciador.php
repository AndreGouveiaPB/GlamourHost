<?php
header("content-type: text/html; charset=utf-8");

session_start();

include ("Include/config.php");

$login_salao = $_POST['login_salao'];
$entrar = $_POST['entrar'];
$senha_salao = $_POST['senha_salao'];
if (isset($entrar)) {

    $verifica = mysql_query ("SELECT * FROM salao WHERE login_salao ='$login_salao' and senha_salao='$senha_salao'") or die("erro ao selecionar");


    if (mysql_num_rows($verifica) <= 0) {
        echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='gerenciadorlogin.php';</script>";
        die();
    } else {
       
        $dados = mysql_fetch_array($verifica);
        $_SESSION['loginid'] = $dados['login_salao'];
        $_SESSION['salaonome'] = $dados['nome_salao'];
        setcookie("login_salao", $login_salao);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title> Gerenciador </title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">

	<script src="js/jquery-2.2.2.js"></script>
	



</head>
<body>


<div class="container">
</br>

<div class="panel panel-primary">
<div class="panel-heading"> <h1 class="panel-title text-center"> <strong> GlamourHost- Gerenciador </strong> </h1>
</div>

<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav" id="menusuper">

          <li class="active"><a href="gerenciador/Funcionarios/index.php"> Funcionários <span class="sr-only">(current)</span></a> </li>

        <li><a href=""> Agendamentos </a></li>
        <li><a href=""> Serviços </a></li>
       
      </ul>


      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"> <?=$_SESSION['salaonome']?> </a></li>
        <li><a href="logoff.php"> <i class="fa fa-sign-out"></i> Sair</a> </li>
        

      </ul>

     
</div>

                       
                       <div class="panel-body">
                       <div class="col-md-6">

                       <h2> Seja Bem Vindo <?=$_SESSION['salaonome']?> </h2>
                       <hr />
                       <p> Mensagem de Boas Vindas Ao Usuário </p>
                       <hr />

                       <div class="well col-md-3"> 01 </div>
                       <div class="well col-md-3"> 01 </div>
                       <div class="well col-md-3"> 01 </div>

                       </div>



                        <div class="col-md-6">
                        <img src="img/Salao1.jpg" width="350" class="img img-responsive">
                       </div>
                       </div>




                       <div class="panel-footer"> 
                       <p class="text-center">&copy; GlamourHost 2016 </p>
                       </div>

</div>

</div>



































<script type="js/bootstrap.min.js"></script>
</body>
</html>