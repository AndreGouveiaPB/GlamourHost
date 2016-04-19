<?php header("content-type: text/html; charset=utf-8");

$email = $_POST['email'];
$senha = md5(mysql_real_escape_string(($_POST['senha'])));
$nome_cliente = $_POST['nome_cliente'];
$telefone = $_POST['telefone'];
$cpf = $_POST['cpf'];
$sexo = $_POST['sexo'];
$cidade = $_POST['cidade'];
$con = mysql_connect("localhost", "root", "root");
mysql_select_db("glamour", $con);
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');
$query_select = "SELECT email FROM cliente WHERE email = '$email'";
$select = mysql_query($query_select, $con);
$array = mysql_fetch_array($select);
$logarray = $array['email'];
if ($email and $senha == "" || $email == null and $senha == null) {
    echo"<script language='javascript' type='text/javascript'>alert('Os campos email e senha devem ser preenchidos');window.location.href='criarconta.html';</script>";
} else {
    if ($logarray == $email) {
        echo"<script language='javascript' type='text/javascript'>alert('Esse email já existe');window.location.href='criarconta.html';</script>";
        die();
    } else {
        $query = "INSERT INTO cliente (email,senha,nome_cliente,telefone,cpf,sexo,cidade) VALUES ('$email','$senha','$nome_cliente','$telefone','$cpf','$sexo','$cidade')";
        $insert = mysql_query($query, $con);
        if ($insert) {
            echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='loginglamour.html'</script>";
        } else {
            echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='criarconta.html'</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
 
  <title> Criar Conta </title>
  <link rel="icon"  type="image/jpg" href="img\logo.jpg" />
  <meta charset="utf-8">

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="js/jquery.js"> </script>
  
 
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
      <ul class="nav navbar-nav navbar-left">
        <li><a href="cadastrarsalao.html">  CADASTRAR SALÃO </a></li>
        <li><a href="servicos.html"> SERVIÇOS  </a></li>
        <li><a href="contato.html">  CONTATO </a></li>
        <li><a href="criarconta.html">  CRIAR CONTA </a></li>
      </ul>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="loginglamour.html">  <i class="fa fa-user"></i> Login </a></li>
       </ul>
    </div>

  
  </div>
</nav>

<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->




<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

<div class="" style="text-align:center;margin-top:100px;">
  
  <h1> <i class="fa fa-user-plus"></i> Criar Conta </h1>
  
</div>

<br>


<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<div class="col-md-12" >

<div class="col-md-8 col-md-offset-2">  <!-- PAINEL DE CADASTRO -->


<form method="POST" action="criarconta.php" >

<div class="form-group col-md-3 has-success">
    <label for="telefone"> Telefone </label>
    <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Somente Números">
  </div>

  <div class="form-group col-md-9 has-success">
    <label for="nome_cliente"> Nome Completo </label>
    <input type="text" class="form-control" name="nome_cliente" id="nome_cliente" placeholder="Nome">
  </div>
 
  <div class="form-group col-md-6 has-success">
    <label for="email"> E-mail </label>
    <input type="text" class="form-control" name="email" id="email" placeholder="Email">
  </div>

  <div class="form-group col-md-6 has-success">
    <label for="email"> Repita novamente o e-mail </label>
    <input type="text" class="form-control" name="email" id="email" placeholder="Email">
  </div>

  <div class="form-group col-md-6 has-success">
    <label for="senha"> Senha </label>
    <input type="password" class="form-control" name="senha" id="senha" size=16 maxlength=16 placeholder="******">
  </div>

  <div class="form-group col-md-6 has-success">
    <label for="senha"> Corfimar senha </label>
    <input type="password" class="form-control" name="senha" id="senha" placeholder="******">
  </div>

<div class="col-md-10" style="margin-bottom:20px;">

  <button type="button" class="btn btn-danger"> Cancelar </button>
  <input type="submit" value="Salvar" id="salvar" class="btn btn-success"> 
</div>

</form>

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
<div class="alert alert-dismissible alert-success">
 <strong> Ajuda ?! </strong> Entre em contato conosco <a href="#" class="alert-link"> glamourhost@gmail.com </a>.
</div>
</div>

<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<div class="col-md-12 footer" style="text-align:center;">
   <p> ©2016 - GlamourHost.
   <p>Desenvolvido por Equipe Glamour 
  </div>
</div>
</body>
</html>


