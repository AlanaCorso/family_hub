<?php 
include("config/db.php");

$id = $_GET['id'];

$membro = $conn->query("SELECT * FROM membros WHERE id_membro = $id")->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Dashboard</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body class="tema-<?php echo $membro['tema']; ?>">

<div class="sidebar">
    <h2><?php echo $membro['nome']; ?></h2>
    <ul>
        <li>Dashboard</li>
        <li>Atividades</li>
        <li>Calendário</li>
    </ul>
</div>

<div class="main">

<h1>Resumo do Dia</h1>

<div class="cards">

<?php
$atividades = $conn->query("SELECT * FROM atividades WHERE id_membro = $id");

while($a = $atividades->fetch_assoc()) {
    echo "
    <div class='card'>
        <h3>".$a['descricao']."</h3>
        <p>".$a['tipo']."</p>
        <span>".$a['data']."</span>
    </div>
    ";
}
?>

</div>

</div>

</body>
</html>