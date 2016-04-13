<?php header("content-type: text/html; charset=utf-8");

session_start(); 

include("config.php");

$email = $_POST['email'];
$entrar = $_POST['entrar'];
$senha = $_POST['senha'];
if (isset($entrar)) {

    $verifica = mysql_query("SELECT * FROM cliente WHERE email ='$email' and senha='$senha'") or die("erro ao selecionar");
    

    if (mysql_num_rows($verifica) <= 0) {
        echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='loginglamour.html';</script>";
        die();
    } else {
        setcookie("email", $email);
       echo "<h2>Bem vindo $email</h2>" ;
       
       echo 'Você está logado!';
       
    }
}
?>