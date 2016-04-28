<?php
date_default_timezone_set( 'America/Recife' );
$con = mysql_connect("localhost", "root", "gouveia01091910")or die("erro ao selecionar");;
mysql_select_db("glamour", $con);
mysql_query("SET NAMES 'utf8'");
?>