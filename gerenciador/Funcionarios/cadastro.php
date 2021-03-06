<?php

    $raiz = "../";
    $modulo = "funcionario";
    
    if (isset($_GET['idFuncionario'])){
        
        $idFuncionario = $_GET['idFuncionario'];
        require($raiz."Include/config.php");
        $sql = "SELECT * FROM $modulo WHERE id = $idFuncionario";
        $consulta = mysql_query($sql, $con);
        #$resultado = mysql_num_rows($consulta);
        $dados = mysql_fetch_array($consulta);
        $nomeuser = $dados['nome_fun'];
        $titulo = "Alterando: $nomeuser";
        
        
    }else{
        
        $titulo = ucfirst($modulo)." Cadastrados";
    }
    
    
?>
<!DOCTYPE HTML>
    <html>
        <head>
        
        <meta charset="utf-8" />
        <title><?=$titulo?></title>
        
        <link href="<?=$raiz?>css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="<?=$raiz?>css/font-awesome.css" rel="stylesheet" type="text/css" />
        <link href="<?=$raiz?>css/animate.css" rel="stylesheet" type="text/css" />
        
        <script src="<?=$raiz?>js/jquery-2.2.2.js"></script>
        <script src="<?=$raiz?>js/bootstrap.min.js"></script>
        <style>.sumir {display: none;}</style>
       
        <script>
            $(document).ready(function(){
                $("#menusuper > li").removeClass("active");
                $("#menusuper > li:nth-child(5)").addClass("active");
                
                $("#confirma").keypress(function(){
                    $("#alerta").addClass("sumir");
                })
                $("#confirma").blur(function(){
                    var senha = $("#senha").val();
                    var confirma = $("#confirma").val();
                    if (confirma != senha ){
                       $("#alerta").removeClass("sumir"); 
                       $(this).val("").focus();
                    }
                })
                
            });
        </script>
               
        </head>
        <body>
            <div class="container">
                
                <br />
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h1 class="panel-title text-center">
                            <strong><?=$titulo?></strong>
                        </h1>
                        
                    </div>
                    <?php include ($raiz."Include/menusuper.php");?>
                    <div class="panel-body">
                        
                        <div class="col-md-6">
                            <form method="post" action="salva.php" class="form-group">
                            
                                <legend>Realize seu Cadastro</legend>
                                <input name="id" type="hidden" value="<?=$dados['idFuncionario']?>" />
                                
                                <label>Nome</label>
                                <input type="text" name="nome" value="<?=$dados['nome_fun']?>" class="form-control" />
                                
                                <label>Sexo</label>
                                <input type="text" name="sexo" value="<?=$dados['sexo']?>" class="form-control" />
                                
                                <label>Foto</label>
                                <input type="text" name="foto" id="senha" value="<?=$dados['foto']?>" class="form-control" />
                                
                                <hr />
                                <input type="submit" value="Salvar" class="btn btn-primary" />
                            </form>
                        </div>
                        <div class="col-md-6">
                            
                            <!--div class="alert alert-dismissible alert-danger sumir" id="alerta">
                              <button type="button" class="close" data-dismiss="alert"> X </button>
                              <strong>Senha e confirmação nao conferem!</strong>
                              <p>Por Favor verifique os campos!!!</p>
                              
                            </div-->
                        
                        
                        </div>
                    

                    </div>
                    <div class="panel-footer">
                        <p class="text-center">&copy; - Turma Desenvolvimento Web 2015/2016</p>
                    </div>
                </div>
                       
            </div>
        </body>
      
    </html>