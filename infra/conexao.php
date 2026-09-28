<?php

$host = "localhost";
$database = "sistema_gestao_brinquedos";
$user = "root";
$pass = "";

$conn = new mysqli($host, $user, $pass, $database);

if ($conn->connect_errno) {
    printf("Conexão falhou: %s\n", $mysqli->connect_error);
    exit();
}

$conn -> set_charset("utf8mb4");

?>