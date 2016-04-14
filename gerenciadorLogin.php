<?php
header("content-type: text/html; charset=utf-8");

session_start();

include("config.php");

$email_salao = $_POST['email_salao'];
$entrar = $_POST['entrar'];
$senha_salao = $_POST['senha_salao'];
if (isset($entrar)) {

    $verifica = mysql_query ("SELECT * FROM salao WHERE email_salao ='$email_salao' and senha_salao='$senha_salao'") or die("erro ao selecionar");


    if (mysql_num_rows($verifica) <= 0) {
        echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='gerenciadorLogin.html';</script>";
        die();
    } else {
        setcookie("email_salao", $email_salao);
      echo"<script language='javascript' type='text/javascript'>window.location.href='gerenciador.php';</script>";

    }
}
?>