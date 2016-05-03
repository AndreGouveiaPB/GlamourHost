<?php
/*
  mb_internal_encoding("UTF-8");
  mb_http_output( "UTF-8" );
  ob_start("mb_output_handler");
  header("Content-Type: text/html; charset=UTF-8",true);
 */

session_start();

include("config.php");

$email = $_POST['email'];
@$entrar = $_POST['entrar'];
@$senha = md5(mysql_real_escape_string(($_POST['senha'])));

if (isset($entrar)) {

    $verifica = mysql_query("SELECT * FROM cliente WHERE email ='$email' and senha='$senha'") or die("Erro ao selecionar");


    if (mysql_num_rows($verifica) <= 0) {
        echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='loginglamour.php';</script>";
        die();
    } else {

        $dados = mysql_fetch_array($verifica);
        $_SESSION['usuarioid'] = $dados['idCliente'];
        $_SESSION['usuarionome'] = $dados['nome_cliente'];
        setcookie("email", $email);
    }
}
header('Location: indexlogado.php');
?>


