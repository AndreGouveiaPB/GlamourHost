<?php

header("content-type: text/html; charset=utf-8");

session_start();

include("config.php");
?>
<!DOCTYPE HTML>
<html>
    <head>

        <meta charset="utf-8" />
        <title></title></title>

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="css/animate.css" rel="stylesheet" type="text/css" />

    <script src="js/jquery-2.2.2.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function () {

            $("#menusuper > li").removeClass("active");
            $("#menusuper > li:nth-child(5)").addClass("active");


        });
    </script>      




</head>
<body>
    <div class="container">

        <br />
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h1 class="panel-title text-center">
                    <strong> Funcionários</strong>
                </h1>

            </div>
            <?php include ("menusuper.php"); ?>
            <div class="panel-body">
                <!--TOPO DA PAGINA USUARIOS-->
                <div class="col-md-12">
                    <div class="row">

                        <!--BOTÃO NOVO CADASTRO-->
                        <div class="col-md-2 sempadding">
                            <a href="cadastro.php" class="btn btn-success" style="float: left;">
                                <i class="fa fa-plus-circle"> </i> Novo Funcionário</a>

                        </div>
                        <!--pesquisa (filtro) usuario -->
                        <div class="col-md-10">
                            <form method="POST" action="index.php"></form>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"> <i class="fa fa-users"></i></span>
                                    <input type="text" class="form-control" name="nome" placeholder="pesquise aqui">
                                    <span class="input-group-btn">
                                        <button class="btn btn-success" type="submit">
                                            <i class="fa fa-search"></i> &nbsp;Procurar
                                        </button>

                                    </span>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 table-responsive">
                    <table class="table table-striped table-hover table-condensed">
                        <thead class="bg-primary">
                            <tr>
                                <th class="text-center"> Cód  </th>
                                <th class="col-md-8 text-left"> Nome  </th>
                                <th class="text-center"> * </th>
                                <th class="text-center"> *  </th>
                                <th class="text-center"> *  </th>                       

                            </tr>

                        </thead>

                        <tbody>

                            <tr>
                                <td class="text-center">28 </td>
                                <td><a href="cadastro.php?id=28">Funcionário 01</a></td>
                                <td class="text-center"><a href="#"><i class="fa fa-recycle"></i></a></td>
                                <td class="text-center"><a href="#"><i class="fa fa-edit"></i></a></td>
                                <td class="text-center"><a href="#"><i class="fa fa-trash"></i></a></td>
                            </tr>               



                        </tbody>
                        <tfoot class="bg-primary">
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>



                            </tr>


                        </tfoot>
                    </table>
                </div>
            </div>  
            <div class="panel-footer">
                <p class="text-center">&copy; - Equipe GlamourHost</p>
            </div>
        </div>

    </div>
</div>
</body>

</html>     