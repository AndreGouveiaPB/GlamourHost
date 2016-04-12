<!DOCTYPE html>
<html>
<head>
	<title>Teste </title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
</head>
<body>




<form method="POST" action="programar.php">


<div class="form-group has-success col-md-3">
  <label class="control-label" for=""> * Periodo  </label>
  <select class="form-control" name="Periodo">
                     <option value="Manhã"> Manhã </option>
                     <option value="Tarde"> Tarde </option>
                     <option value="Noite"> Noite </option>
                     </select>
</div>



<div class="form-group  has-success col-md-6">

  <label class="control-label" for=""> * Hora  </label>
  <select class="form-control" name="Horário">
                     <option value="8:00"> 8:00 am</option>
                     <option value="8:30"> 8:30 am</option>
                     <option value="9:00"> 9:00 am</option>
                     <option value="9:30"> 9:30 am</option>
                     <option value="10:00"> 10:00 am</option>
                     <option value="10:30"> 10:30 am</option>
                     <option value="11:00"> 11:00 am</option>
                     <option value="11:30"> 11:30 am</option>
                     <option value="12:00"> 12:00 am</option>
                     <optgroup> 
                     <option> Tarde </option>
                     </optgroup>
                     
                     
            
                     </select>
</div>


<div class="col-md-10" style="margin-bottom:20px;">

  <input type="reset" value="Limpar Dados" class=" btn btn-danger" />
  <button type="submit" class="btn btn-success">Enviar Dados</button>
</div>


</form>


<?php


if (programar.php)

?>






















</body>
</html>