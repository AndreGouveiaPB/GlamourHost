<?php header("content-type: text/html; charset=utf-8");

$cnpj_cpf = $_POST['cnpj_cpf'];
$email_salao = $_POST['email_salao'];
$login_salao = $_POST['login_salao'];
$senha_salao = $_POST['senha_salao'];
$nome_salao = $_POST['nome_salao'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$cep = $_POST['cep'];
$uf = $_POST['uf'];
$con = mysql_connect("localhost", "root", "root");
mysql_select_db("glamour", $con);
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');
$query_select = "SELECT login_salao FROM salao WHERE login_salao = '$login_salao'";
$select = mysql_query($query_select, $con);
$array = mysql_fetch_array($select);
$logarray = $array['email_salao'];
if ($email_salao and $senha_salao == "" ||$login_salao == null and $email_salao == null and $senha_salao == null) {
    echo"<script language='javascript' type='text/javascript'>alert('Os campos Login, Email e Senha devem ser preenchidos');window.location.href='cadastrarsalao.html';</script>";
} else {
    if ($logarray == $email_salao) {
        echo"<script language='javascript' type='text/javascript'>alert('Esse email já existe');window.location.href='cadastrarsalao.html';</script>";
        die();
    } else {
        $query = "INSERT INTO salao (cnpj_cpf,email_salao,login_salao,senha_salao,nome_salao,endereco,bairro,cidade,cep,uf) VALUES ('$cnpj_cpf','$email_salao','$login_salao','$senha_salao','$nome_salao','$endereco','$bairro','$cidade','$cep','$uf')";
        $insert = mysql_query($query, $con);
        if ($insert) {
            echo"<script language='javascript' type='text/javascript'>alert('Salão cadastrado com sucesso!');window.location.href='gerenciadorLogin.php'</script>";
        } else {
            echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse salão');window.location.href='cadastrarsalao.html'</script>";
        }
    }
}
?>