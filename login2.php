<?php

    session_start();
    include("config.php");
    
    $email = $_POST['email'];
    $entrar = $_POST['entrar'];
    $senha = md5(mysql_real_escape_string($_POST['senha']));
    
    if (isset($entrar)) {
        
        $verifica = mysql_query ("SELECT * FROM cliente WHERE email ='$email' and senha='$senha'",$con);
        
        if (mysql_num_rows($verifica) <= 0) {
            
            echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='loginglamour.php';</script>";
            die();
                
        }else{
            
            $dados = mysql_fetch_array($verifica);
            $_SESSION['usuarioid'] = $dados['idCliente'];
            $_SESSION['usuarionome'] = $dados['nome_cliente'];
            setcookie("email", $email);
            
        }
        
        
    }else{
        
    }
    
    	
?>

<!DOCTYPE HTML>
<html>

    <head>
        
        <meta charset="utf-8" />
        <title> GlamourHost </title>
        <link rel="icon"  type="image/jpg" href="img\logo.jpg" />


        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script src="js/jquery.js"></script>
    
    </head>
    <!--body-->
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
        <?php include("includes/menusuper.php")?>
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
        
        <br />
        
        <div class="col-md-12">
            <?php include("includes/saloes.php")?>
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
    
        
        <?php include("includes/footer.php")?>
    </body>


</html>