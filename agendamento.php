<?php

header("content-type: text/html; charset=utf-8");

session_start();


?>
<!DOCTYPE html>
<html>
<head>
 
  <title> GlamourHost </title>
  <link rel="icon"  type="image/jpg" href="img\logo.jpg" />
  <meta charset="utf-8">

  <script  scr="js/jquery.js"> </script>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

  
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
        <a class="navbar-brand" href="login.php"> <i class="fa fa-home"></i>  Inicio </a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-left">
        <li><a href="servicos.html"> SERVIÇOS  </a></li>
        <li><a href="contato.php">  CONTATO </a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">  
        <li><a href="loginglamour.html">  <i class="fa fa-user"></i> <?=$_SESSION['usuarionome']?> </a></li>
        <li><a href="logoff.php"> <i class="fa fa-sign-out"></i> Sair</a>
      </ul>
    </div>

  
  </div>
</nav>

<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

<div class="" style="text-align:center;margin-top:100px;">
  
  <h1> <i class="fa fa-calendar"></i> Agendamento </h1>
  
</div>

<br>
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<form method="POST"  action="recebedados.php">

<div class="col-md-6"> <!--DIV PRINCIPAL -->
  
<div class="col-md-2">
<i class="fa fa-user fa-5x"></i>
</div>


<div class="form-group col-md-10">
  <label class="control-label" for=""> Bem-Vindo(a) </label>
  <a href="usuario.php"> <input class="form-control" value="<?=$_SESSION['usuarionome']?>" id="disabledInput" type="text" placeholder="Login..."> </a>
</div>



<div class="form-group has-success col-md-12">

  <label class="control-label" for="funcionario"> * Selecione seu Profissonal </label>

  <select class="form-control" id="select" name="Funcionario">

          <option value="Funcionário1"> Funcionário 01 </option>
          <option value="Funcionário2"> Funcionário 02 </option>
          <option value="Funcionário3"> Funcionário 03 </option>
         
        </select>

</div>




<div class="form-group has-success col-md-3">
  <label class="control-label" for=""> * Data  </label>
  <input type="text" class="form-control" placeholder="DD/MM/AAAA" name="Data">
  
</div>





<div class="form-group has-success col-md-3">
  <label class="control-label" for=""> * Periodo  </label>
  <select class="form-control" name="Periodo">
                     <option value="Manhã"> Manhã </option>
                     <option value="Tarde"> Tarde </option>
                     <option value="Noite"> Noite </option>
                     </select>
</div>



<div class="form-group  has-success col-md-6">

  <label class="control-label" for=""> * Hora  </label>
  <select class="form-control" name="Horário">
                     <option value=""> 8:00 am</option>
                     <option value=""> 8:30 am</option>
                     <option value=""> 9:00 am</option>
                     <option value=""> 9:30 am</option>
                     <option value=""> 10:00 am</option>
                     <option value=""> 10:30 am</option>
                     <option value=""> 11:00 am</option>
                     <option value=""> 11:30 am</option>
                     <option value=""> 12:00 am</option>
                     <optgroup> 
                     <option> Tarde </option>
                     </optgroup>
                     
                     
            
                     </select>
</div>



<div class="form-group has-success col-md-8">

  <label class="control-label" for="inputSuccess"> * Serviços </label>

  <select class="form-control" id="" name="Serviços">

          <option value="corte"> Corte </option>
          <option value="luzes"> Luzes </option>
          <option value="colocaração"> Coloração </option>
         
        </select>


</div>

<div class="form-group has-success col-md-4">
  <label class="control-label" for="inputDefault"> Valor  </label>
  <input type="text" class="form-control" id="" placeholder="R$" name="valor">
</div>





<div class="form-group has-success">
      <label for="textArea" class="col-lg-2 control-label"> Observações </label>
      <div class="col-md-12">

        <textarea class="form-control" rows="3" id="textArea" name="Observações"></textarea>
        <span class="help-block">(*) Campo Obrigatório.</span>
      </div>
    </div>




<div class="col-md-10" style="margin-bottom:20px;">

  <input type="reset" value="Limpar Dados" class=" btn btn-danger" />
  <button type="submit" class="btn btn-success">Enviar Dados</button>
</div>








</div>















</form>
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
<div class="alert alert-dismissible alert-success">
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
