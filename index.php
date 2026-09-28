<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    
    <h1>Bem vindo!</h1>

    <form action="public/cadastro_brinquedos.php" method="POST">

    <label for="nome">Nome:</label>
    <input type="text" name="nome">

    <label for="cat">Categoria:</label>
    <input type="text" name="cat">

    <label for="faixa">Faixa etária:</label>
    <input type="text" name="faixa">

    <label for="preco">Preço:</label>
    <input type="number" name="preco">
    
    <label for="quantidade">Quantidade em estoque:</label>
    <input type="number" name="quantidade">

    <button type="submit">Cadastrar</button>
    </form>

    <table border="1">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th>Faixa etária</th>
                    <th>Preço</th>
                    <th>Quantidade em estoque:</th>
                </tr>

    <?php
    
    include("infra/conexao.php");

    $sql = "SELECT * FROM brinquedos";

    $brinquedos = $conn->query($sql);

    while ($brinquedo = mysqli_fetch_assoc($brinquedos)) {
    ?>

                    <tr>
                        <td><?php echo $brinquedo["id"] ?></td>
                        <td><?php echo $brinquedo["nome"] ?></td>
                        <td><?php echo $brinquedo["categoria"] ?></td> 
                        <td><?php echo $brinquedo["faixa_etaria"] ?></td>
                        <td><?php echo $brinquedo["preco"] ?></td>
                        <td><?php echo $brinquedo["quantidade_estoque"] ?></td>    
                        <td>
                            <a href="public/formulario_editar_brinquedo.php?id=<?php echo $brinquedo["id"] ?>">Editar brinquedo</a>
                            <a href="public/excluir_brinquedo.php?id=<?php echo $brinquedo["id"] ?>">Excluir brinquedo</a>
                        </td>           
                    </tr>
    <?php } ?>

</body>
</html>