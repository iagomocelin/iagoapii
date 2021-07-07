<?php
$csvFile = file('netflix_titles.csv');
foreach ($csvFile as $line) {
    $umRegistro = str_getcsv($line);
    
    }

    if(isset($_POST["tipo"]) == true){
        $tipo = $_POST["tipo"];
        echo "TIPO: " . $tipo . "<br>";
    }
    if(isset($_POST["pais"]) == true && $_POST["pais"] != ""){
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
?>
