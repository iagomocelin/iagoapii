<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>
<body>
<?php
    $possibilidades = [];
    $csvFile = file('netflix_titles.csv');
    

    if(isset($_POST["tipo"]) == true){
        $tipo = $_POST["tipo"];
        echo "TIPO: " . $tipo . "<br>";
    }

    if(isset($_POST["pais"]) == true){
		$pais = $_POST["pais"]; //transformo a seleção em uma variável
		echo "o pais selecionado foi: " . $pais . "<br>"; //imprimo uma mensagem para o usuário
	}

    if(isset($_POST["categoria"]) == true){
        $vetorCategoria = $_POST["categoria"];
        foreach($vetorCategoria as $categoria){
            echo " - " . $categoria . "<br>";
        }
    }

    if(isset($_POST["min"]) == true){
        $min = $_POST["min"];
        echo "início do período: " . $min . "<br>";
    }

    if(isset($_POST["max"]) == true){
        $max = (int)$_POST["max"];
        echo "fim do período: " . $max . "<br>";
    }
    
    

    foreach ($csvFile as $line) {
        $umRegistro = str_getcsv($line);
        if (!empty($umRegistro[5]) && !empty($umRegistro[10])){

        $categorias = explode(",", $umRegistro[10]);
        $paiss = ltrim($pais); // precisa tirar o espaço da frente para ele reconhecer o paíde corretamente
            $tempais = strpos($umRegistro[5], $paiss);
            $temcategoria = strpos($umRegistro[10], $categoria);

            if ($umRegistro[1] == $tipo && $tempais !== false && $temcategoria!== false && $umRegistro[7] >= $min && $umRegistro[7] <= $max){
                    $possibilidades[] = $umRegistro;

                }

            }
        }
    
    $sugestao = $possibilidades[rand(0, count($possibilidades))];
    echo($sugestao[2] . "<br>");
    echo($sugestao[10] . "<br>");
    echo($sugestao[7] . "<br>");
?>
</body>
</html>