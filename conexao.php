<?php  

$host = "localhost";
$user = "root";
$password = "";
$database = "cadastro";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("erro na conexão: " . $conn->connect_error);
}

$conn->set_charset("utf8");
?>