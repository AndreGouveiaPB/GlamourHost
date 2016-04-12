<?php header("content-type: text/html; charset=utf-8");

session_start(); 

include("config.php");

$sql = mysql_query("SELECT * FROM login_cliente WHERE email_cliente='$_POST[email]' and senha_cliente='$_POST[senha]'");
$conta = mysql_num_rows($sql);

if($conta<1) {
    echo "<h1>Email ou senha errados</h1>";
}else{
    $date=date("dmY");
    
   @ $_SESSION["logado"] = "$data";
     
       echo "<h1>Você está logado</h1>";

}
?>

