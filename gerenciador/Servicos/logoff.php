<?php header("content-type: text/html; charset=utf-8");

session_start();

session_destroy();

session_unset();

echo "<script>alert('Você saiu!');top.location.href='gerenciador.php';</script>";

