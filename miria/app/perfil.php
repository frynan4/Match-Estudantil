<?php
session_start();

if(!isset($_SESSION["nome"])){
    header("Location: index.php");
    exit();
}

$nome = $_SESSION["nome"];
$idade = $_SESSION["idade"];
$escola = $_SESSION["escola"];
$materia = $_SESSION["materia"];

if(!isset($_SESSION["descricao"])){
    $_SESSION["descricao"] =
    "Amo estudar em grupo e conhecer pessoas novas para estudar durante o intervalo ✨";
}
if(isset($_POST["novaDescricao"])){
    $_SESSION["descricao"] =
    $_POST["novaDescricao"];
}
$descricao = $_SESSION["descricao"];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Perfil | Match Estudantil</title>
    <link rel="stylesheet" href="perfil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
<a href="home.php" id="btn-voltar"><i class="fa-solid fa-arrow-left"></i></a>

<div class="container">
    <div class="perfil-card">
        <img src="../assets/gatito.jpg"
             alt="Foto de perfil"
             class="foto">
        <h1><?php echo $nome; ?> 🩷</h1>
        <p class="idade"><?php echo $idade; ?> anos</p>
        <p class="escola"><?php echo $escola; ?></p>

        <div class="materias">
            <span><?php echo $materia; ?></span>
        </div>
        <p class="descricao"><?php echo $descricao; ?></p>

        <form method="POST" class="form-descricao">
    <textarea
        name="novaDescricao"
        placeholder="Edite sua descrição..."
        required>
    </textarea>
    <button type="submit">Salvar descrição 🩷</button>

</form>
    </div>
</div>
</body>
</html>