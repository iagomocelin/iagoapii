<html>
<head>
    </head>
<body>

<?php

    if(isset($_POST["nome"]) == true){
        $nome = $_POST["nome"];
        echo "Os dados informados por " . $nome . " são os que seguem: <br>";
    }
    if(isset($_POST["genero"]) == true){
        $genero = $_POST["genero"];
        echo "GÊNERO: " . $genero . "<br>";
    }
    if(isset($_POST["olhos"]) == true){
        $olhos = $_POST["olhos"];
        echo "COR DOS OLHOS: " . $olhos . "<br>";
    }
    if(isset($_POST["porte"]) == true){
        $vetorPorte = $_POST["porte"];
        echo "PORTE FÍSICO: ";
        foreach($vetorPorte as $porte){
            echo " - " . $porte . "<br>";
        }
    }
    if(isset($_POST["aptidao"]) == true){
        $aptidao = $_POST["aptidao"];
        echo "APTIDÃO FÍSICA: " . $aptidao . "<br>";
    }


?>
</body>
</html>