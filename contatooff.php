<?php ?>
<!DOCTYPE html>
<html>
    <head>

        <title> Contato </title>
        <link rel="icon"  type="image/jpg" href="img\logo.jpg" />
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="js/jquery.js"></script>

    </head>

    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">


        <?php include ("includes/menunaologado.php") ?>


        <div class="" style="text-align:center;margin-top:90px;">

            <h1> <i class="fa fa-envelope-square"></i> Contato </h1>

        </div>

        <br>


        <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
        <div class="col-md-12">
            <div class="col-md-8 col-md-offset-2">
                <h1> GlamourHost </h1>
                <p> Entre em contato com os responsáveis, caso esteja com dúvida, ou algo relacionado a consultas do site.</p>
            </div>
        </div>

        <div class="col-md-12">
            <div class="col-md-8 col-md-offset-2">  <!-- PAINEL DE CADASTRO -->


                <form role="form" style="margin-top:25px;">

                    <div class="form-group col-md-6 has-success">
                        <label for="nome"> Nome Completo </label>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
                    </div>

                    <div class="form-group col-md-6 has-success">
                        <label for="email"> E-mail </label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="E-mail">
                    </div>


                    <div class="form-group col-md-12 has-success">
                        <label for="" > Observações </label>
                        <textarea class="form-control" rows="3" id="textArea" placeholder="Digite seu texto aqui ..." ></textarea>
                        <span class="help-block"> Atenciosamente GlamourHost !</span>
                    </div>

                    <div class="col-md-10" style="margin-bottom:20px;">

                        <button type="button" class="btn btn-danger"> Limpar </button>
                        <button type="button" class="btn btn-success"> Enviar </button>
                    </div>


            </div>


        </form>

    </div>



</div>
<?php include ("includes/footer.php"); ?>
</body>
</html>


