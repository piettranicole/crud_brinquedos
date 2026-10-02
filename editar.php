<?php

include "conexao.php";

$id = $_GET["id"];

$sql = "SELECT * FROM brinquedos WHERE id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

$resultado = $stmt->get_result();
$brinquedo = $resultado->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Brinquedo</title>
</head>
<body>

<h1>Editar Brinquedo</h1>

<form action="atualizar.php" method="POST">

    <input type="hidden" name="id" value="<?php echo $brinquedo["id"]; ?>">

    <label>Nome:</label>
    <input type="text" name="nome" value="<?php echo $brinquedo["nome"]; ?>" required>
    <br><br>

    <label>Categoria:</label>
    <input type="text" name="categoria" value="<?php echo $brinquedo["categoria"]; ?>" required>
    <br><br>

    <label>Faixa etária:</label>
    <input type="text" name="faixa_etaria" value="<?php echo $brinquedo["faixa_etaria"]; ?>" required>
    <br><br>

    <label>Preço:</label>
    <input type="number" name="preco" step="0.01" value="<?php echo $brinquedo["preco"]; ?>" required>
    <br><br>

    <label>Quantidade:</label>
    <input type="number" name="quantidade" value="<?php echo $brinquedo["quantidade"]; ?>" required>
    <br><br>

    <button type="submit">Atualizar</button>

</form>

<br>

<a href="index.php">Voltar</a>

</body>
</html>