<?php header("content-type: text/html; charset=utf-8");

session_start(); 

include("config.php");

$email = $_POST['email'];
$entrar = $_POST['entrar'];
$senha = $_POST['senha'];
if (isset($entrar)) {

    $verifica = mysql_query("SELECT * FROM cliente WHERE email ='$email' and senha='$senha'") or die("erro ao selecionar");
    

    if (mysql_num_rows($verifica) <= 0) {
        echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='loginglamour.html';</script>";
        die();
    } else {
        setcookie("email", $email);
     
       
       
      
    }
}
?>


<!DOCTYPE html>
<html>
<head>
 
  <title> GlamourHost </title>
  <link rel="icon"  type="image/jpg" href="img\logo.jpg" />

  <meta charset="utf-8">

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <script src="js/jquery.js"> </script>
  
  <style>
 {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
      
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  .jumbotron {
      background-color: #66c2ff;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #f4511e;
      font-size: 50px;
  }
  .logo {
      color: #f4511e;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
 
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #f4511e; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff !important;
      color: #f4511e;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #f4511e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #f4511e;
      color: #fff;
  }
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
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
  }


#face:hover {
  color: blue;
}
#twitter:hover {
  color:#4db8ff;
}
#insta:hover {
  color:#994d00;
}

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
      <a class="navbar-brand" href="index.html"> <i class="fa fa-home"></i>  Inicio </a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="cadastrarsalao.html">  CADASTRAR SALÃO </a></li>
        <li><a href="servicos.html"> SERVIÇOS  </a></li>
        <li><a href="contato.html">  CONTATO </a></li>
        <li><a href="criarconta.html">  CRIAR CONTA </a></li>
        <li><a href="loginglamour.html">  <i class="fa fa-user"></i> <?php echo $email ?> </a></li>
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
      
 
      <br> <a href="agendamento.php" class="btn btn-primary"> Agendar </a>
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
   <p>Desenvolvido por Ravi Nunes 
  </div>

</body>
</html>
