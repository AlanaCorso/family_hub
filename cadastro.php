<?php include("config/db.php"); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Cadastrar Membro</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="login-box">
    <h2>Cadastrar Membro</h2>

    <form action="salvar_membro.php" method="POST" enctype="multipart/form-data">
        
        <input type="text" name="nome" placeholder="Nome" required>

        <input type="number" name="idade" placeholder="Idade" required>

        <select name="papel" required>
            <option value="">Selecione o papel</option>
            <option value="pai">Pai</option>
            <option value="mãe">Mãe</option>
            <option value="filho">Filho</option>
            <option value="filha">Filha</option>
        </select>

        <select name="tema" required>
            <option value="">Tema</option>
            <option value="azul">Azul</option>
            <option value="roxo">Roxo</option>
            <option value="verde">Verde</option>
            <option value="escuro">Escuro</option>
        </select>

        <input type="file" name="foto" accept="image/*" required>

        <button type="submit">Cadastrar</button>
    </form>
</div>

</body>
</html>