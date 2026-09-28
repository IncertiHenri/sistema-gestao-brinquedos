<?php

include("../infra/conexao.php");

$nome = $_POST["nome"];
$categoria = $_POST["cat"];
$faixa = $_POST["faixa"];
$preco = $_POST["preco"];
$quantidade = $_POST["quantidade"];
$id = $_GET["id"];

$sql = "UPDATE brinquedos SET nome = ?, categoria = ?, faixa_etaria = ?, preco = ?, quantidade_estoque = ? WHERE id = ?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("sssiii",$nome,$categoria,$faixa,$preco,$quantidade,$id);

$stmt->execute();

header("Location:../index.php");
exit;

?>