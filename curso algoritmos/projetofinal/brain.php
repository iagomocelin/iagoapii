<!DOCTYPE html>
<html>
<head>
<title>Netflix Roulette</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="static/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">
</head>
<body>
<div class="container-md">
<?php
    error_reporting(E_ERROR | E_WARNING | E_PARSE);

    $possibilidades = [];
    $csvFile = file('static/netflix_titles.csv');
    

    if(isset($_POST["tipo"]) == true){
        $tipo = $_POST["tipo"];
        //echo "TIPO: " . $tipo . "<br>";
    }

    if(isset($_POST["pais"]) == true && $_POST["pais"] != ""){
		$pais = $_POST["pais"]; //transformo a seleção em uma variável
		/*echo "o pais selecionado foi: " . $pais . "<br>"; //imprimo uma mensagem para o usuário
	}else{
        echo("error");*/
    }

    if(isset($_POST["categoria"]) == true){
        $vetorCategoria = $_POST["categoria"];
        if($vetorCategoria[0] == "on"){
            array_shift($vetorCategoria);
        }
        /*foreach($vetorCategoria as $categoria){
            echo " - " . $categoria . "<br>";
        }*/
    }

    if(isset($_POST["min"]) == true){
        $min = $_POST["min"];
        //echo "início do período: " . $min . "<br>";
    }

    if(isset($_POST["max"]) == true){
        $max = (int)$_POST["max"];
        //echo "fim do período: " . $max . "<br>";
    }
    
    

    foreach ($csvFile as $line) {
        $umRegistro = str_getcsv($line);
        if (!empty($umRegistro[5]) && !empty($umRegistro[10])){

        $categorias = explode(",", $umRegistro[10]);
        $paiss = ltrim($pais); // precisa tirar o espaço da frente para ele reconhecer o paíde corretamente
            $tempais = strpos($umRegistro[5], $paiss);
            $jesus = array_intersect($vetorCategoria, $categorias);

            if ($umRegistro[1] == $tipo && $tempais !== false && !empty($jesus) && $umRegistro[7] >= $min && $umRegistro[7] <= $max){
                    $possibilidades[] = $umRegistro;

                }

            }
        }
        $sugestao = $possibilidades[rand(0, count($possibilidades))];

        if (!empty($sugestao)){
            echo("<div class='col-sm-7'><h2>" . $sugestao[2] . "</h2>");
            echo("<p id='sinopse'>". $sugestao[11] . "</p>");
            echo("<p>". $sugestao[7] . ". " . $sugestao[10] . ". " . $sugestao[5] . ".</p>");
        } else {
            echo("nada encontrado");
        }
        $titulopreparado = str_replace(' ', '%20', $sugestao[2]);
        echo("<p>*Please note that not all videos are available on Netflix everywhere. <a href='https://www.netflix.com/search?q=" . $titulopreparado . "'  target='_blank'> Check if this one is available to you.</a></p></div>")

   
?>
</div>
</body>
</html>