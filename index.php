<?php

require_once "conexao.php";

$sql = "SELECT * FROM brinquedos ORDER BY id DESC";
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

<table border="1" cellpadding="10">

<tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Categoria</th>
    <th>Faixa etária</th>
    <th>Preço</th>
    <th>Estoque</th>
    <th>Ações</th>
</tr>

<?php while ($brinquedo = $resultado->fetch_assoc()): ?>

<tr>

    <td><?= $brinquedo["id"] ?></td>

    <td><?= htmlspecialchars($brinquedo["nome"]) ?></td>

    <td><?= htmlspecialchars($brinquedo["categoria"]) ?></td>

    <td><?= htmlspecialchars($brinquedo["faixa_etaria"]) ?></td>

    <td>R$ <?= number_format($brinquedo["preco"], 2, ",", ".") ?></td>

    <td><?= $brinquedo["quantidade"] ?></td>

    <td>
        <a href="editar.php?id=<?= $brinquedo["id"] ?>">Editar</a>
        |
        <a href="excluir.php?id=<?= $brinquedo["id"] ?>"
           onclick="return confirm('Tem certeza que deseja excluir?')">
           Excluir
        </a>
    </td>

</tr>

<?php endwhile; ?>

</table>

</body>
</html>