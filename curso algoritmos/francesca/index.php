<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo.css"/>
		<title> DICAFLIX </title>
	</head>

	<body>
		<?php
		$csvFile = file('netflix_titles.csv');
            $paises = [];
            $classificacoes = [];
                
            foreach ($csvFile as $line) {
                $umRegistro = str_getcsv($line); //cada linha é um registro
                if (!empty($umRegistro[5])){
                    $arrayPaises = str_getcsv($umRegistro[5]);  //todos os países da linha
                    foreach($arrayPaises as $umPais ){
                        if( in_array($umPais, $paises) == false && $umPais != "") {
                            $paises[] = $umPais;
                        }    
                    }
                }
            }

            sort($paises);
        ?>

		<form action="netflix.php" name="formulario" method="post">

			Filme ou Série? 
			<input class="form-check-input" type="radio" name="tipo" value="Movie" id="flexRadioDefault1" checked>
                            <label class="form-check-label" for="flexRadioDefault1">Movie</label>
			<input class="form-check-input" type="radio" name="tipo" value="TV Show" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">TV Show</label>

			Nacionalidade do Filme: 
			<select name="nacionalidade">
				<?php
                    foreach($paises as $umPais){
                        echo("<option value='" . $umPais . "'>" . $umPais . "</option>");
                    }
                ?>
				  
			</select>

			Ano de Lançamento:
			<select name="lancamento">
				  <option value="2020">2020</option>
				  <option value="2019">2019</option>
				  <option value="outros">Outros</option>
			</select>

			

			<input name="btnenviar" type="submit" value="Botão Enviar">
		</form>
	</body>
</html>