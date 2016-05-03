<?php

mb_internal_encoding("UTF-8"); 
mb_http_output( "UTF-8" );  
ob_start("mb_output_handler");   
header("Content-Type: text/html; charset=UTF-8",true);

session_start();
include ("config.php");


?>
<!DOCTYPE html>
<html>
<head
 
  <title>GlamourHost</title>
  <link rel="icon"  type="image/jpg" href="img\logo.jpg" />
  <meta charset="utf-8">

  <script  scr="js/jquery.js"> </script>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/datepicker.css">

  
  <script src="js/jquery.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
       
        
        
        <script>

   	$(function(){

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
  <a href="usuario.php"> <input class="form-control" value="<?=$_SESSION['usuarionome']?>" id="disabledInput" type="text" placeholder="Login..."> </a>
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

<script type="text/javascript">
var capsdb = new Object()

capsdb["manha"] =
[{value:"8:00", text:"8:00"},
{value:"8:30", text:"8:30"},
{value:"9:00", text:"9:00"},
{value:"9:30", text:"9:30"},
{value:"10:00", text:"10:00"},
{value:"10:30", text:"10:30"},
{value:"11:00", text:"11:00"},
{value:"11:30", text:"11:30"},
{value:"12:00", text:"12:00"},
{value:"12:30", text:"12:30"}];

capsdb["tarde"] =
[{value:"13:00", text:"13:00"},
{value:"13:30", text:"13:30"},
{value:"14:00", text:"14:00"},
{value:"14:30", text:"14:30"},
{value:"15:00", text:"15:00"},
{value:"15:30", text:"15:30"},
{value:"16:00", text:"16:00"},
{value:"16:30", text:"16:30"},
{value:"17:00", text:"17:00"},
{value:"17:30", text:"17:30"}];

capsdb["noite"] =
[{value:"18:00", text:"18:00"},
{value:"18:30", text:"18:30"},
{value:"19:00", text:"19:00"},
{value:"19:30", text:"19:30"},
{value:"20:00", text:"20:00"}];



function setNumber(chooser) {
var newElem;
var where = (navigator.appName == "Microsoft Internet Explorer") ? -1 : null;
var numberChooser = chooser.form.elements["number"];
while (numberChooser.options.length) {
numberChooser.remove(0);
}
var choice = chooser.options[chooser.selectedIndex].value;
var db = capsdb[choice];
newElem = document.createElement("option");
newElem.text = "Escolha o Horário:";
newElem.value = "";
numberChooser.add(newElem, where);
if (choice != "") {
for (var i = 0; i < db.length; i++) {
newElem = document.createElement("option");
newElem.text = db[i].text;
newElem.value = db[i].value;
numberChooser.add(newElem, where);
}
}
}


</script>

<div class="form-group has-success col-md-3">
  <label class="control-label" for="periodo"> * Periodo  </label>
<form>
<select class="form-control" name="caps" onChange="setNumber(this)">
<option value="0" selected>Periodo:</option>
<option value="manha">Manhã</option>
<option value="tarde">Tarde</option>
<option value="noite">Noite</option>
</select >

<p>
<!--
O que eu ponho em "onClick"?
Suponha que eu escolha "PHP" no primeiro combo e "2" no segundo.
Quero abrir a página "php2.html"
-->
</p>
</form>
</div>



<div class="form-group  has-success col-md-6">

  <label class="control-label" for=""> * Hora  </label>
  <select class="form-control" name="number">
<option value="" selected>Escolha o Horário</option>
</select>
  <!--select class="form-control" name="horario">
                     <option value="8:00"> 8:00 </option>
                     <option value=8:30""> 8:30 </option>
                     <option value="9:00"> 9:00 </option>
                     <option value="9:30"> 9:30 </option>
                     <option value="10:00"> 10:00 </option>
                     <option value="10:30"> 10:30 </option>
                     <option value="11:00"> 11:00 </option>
                     <option value="11:30"> 11:30 </option>
                     <option value="12:00"> 12:00 </option>
                     <optgroup> 
                     <option> Tarde </option>
                     </optgroup>
                     
                     
            
                     </select-->
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
  
  <h2> Publicidade </h2>

<img src="img/publicidade.jpg" width="200" height="160">
<img src="img/publicidade.jpg" width="200" height="160">
<img src="img/publicidade.jpg" width="200" height="160">
<img src="img/publicidade.jpg" width="200" height="160">

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
