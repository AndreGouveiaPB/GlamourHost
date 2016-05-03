<!DOCTYPE html>
<html>
    <head>

        <title> Criar Conta </title>
        <link rel="icon"  type="image/jpg" href="img\logo.jpg" />
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="js/jquery.js"></script>


    </head>

    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

        <?php include ("includes/menunaologado.php")?>

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

                    <div class="form-group col-md-3 has-success">
                        <label for="cpf"> CPF </label>
                        <input type="text" class="form-control" name="cpf" id="cpf" size=11 maxlength=11 placeholder="Somente Números">
                    </div>
                    
                    <div class="div-select form-group col-md-3 has-success    " >
                        <label for="uf"> Sexo </label>
                        <br />
                        <select name="sexo" >
                            <option value="">Selecione</option>
                            <option value="M">Masculino</option>
                            <option value="F">Feminino</option>
                                                        
                        </select>
                    </div>
                    
                    <div class="form-group col-md-6 has-success ">
                        <label for="cidade"> Cidade </label>
                        <input type="text" class="form-control" name="cidade" id="cidade" placeholder="">
                    </div>

                    <div class="form-group col-md-6 has-success col-md-pull-6">
                        <label for="email"> E-mail </label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                    </div>

                   
                    <div class="form-group col-md-6 has-success">
                        <label for="senha"> Senha </label>
                        <input type="password" class="form-control" name="senha" id="senha" size=16 maxlength=16 placeholder="******">
                    </div>
                    
                    <div class="form-group col-md-6 has-success col-md-offset-6" style="margin-top: -157px">
                        <label for="email"> Repita novamente o e-mail </label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                    </div>

                    <div class="form-group col-md-6 has-success col-md-offset-6" style="margin-top: -78px">
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

                
                <hr id="sepador" class="col-md-12">


            </div>


            <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

            
        </div>
        <?php include ("includes/footer.php");?>
    </body>
</html>



