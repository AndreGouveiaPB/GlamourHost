<?php
mb_internal_encoding("UTF-8");
mb_http_output("UTF-8");
ob_start("mb_output_handler");
header("Content-Type: text/html; charset=UTF-8", true);

session_start();
include ("config.php");
?>
<!DOCTYPE html>
<html>
    <head

        <title>GlamourHost</title>
        <link rel="icon"  type="image/jpg" href="img\logo.jpg" />
        <meta charset="utf-8">

        <script  scr="js/jquery.js"></script>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/datepicker.css">


        <script src="js/jquery.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>



        <script>

$(function () {

    $('.datepicker').datepicker();


});


        </script>



    </head>

    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<?php include ("includes/menusuper.php") ?>


        <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

        <div class="" style="text-align:center;margin-top:100px;">

            <h1> <i class="fa fa-calendar"></i> Agendamento </h1>

        </div>






        <br>
        <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
        <form method="POST"  action="salvaAgendamento.php">

            <div class="col-md-6"> <!--DIV PRINCIPAL -->

                <div class="col-md-2">
                    <i class="fa fa-user fa-5x"></i>
                </div>


                <div class="form-group col-md-10">
                    <label class="control-label" for=""> Bem-Vindo(a) </label>
                    <a href="usuario.php"> <input class="form-control" value="<?= $_SESSION['usuarionome'] ?>" id="disabledInput" type="text" placeholder="Login..."> </a>
                </div>



                <div class="form-group has-success col-md-12">

                    <label class="control-label" for="funcionario"> * Selecione seu Profissonal </label>

                    <select class="form-control" id="select" name="funcionario">

                        <option value="Funcionário1"> Funcionário 01 </option>
                        <option value="Funcionário2"> Funcionário 02 </option>
                        <option value="Funcionário3"> Funcionário 03 </option>

                    </select>

                </div>




                <div class="has-success col-md-3">

                    <label class="control-label" for="dtAgendamento"> * Data  </label>
                    <input type="text" class="form-control datepicker" name="dtAgendamento"data-date-format="dd/mm/yyyy" id="dtAgendamento">

                </div>



                <!-- SCRIPTS/SELECT DE PERIODO E HORÁRIO-->
                <form method="POST" action="salvaAgendamento.php">    
                    <!--SCRIPT PARA O SELECT DE PERIODO E HORA-->
<?php include ("funcao/select.php") ?>

                    <div class="form-group has-success col-md-3">
                        <label class="control-label" for="periodo"> * Periodo  </label>
                        <form>
                            <select class="form-control" name="periodo" onChange="setNumber(this)">
                                <option value="0" selected>Periodo:</option>
                                <option value="manha">Manhã</option>
                                <option value="tarde">Tarde</option>
                                <option value="noite">Noite</option>
                            </select >

                        </form>
                    </div>



                    <div class="form-group  has-success col-md-6">

                        <label class="control-label" for="horario"> * Hora  </label>
                        <select class="form-control" name="horario">
                            <option value="" selected>Escolha o Horário</option>
                        </select>
                        
                    </div>



                    <div class="form-group has-success col-md-8">

                        <label class="control-label" for="inputSuccess"> * Serviços </label>

                        <select class="form-control" id="" name="servico">

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

                            <textarea class="form-control" rows="3" id="textArea" name="obs"></textarea>
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
