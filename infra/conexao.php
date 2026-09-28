<?php

$host = "localhost";
$database = "sistema_gestao_brinquedos";
$user = "root";
$pass = "root";

$conn = new mysqli($host, $database, $user, $pass);

if ($conn->connect_errno) {
    printf("Conexão falhou: %s\n", $mysqli->connect_error);
    exit();
}

$conn -> set_charset("utf8mb4");

?>