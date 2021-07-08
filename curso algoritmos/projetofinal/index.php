<!DOCTYPE html>
<html>
    <head>
         <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
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
    }

        

        sort($paises);
        $classificacoes = ["Anime Features", "Action & Adventure", "Anime Series", "British TV Shows", "Children & Family Movies", "Classic & Cult TV", "Classic Movies", "Comedies", "Crime TV Shows", "Cult Movies", "Documentaries", "Docuseries", "Dramas", "Faith & Spirituality", "Horror Movies", "Independent Movies", "International Movies", "International TV Shows", "Kids' TV", "Korean TV Shows", "LGBTQ Movies", "Music & Musicals", "Reality TV", "Romantic Movies", "Romantic TV Shows", "Sci-Fi & Fantasy", "Science & Nature TV", "Spanish-Language TV Shows", "Sports", "Movies", "Stand-Up Comedy", "Stand-Up Comedy & Talk Shows", "Teen TV Shows", "Thrillers", "TV Action & Adventure", "TV Comedies", "TV Dramas", "TV Horror", "TV Mysteries", "TV Sci-Fi & Fantasy", "TV Thrillers", "TV Shows"];
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

    <!-- país -->
        <br>Countries:
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
        

    <div class="min-max-slider" data-legendnum="2">
    <label>Beginning Year</label>
    <input id="min" class="min" name="min" type="range" step="1" min="1950" max="2021.5" />
    <label>Last Year</label>
    <input id="max" class="max" name="max" type="range" step="1" min="1950" max="2021.5" />
</div>

    <input name="btnEnviar" type="submit" value="Let's go!">
    </form>
    </div>
    <script src="script.js"></script>

</body>
</html>