<!DOCTYPE html>
<html>

<head>
    <title>Gerenciamento de Fichas de Personagens</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Gerenciamento de Fichas de Personagens</h1>

    <h2>Criar Ficha de Personagem</h2>
    <form method="POST" action="crud.php">
        <label>Nome:</label>
        <input type="text" name="nome" required><br>

        <label for="classe"> Classe desejada:
            <select id="classe">
                <option value="Guerreiro">Guerreiro</option>
                <option value="Mago">Mago</option>
                <option value="Atirador">Atirador</option>
                <option value="Assassino" selected>Assassino</option>
            </select>
        </label>

        <input type="submit" name="create" value="Criar">
    </form>

    <h2>Buscar Ficha de Personagem</h2>
    <form method="GET" action="crud.php">
        <label>ID:</label>
        <input type="number" name="caracterId" required><br>
        <input type="submit" name="read" value="Buscar">
    </form>

    <h2>Atualizar Ficha de Personagem</h2>
    <form method="POST" action="crud.php">
        <label>ID:</label>
        <input type="number" name="caracterId" required><br>
        <label>Nome:</label>
        <input type="text" name="name" required><br>
        <label>Sorte:</label>
        <input type="number" name="sorte" required><br>
        <label>Dano do Item:</label>
        <input type="number" name="item dano" required><br>
        <label>Destreza:</label>
        <input type="number" name="destreza" required><br>
        <label>Inteligência:</label>
        <input type="number" name="inteligencia" required><br>
        <label>Força:</label>
        <input type="number" name="vida" required><br>
        <input type="submit" name="update" value="Atualizar">
    </form>

    <h2>Deletar Ficha de Personagem</h2>
    <form method="POST" action="crud.php">
        <label>ID:</label>
        <input type="number" name="caracterId" required><br>
        <input type="submit" name="delete" value="Deletar">
    </form>
</body>

</html>