<?php include("config/db.php"); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Perfis</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<h1>Quem está usando?</h1>

<div class="perfis">
<?php
$result = $conn->query("SELECT * FROM membros");

while($m = $result->fetch_assoc()) {
    echo "
    <a href='dashboard.php?id=".$m['id_membro']."'>
        <div class='perfil'>
            <img src='".$m['foto']."'>
            <p>".$m['nome']."</p>
        </div>
    </a>
    ";
}
?>
</div>

<a href="cadastro.php">
    <div class="perfil">
        <img src="img/add.png">
        <p>Adicionar</p>
    </div>
</a>

</body>
</html>