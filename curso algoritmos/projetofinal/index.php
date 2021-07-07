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

        if (!empty($umRegistro[10])){
        $arrayClassificacoes = str_getcsv($umRegistro[10]); //todas as classificações da linha
            foreach($arrayClassificacoes as $umaClassificacao){
                if(in_array($umaClassificacao, $classificacoes) == false && $umaClassificacao != ""  ) {

                    $classificacoes[] = $umaClassificacao;
                }    
            }        
            
        }   
        }

        sort($paises);
        sort($classificacoes);
    ?>
    
    <div class="container-md">
    <form method='post' action='brain.php'>

        <!-- tipo -->
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="tipo" value="Movie" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                Movie
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="tipo" value="TV Show" id="flexRadioDefault2">
            <label class="form-check-label" for="flexRadioDefault2">
                TV Show
            </label>
        </div>

        <br>

        <!-- país -->
        Countries:
        <select name='pais'>
            <option value="">-- any country --</option>"
            <?php
                foreach($paises as $umPais){
                    echo("<option value='" . $umPais . "'>" . $umPais . "</option>");
                }
            ?>
        </select>

        <br>

        <!-- categorias -->
        <label class="col-sm-2 col-form-label">Categories:</label>
        <div class="col-sm-10">
        <?php
            foreach($classificacoes as $umaClassificacao){
                echo("<div class='form-check form-check-inline'><input name='categoria[]' class='form-check-input' type='checkbox' value= '" . $umaClassificacao . "'><label class='form-check-label' for='flexCheckChecked'>" . $umaClassificacao . "</label></div>");
            }
            ?>
        </div>
            
        <!-- período -->
        <div class="min-max-slider" data-legendnum="2">
            <label>Beginning Year</label>
            <input id="min" class="min" name="min" type="range" step="1" min="1950" max="2021.5" />
            <label>Last Year</label>
            <input id="max" class="max" name="max" type="range" step="1" min="1950" max="2021.5" />
        </div>

        <!-- submit -->
        <input name="btnEnviar" type="submit" value="Let's go!">
    </form>
    </div>
    
    <script src="script.js"></script>

</body>
</html>