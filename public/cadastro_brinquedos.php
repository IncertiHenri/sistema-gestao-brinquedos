<?php

include("../infra/conexao.php");

$nome = $_POST["nome"];
$categoria = $_POST["cat"];
$faixa = $_POST["faixa"];
$preco = $_POST["preco"];
$quantidade = $_POST["quantidade"];

if(mb_strlen($nome) < 3){
    echo "<script>alert('O nome deve conter no mínimo 3 caracteres');
    window.location.href = '../index.php';
    </script>";
    exit;
} 
if(mb_strlen($categoria) < 5){
    echo "<script>alert('A categoria deve conter no mínimo 5 caracteres');
    window.location.href = '../index.php';
    </script>";
    exit;
}
if(mb_strlen($faixa) < 1){
    echo "<script>alert('A faixa etária deve ser preenchida');
    window.location.href = '../index.php';
    </script>";
    exit;
}
if($preco <= 1){
    echo "<script>alert('O preço deve ser acima de 1 real');
    window.location.href = '../index.php';
    </script>";
    exit;
}
if($quantidade <= 1){
    echo "<script>alert('A quantidade em estoque deve ser de pelo menos 1');
    window.location.href = '../index.php';
    </script>";
    exit;
}

$sql = "INSERT INTO brinquedos(nome, categoria, faixa_etaria, preco, quantidade_estoque) VALUES (?,?,?,?,?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param("sssii",$nome,$categoria,$faixa,$preco,$quantidade);

$stmt->execute();

header("Location:../index.php");
exit;

?>