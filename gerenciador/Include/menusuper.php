<html>
    <head>

        <meta charset="utf-8" />
        <title></title></title>

    <link href="<?=$raiz?>css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="<?=$raiz?>css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="<?=$raiz?>css/animate.css" rel="stylesheet" type="text/css" />

    <script src="<?=$raiz?>js/jquery-2.2.2.js"></script>
    <script src="<?=$raiz?>js/bootstrap.min.js"></script>



<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>


      <a class="navbar-brand" href="<?=$raiz?>gerenciador.php">GlamourHost</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav" id="menusuper">


              

      </ul>
      <!--form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Procurar">
        </div>
        <button type="submit" class="btn btn-default">Ok</button>
      </form-->


 <!-- USUARIO LOGADO E LOGOFF -->

      <ul class="nav navbar-nav navbar-right">
        <li><a href="cadastro.php">  </a></li>
        <li><a href="logoff.php"> Sair <i class="fa fa-sign-out"></i> </a> </li>

      </ul>
    </div>
  </div>
</nav>