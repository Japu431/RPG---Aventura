<body>

    <h1>Okay</h1>
    <?php
    // Configurações do banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "admin";
    $dbname = "jornada_rpg";

    // Conexão com o banco de dados
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Função para criar uma ficha de personagem
    function criarJogador($name, $classe, $sorte, $item_dano, $destreza, $inteligencia, $forca)
    {
        global $conn;

        if ($classe == "Mago") {
            $item_dano = 20;
            $inteligencia = 25;
            $hp = 50;
            $sorte = 0;
            $destreza = 2;
            $forca = $item_dano * 2;
        } else if ($classe == "Guerreiro") {
            $item_dano = 10;
            $inteligencia = 10;
            $hp = 100;
            $destreza = 5;

            $forca = $item_dano * 2;
        } else if ($classe == "Assassino") {
            $item_dano = 15;
            $inteligencia = 15;
            $hp = 75;
            $destreza = 10;

            $forca = $item_dano * 2;
        } else if ($classe == "Arqueiro") {
            $item_dano = 20;
            $inteligencia = 20;
            $hp = 50;
            $destreza = 4;
            $forca = $item_dano * 2;
        }

        $sql = "INSERT INTO jogador (name, classe, hp, sorte, item_dano, destreza, inteligencia, forca) 
    VALUES ($name,$classe, $hp,$sorte, $item_dano, $destreza, $inteligencia, $forca)";

        if ($conn->query($sql) === TRUE) {
            echo "Ficha de personagem criada com sucesso.";
        } else {
            echo "Erro ao criar a ficha de personagem: " . $conn->error;
        }
    }

    // Função para ler uma ficha de personagem
    function readCaracter($caracterId)
    {
        global $conn;

        $sql = "SELECT * FROM fichas_personagens WHERE id = $caracterId";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $caracter = $result->fetch_assoc();
            echo "ID: " . $caracter["id"] . "<br>";
            echo "Nome: " . $caracter["name"] . "<br>";
            echo "Classe: " . $caracter["classe"] . "<br>";
            echo "Vida: " . $caracter["hp"] . "<br>";
            echo "Sorte: " . $caracter["sorte"] . "<br>";
            echo "Dano do Item: " . $caracter["item_dano"] . "<br>";
            echo "Destreza: " . $caracter["destreza"] . "<br>";
            echo "Inteligência: " . $caracter["inteligencia"] . "<br>";
            echo "Força: " . $caracter["forca"] . "<br>";
        } else {
            echo "Ficha de personagem não encontrada.";
        }
    }

    // Função para atualizar uma ficha de personagem
    function updateCaracter($caracterId, $name, $classe, $hp, $sorte, $item_dano, $destreza, $inteligencia, $forca)
    {
        global $conn;

        $sql = "UPDATE fichas_personagens SET 
            nome = '$name',
            classe = $classe,
            hp = $hp,
            sorte = $sorte,
            item_dano = $item_dano,
            destreza = $destreza,
            inteligencia = $inteligencia,
            forca = $forca
            WHERE id = $caracterId";

        if ($conn->query($sql) === TRUE) {
            echo "Ficha de personagem atualizada com sucesso.";
        } else {
            echo "Erro ao atualizar a ficha de personagem: " . $conn->error;
        }
    }

    // Função para deletar uma ficha de personagem
    function deleteCaracter($caracterId)
    {
        global $conn;

        $sql = "DELETE FROM fichas_personagens WHERE id = $caracterId";

        if ($conn->query($sql) === TRUE) {
            echo "Ficha de personagem deletada com sucesso.";
        } else {
            echo "Erro ao deletar a ficha de personagem: " . $conn->error;
        }
    }

    $conn->close();

    ?>
</body>