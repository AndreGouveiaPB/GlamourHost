<?php

    $raiz = "../";
    $modulo = "agendamento";
    
    if (isset($_GET['id'])){
        
        $iduser = $_GET['id'];
        require($raiz."funcoes/conexao.php");
        $sql = "SELECT * FROM $modulo WHERE id = $idFuncionario";
        $consulta = mysql_query($sql,$con);
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
                    <?php include ($raiz."include/menusuper.php");?>
                    <div class="panel-body">
                        
                        <div class="col-md-6">
                            <form method="post" action="salva.php" class="form-group">
                            
                                <legend>Realize seu Agendamento</legend>
                                <input name="id" type="hidden" value="<?=$dados['id']?>" />
                                
                                <label>Nome</label>
                                <input type="text" name="nome" value="<?=$dados['nome']?>" class="form-control" />
                                
                                <label>Login</label>
                                <input type="text" name="login" value="<?=$dados['login']?>" class="form-control" />
                                
                                <label>Senha</label>
                                <input type="password" name="senha" id="senha" value="<?=$dados['senha']?>" class="form-control" />
                                
                                <label>Confirme a Senha</label>
                                <input type="password" name="confirma" id="confirma" value="" class="form-control" />
                                
                                <label>Tipo</label>
                                <select name="tipo" class="form-control">
                                    <option>Selecione a opção desejada</option>
                                    <option value="1" <?php echo ($dados['tipo'] == 1 ? 'selected' : '')?> >Adm</option>
                                    <option value="2" <?php echo ($dados['tipo'] == 2 ? 'selected' : '')?> >Usuário</option>
                               
                                </select>
                                                                
                                <hr />
                                <input type="submit" value="Salvar" class="btn btn-primary" />
                            </form>
                        </div>
                        <div class="col-md-6">
                            
                            <div class="alert alert-dismissible alert-danger sumir" id="alerta">
                              <button type="button" class="close" data-dismiss="alert"> X </button>
                              <strong>Senha e confirmação nao conferem!</strong>
                              <p>Por Favor verifique os campos!!!</p>
                              
                            </div>
                        
                        
                        </div>
                    

                    </div>
                    <div class="panel-footer">
                        <p class="text-center">&copy; - Turma Desenvolvimento Web 2015/2016</p>
                    </div>
                </div>
                       
            </div>
        </body>
      
    </html>