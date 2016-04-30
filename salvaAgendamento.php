<?php
session_start();
include ("config.php");

$modulo = "agendamento";

$funcionario = $_POST['funcionario'];
$periodo = $_POST['periodo'];
$horario = $_POST['horario'];
$servico = $_POST['servico'];

#$data = date("Y-m-d");
#$hora = date('H:i:s');
$usuario = $_SESSION['usuarionome'];

    //$data = strtotime($_POST['data']);
    $_POST['dtAgendamento'] = date("Y-m-d", strtotime($_POST['dtAgendamento']));
    
            foreach($_POST as $campo=>$valor){
                
            	echo "$campo : $valor <br />";
            	$campos[] = $campo;
            	$valores[] = addslashes($valor);
            
            }
            
            	$campos = implode(",",$campos);
            	$campos = "(".$campos.")";
            	
            	$valores = implode("','",$valores);
            	$valores = "('".$valores."')";
            	
            	$comando = "INSERT INTO $modulo";
            	$comando .= $campos;
            	$comando.= " VALUES ".$valores;
            	
            	mysql_query($comando);
            
            echo $comando;