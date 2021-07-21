<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>DICAFLIX</title>
	</head>

	<body>
		<h1> dados recebidos </h1>

		<?php

			$possibilidades = [];

			$csvFile = file('netflix_titles.csv');

			if(isset($_POST["tipo"]) == true){
	        		$tipo = $_POST["tipo"];
	        	}

	        if(isset($_POST["nacionalidade"]) == true){
	        		$nacionalidade = $_POST["nacionalidade"];
	        	}

	        if(isset($_POST["lancamento"]) == true){
	        		$lancamento = $_POST["lancamento"];
	        	}
$dados = [$tipo, $nacionalidade, $lancamento];
                var_dump($dados);
			foreach ($csvFile as $line) {
        		$umRegistro = str_getcsv($line);

        		
        			$pais = ltrim($nacionalidade);
        			//$tempais = strpos($umRegistro[5],$pais); //para ver se tem o pais dentro dalista que foi selecionada, mesmo que ele n esteja sozinho
        			if($umRegistro[1] == $tipo && $umRegistro[5] == $pais && $umRegistro[7] == $lancamento){
        				$possibilidades[] = $umRegistro;
        			}
        		}
			
			$sugestao = $possibilidades[rand(0, count($possibilidades))];

        		if(!empty($sugestao)){
        			echo($sugestao[2]);
        		}
        		else{
        			echo("Nada encontrado");
        		}
		?>

	</body>
</html>