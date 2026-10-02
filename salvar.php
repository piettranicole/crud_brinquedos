<?php

require_once "conexao.php";

$nome = trim($_POST["nome"] ?? "");
$categoria = trim($_POST["categoria"] ?? "");
$faixa_etaria = trim($_POST["faixa_etaria"] ?? "");
$preco = $_POST["preco"] ?? "";
$quantidade = $_POST["quantidade"] ?? "";

if (
    $nome === "" ||
    $categoria === "" ||
    $faixa_etaria === "" ||
    $preco === "" ||
    $quantidade === ""
) {
    die("Preencha todos os campos.");
}

if (!is_numeric($preco) || $preco < 0) {
    die("Preço inválido.");
}

if (!filter_var($quantidade, FILTER_VALIDATE_INT) && $quantidade != 0) {
    die("Quantidade inválida.");
}

$sql = "INSERT INTO brinquedos 
        (nome, categoria, faixa_etaria, preco, quantidade)
        VALUES (?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param(
    "sssdi",
    $nome,
    $categoria,
    $faixa_etaria,
    $preco,
    $quantidade
);

if ($stmt->execute()) {
    header("Location: index.php");
    exit;
}

echo "Erro ao cadastrar: " . $stmt->error;
?>