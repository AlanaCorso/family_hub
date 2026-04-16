<?php
include("../config/db.php");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST['nome'];
    $papel = $_POST['papel'];

    $conn->query("INSERT INTO membros (nome, papel) VALUES ('$nome','$papel')");
}
?>