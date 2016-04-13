<?php header("content-type: text/html; charset=utf-8");

$email = $_POST['email'];
$senha = $_POST['senha'];
$nome_cliente = $_POST['nome_cliente'];
$telefone = $_POST['telefone'];
$con = mysql_connect("localhost", "root", "root");
mysql_select_db("glamour", $con);
$query_select = "SELECT email FROM cliente WHERE email = '$email'";
$select = mysql_query($query_select, $con);
$array = mysql_fetch_array($select);
$logarray = $array['email'];
if ($email == "" || $email == null) {
    echo"<script language='javascript' type='text/javascript'>alert('O campo email deve ser preenchido');window.location.href='criarconta.html';</script>";
} else {
    if ($logarray == $email) {
        echo"<script language='javascript' type='text/javascript'>alert('Esse email já existe');window.location.href='criarconta.html';</script>";
        die();
    } else {
        $query = "INSERT INTO cliente (email,senha,nome_cliente,telefone) VALUES ('$email','$senha','$nome_cliente','$telefone')";
        $insert = mysql_query($query, $con);
        if ($insert) {
            echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='loginglamour.html'</script>";
        } else {
            echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='criarconta.html'</script>";
        }
    }
}
?>