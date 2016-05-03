<nav class="navbar navbar-default navbar-fixed-top" style="background: #FFC0CB;">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
               

        <a class="navbar-brand" href="indexlogado.php"> <i class="fa fa-home"></i>  Inicio </a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-left">
        <li><a href="servicos.html"> SERVIÇOS  </a></li>
        <li><a href="contato.php">  CONTATO </a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">  
        <li><a href="loginglamour.html">  <i class="fa fa-user"></i> <?= $_SESSION['usuarionome']?> </a></li>
        <li><a href="logoff.php"> <i class="fa fa-sign-out"></i> Sair</a>
      </ul>
    </div>

  
  </div>
</nav>