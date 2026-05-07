<?php
#confesso que quebrei a cabeça pra fazer esse código de função e todas essas
#variáveis, então usei um pouquinho de IA.. Mas eu ajustei do meu jeito!!

session_start();

$nome = $_POST["nome"];
$idade = $_POST["idade"];
$escola = $_POST["escola"];
$materia = $_POST["materia"];

$_SESSION["nome"] = $nome;
$_SESSION["idade"] = $idade;
$_SESSION["escola"] = $escola;
$_SESSION["materia"] = $materia;

function faixaEtaria($idade){
    if($idade <= 13){
        return "13-";
    }
    elseif($idade >= 14 && $idade <= 16){
        return "14-16";
    }
    else{
        return "17+";
    }
}

$perfis = [
    ["nome" => "Ana Clara",
     "idade" => 15,
     "escola" => "Guido Arzua",
     "materia" => "Matemática",
     "descricao" => "Ama matemática e café ☕"],

    ["nome" => "Lucas",
     "idade" => 16,
     "escola" => "Flavio F. da Luz",
     "materia" => "História",
     "descricao" => "Procuro alguém para estudar provas!"],

    ["nome" => "Beatriz",
     "idade" => 13,
     "escola" => "Guido Arzua",
     "materia" => "Ciências",
     "descricao" => "Gosto de estudar em grupo :)"],

    ["nome" => "Rafael",
     "idade" => 18,
     "escola" => "Benedicto J. Cordeiro",
     "materia" => "Física",
     "descricao" => "Focado em vestibular."],

    ["nome" => "Marina",
     "idade" => 14,
     "escola" => "Guido Arzua",
     "materia" => "Português",
     "descricao" => "Adoro leitura e redação!"],

    ["nome" => "Pedro",
     "idade" => 17,
     "escola" => "Flavio F. da Luz",
     "materia" => "Química",
     "descricao" => "Quero melhorar minhas notas."],

    ["nome" => "Sofia",
     "idade" => 15,
     "escola" => "Guido Arzua",
     "materia" => "Biologia",
     "descricao" => "Busco companhia para estudar no intervalo."],

    ["nome" => "João",
     "idade" => 12,
     "escola" => "Benedicto J. Cordeiro",
     "materia" => "Geografia",
     "descricao" => "Gosto de mapas e curiosidades 🌎"],

    ["nome" => "Gabriela",
     "idade" => 16,
     "escola" => "Flavio F. da Luz",
     "materia" => "Inglês",
     "descricao" => "Quero praticar conversação!"
    ],

    ["nome" => "Thiago",
     "idade" => 18,
     "escola" => "Benedicto J. Cordeiro",
     "materia" => "Matemática",
     "descricao" => "Estudando para o ENEM 🤩"],

    ["nome" => "Joana",
     "idade" => 17,
     "escola" => "Guido Arzua",
     "materia" => "Química",
     "descricao" => "Quero praticar exercícios e tirar dúvidas!"],

    ["nome" => "Milena",
     "idade" => 17,
     "escola" => "Guido Arzua",
     "materia" => "Física",
     "descricao" => "Tenho uma dificuldade gigante em física, mas quero melhorar!😌"],

];

$faixaUsuario = faixaEtaria($idade);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Home | Match Estudantil</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
<a href="index.php" id="btn-voltar"><i class="fa-solid fa-arrow-left"></i></a>
<a href="perfil.php" class="perfil-btn"><i class="fa-solid fa-user"></i></a>

<div class="container">
    <h1>Bem-vindo(a), <?php echo $nome; ?> 🩷</h1>
    <p>Escola:
        <strong><?php echo $escola; ?></strong></p>
    <p>Faixa etária:
        <strong><?php echo $faixaUsuario; ?></strong></p>
    <p>Matéria de interesse:
        <strong><?php echo $materia; ?></strong></p>

    <h2>Parceiros compatíveis ✨</h2>

<?php
$encontrou = false;
foreach($perfis as $perfil){
    $faixaPerfil = faixaEtaria($perfil["idade"]);
    if(
        $perfil["escola"] == $escola
        &&
        $faixaPerfil == $faixaUsuario
    ){

        $encontrou = true;
?>
    <div class="card">
        <h3><?php echo $perfil["nome"]; ?></h3>
        <p><?php echo $perfil["idade"]; ?> anos</p>
        <p><?php echo $perfil["escola"]; ?></p>
        <p>Matéria favorita:
            <strong><?php echo $perfil["materia"]; ?></strong></p>
        <p><?php echo $perfil["descricao"]; ?></p>

        <button onclick="alert('Uau! Você encontrou um parceiro de estudos para <?php echo $perfil['materia']; ?>!! 🩷')">Dar Match 🩷</button>
    </div>
<?php
    }
}
if(!$encontrou){
    echo "
    <div class='sem-match'>Nenhum parceiro compatível encontrado 😿</div>
    ";
}
?>

</div>
</body>
</html>