<?php
date_default_timezone_set( 'America/Recife' );
$con = mysql_connect("localhost", "root", "pimpao")or die("erro ao selecionar");;
mysql_select_db("glamour", $con);
mysql_query("SET NAMES 'utf8'");
?>