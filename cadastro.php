<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Brinquedo</title>
</head>
<body>

<h1>Cadastrar Brinquedo</h1>

<form action="salvar.php" method="POST">

    <label>Nome:</label>
    <input type="text" name="nome" required>
    <br><br>

    <label>Categoria:</label>
    <input type="text" name="categoria" required>
    <br><br>

    <label>Faixa etária:</label>
    <input type="text" name="faixa_etaria" required>
    <br><br>

    <label>Preço:</label>
    <input type="number" name="preco" step="0.01" min="0" required>
    <br><br>

    <label>Quantidade:</label>
    <input type="number" name="quantidade" min="0" required>
    <br><br>

    <button type="submit">Cadastrar</button>

</form>

<br>
<a href="index.php">Voltar</a>

</body>
</html>