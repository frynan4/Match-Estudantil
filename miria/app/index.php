<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro | Match Estudantil</title>
    <link rel="stylesheet" href="cadastro.css">
</head>
<body>

    <div class="container">
        <h1>Match Estudantil ꩜</h1>

        <p class="descricao">
            Encontre parceiros de estudo compatíveis com você!
        </p>

        <form action="home.php" method="POST">
            <input
                type="text"
                name="nome"
                placeholder="Seu nome"
                required
            >
            <input
                type="number"
                name="idade"
                placeholder="Sua idade"
                required
            >

            <select name="escola" required>
                <option value="">
                    Selecione sua escola
                </option>
                <option value="Guido Arzua">
                    Colégio E-Ef M. Guido Arzua
                </option>
                <option value="Flavio F. da Luz">
                    Colégio E-Ef M. Flavio F. da Luz
                </option>
                <option value="Benedicto J. Cordeiro">
                    Colégio E-Ef M. Benedicto J. Cordeiro
                </option>
            </select>

            <input
                type="text"
                name="materia"
                placeholder="Matéria que deseja estudar"
                required
            >

    <button type="submit">Encontrar parceiros 🩷</button>

        </form>
    </div>
</body>
</html>