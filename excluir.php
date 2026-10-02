<?php

include "conexao.php";

$id = $_GET["id"];

$sql = "DELETE FROM brinquedos WHERE id = ?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    header("Location: index.php");
} else {
    echo "Erro ao excluir o brinquedo.";
}

?>