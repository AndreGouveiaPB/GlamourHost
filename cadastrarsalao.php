
<!DOCTYPE html>
<html>
    <head>

        <title> Cadastrar Salão </title>
        <link rel="icon"  type="image/jpg" href="img\logo.jpg" />
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="js/jquery.js"></script>

    </head>

    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

       <?php include ("includes/menunaologado.php");?>

       
        <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

        <div class="" style="margin-top:100px;" >

            <h1> <i class="fa fa--plus col-md-offset-5"></i> Cadastrar Salão </h1>

        </div>

        <br>


        <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
        <div class="col-md-12 col-md-pull-1" >

            <div class="col-md-8 col-md-offset-3">  <!-- PAINEL DE CADASTRO -->


                <form method="POST" action="logarsalao.php" >

                    <div class="form-group col-md-3 has-success">
                        <label for="cnpj_cpf"> CNPJ </label>
                        <input type="text" class="form-control" name="cnpj_cpf" id="cnpj_cpf" size=14 maxlength=14 placeholder="Somente Números">
                    </div>

                    <div class="form-group col-md-5 has-success">
                        <label for="nome_salao"> Nome do Salão </label>
                        <input type="text" class="form-control" name="nome_salao" id="nome_salao" placeholder="">
                    </div>

                    <div class="form-group col-md-4 has-success">
                        <label for="nome_salao"> Login </label>
                        <input type="text" class="form-control" name="login_salao" id="login_salao" placeholder="">
                    </div>


                    <div class="div-select form-group col-md-3 has-success    " >
                        <label for="uf"> Estado </label>
                        <br />
                        <select name="uf" >
                            <option value="">Selecione</option>
                            <option value="AC">AC</option>
                            <option value="AL">AL</option>
                            <option value="AM">AM</option>
                            <option value="AP">AP</option>
                            <option value="BA">BA</option>
                            <option value="CE">CE</option>
                            <option value="DF">DF</option>
                            <option value="ES">ES</option>
                            <option value="GO">GO</option>
                            <option value="MA">MA</option>
                            <option value="MG">MG</option>
                            <option value="MS">MS</option>
                            <option value="MT">MT</option>
                            <option value="PA">PA</option>
                            <option value="PB">PB</option>
                            <option value="PE">PE</option>
                            <option value="PI">PI</option>
                            <option value="PR">PR</option>
                            <option value="RJ">RJ</option>
                            <option value="RN">RN</option>
                            <option value="RS">RS</option>
                            <option value="RO">RO</option>
                            <option value="RR">RR</option>
                            <option value="SC">SC</option>
                            <option value="SE">SE</option>
                            <option value="SP">SP</option>
                            <option value="TO">TO</option>
                        </select>
                    </div>

                    <div class="form-group col-md-5 has-success ">
                        <label for="cidade"> Cidade </label>
                        <input type="text" class="form-control" name="cidade" id="cidade" placeholder="">
                    </div>



                    <div class="form-group col-md-4 has-success" >
                        <label for="bairro"> Bairro </label>
                        <input type="text" class="form-control" name="bairro" id="bairro" placeholder="">
                    </div>
              
                    <div class="form-group col-md-3 has-success col-md-pull-3">
                        <label for="cep"> CEP </label>
                        <input type="text" class="form-control" name="cep" id="cep" size=8 maxlength=8 placeholder="Somente Números">
                    </div>

                    <div class="form-group col-md-9 has-success col-md-push-3" style="margin-top:-79px">
                        <label for="endereco"> Endereço </label>
                        <input type="text" class="form-control" name="endereco" id="endereco" placeholder="">
                    </div>



                    <div class="form-group col-md-6 has-success ">
                        <label for="email_salao"> E-mail </label>
                        <input type="text" class="form-control" name="email_salao" id="email_salao" placeholder="">
                    </div>

                    <div class="form-group col-md-6  has-success">

                        <label for="senha_salao"> Senha </label>
                        <input type="password" class="form-control" name="senha_salao" id="senha_salao" size=16 maxlength=16>
                    </div>

                   

                    <div class="col-md-12" style="margin-bottom:20px; ">

                        <button type="button" class="btn btn-danger"> Cancelar </button>
                        <input type="submit" value="Salvar" id="salvar" class="btn btn-success"> 
                        <a href="gerenciadorLogin.php" class="btn btn-info col-md-offset-7" > Login Salão </a>

                    </div>

                </form>

            </div>

           

            
        </div>
        <?php include ("includes/footer.php");?>

    </body>
</html>
