
<!DOCTYPE html>
<html>
    <head>

        <title> Login </title>
        <link rel="icon"  type="image/jpg" href="img\logo.jpg" />
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">

        <script src="js/jquery.js"></script>


    </head>

    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

        <!--MENU SUPERIOR-->
        <?php include ("includes/menunaologado.php") ?>


        <div class="" style="text-align:center;margin-top:100px;">

            <h1> <i class="fa fa-users"></i> Login </h1>

        </div>

        <br>




        <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
        <div class="col-md-12">

            <div class="col-md-8 col-md-offset-2">  <!-- PAINEL DE CADASTRO -->



                <form action="login.php" method="post" name="formulario" id="formulario">

                    <div  class="form-group col-md-7 col-md-offset-3 has-success">
                        <label for="email"> E-mail </label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                    <br /> <br /> <br />
                    <div class="form-group col-md-7 col-md-offset-3 has-success">

                        <label for="senha"> Senha </label>
                        <input type="password" class="form-control" id="senha" name="senha" size=16 maxlength=16 placeholder="********">



                    </div>


                    <div class="col-md-10 col-md-offset-3" style="margin-bottom:20px;">

                        <input type="submit" class="btn btn-success" value="Entrar" id="entrar" name="entrar" >
                        <a href="criarconta.html" class="btn btn-link col-md-offset-5"> Cadastrar </a>

                    </div>
                </form>
            </div>


            <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->








            <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

            <?php include ("includes/footer.php") ?>

    </body>
</html>
