<?php
include("config/db.php");

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$papel = $_POST['papel'];
$tema = $_POST['tema'];

/* UPLOAD DA IMAGEM */
$foto = $_FILES['foto'];

$nomeArquivo = time() . "_" . $foto['name'];
$caminho = "img/avatars/" . $nomeArquivo;

move_uploaded_file($foto['tmp_name'], $caminho);

/* SALVAR NO BANCO */
$sql = "INSERT INTO membros (nome, idade, papel, foto, tema)
        VALUES ('$nome', '$idade', '$papel', '$caminho', '$tema')";

$conn->query($sql);

/* REDIRECIONA */
header("Location: perfil.php");
?>