<html>
<head></head>
<body>

<h1>meu primeiro form com php</h1>
<p>Dados são os que seguem:</p>

<?php
    /* método GET: passagem visível pelo URL -> nada seguro!!!!
    if(isset($_GET["nome"]) == true){
        $nome = $_GET["nome"];
        echo "Nome: " . $nome . "<br>";
    }
    if(isset($_GET["cpf"]) == true){
        $cpf = $_GET["cpf"];
        echo "CPF: " . $cpf . "<br>";
    }
    if(isset($_GET["endereco"]) == true){
        $endereco = $_GET["endereco"];
        echo "Endereço: " . $endereco . "<br>";
    } */

    if(isset($_POST["nome"]) == true){
        $nome = $_POST["nome"];
        echo "Nome: " . $nome . "<br>";
    }
    if(isset($_POST["cpf"]) == true){
        $cpf = $_POST["cpf"];
        echo "CPF: " . $cpf . "<br>";
    }
    if(isset($_POST["endereco"]) == true){
        $endereco = $_POST["endereco"];
        echo "Endereço: " . $endereco . "<br>";
    }



?>
</body>
</html>