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