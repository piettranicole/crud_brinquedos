<?php

include "conexao.php";

$sql = "SELECT * FROM brinquedos";

$resultado = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Gestão de Brinquedos</title>
</head>

<body>

<h1>Gestão de Brinquedos</h1>

<a href="cadastrar.php">Cadastrar brinquedo</a>

<br><br>

<table border="1">

    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Categoria</th>
        <th>Faixa etária</th>
        <th>Preço</th>
        <th>Quantidade</th>
        <th>Ações</th>
    </tr>

    <?php

    while ($brinquedo = $resultado->fetch_assoc()) {

    ?>

    <tr>

        <td><?php echo $brinquedo["id"]; ?></td>

        <td><?php echo $brinquedo["nome"]; ?></td>

        <td><?php echo $brinquedo["categoria"]; ?></td>

        <td><?php echo $brinquedo["faixa_etaria"]; ?></td>

        <td>R$ <?php echo $brinquedo["preco"]; ?></td>

        <td><?php echo $brinquedo["quantidade"]; ?></td>

        <td>
            <a href="editar.php?id=<?php echo $brinquedo["id"]; ?>">Editar</a>

            <a href="excluir.php?id=<?php echo $brinquedo["id"]; ?>">Excluir</a>
        </td>

    </tr>

    <?php

    }

    ?>

</table>

</body>
</html>