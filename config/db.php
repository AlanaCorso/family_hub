<?php
$host = "localhost";
$user = "teste";
$pass = "Senai@118";
$db = "familyhub";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erro: " . $conn->connect_error);
}
?>