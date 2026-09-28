<?php

include("../infra/conexao.php");

$nome = $_POST["nome"];
$categoria = $_POST["cat"];
$faixa = $_POST["faixa"];
$preco = $_POST["preco"];
$quantidade = $_POST["quantidade"];

$sql = "INSERT INTO brinquedos(nome, categoria, faixa_etaria, preco, quantidade_estoque) VALUES (?,?,?,?,?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param("sssii",$nome,$categoria,$faixa,$preco,$quantidade);

$stmt->execute();

header("Location:../index.php");
exit;

?>