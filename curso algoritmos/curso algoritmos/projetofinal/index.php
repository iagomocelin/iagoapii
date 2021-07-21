<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Netflix Roulette</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="static/style.css">
    </head>

    <body>

        <?php
            $csvFile = file('static/netflix_titles.csv');
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
    
    <!-- navbar -->
    <nav class="navbar navbar-light bg-light">
        <div class="container-md">
            <a class="navbar-brand" href="#"><img src="static/img/Netflix_icon.svg" height="30px" width="auto" class="d-inline-block align-text-top">Roulette</a>
            <span class="navbar-text">What are you gonna watch today?</span>
        </div>
    </nav>
    
    <div class="container-md">
        <button type="button" class="btn btn-danger btn-lg" id="start">Start</button>

        <form method='post' action='brain.php'>

            <!-- tipo -->
            <div id="tipo" >
                <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-4 pt-0">Do you want to watch a movie or start a new series?</legend>
                    <div class="col-sm-8">
                        <div class="form-check" >
                            <input class="form-check-input" type="radio" name="tipo" value="Movie" id="flexRadioDefault1" checked>
                            <label class="form-check-label" for="flexRadioDefault1">Movie</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tipo" value="TV Show" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">TV Show</label>
                        </div>
                    </div>
                </fieldset>
            </div>
            

            <!-- país -->
            <div id="pais">
                <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-4 pt-0">Where do you want it to be from?</legend>
                    <div class="col-sm-8">
                        <select class="form-select" name='pais'>
                            <option value="">-- any country --</option>"
                            <?php
                                foreach($paises as $umPais){
                                    echo("<option value='" . $umPais . "'>" . $umPais . "</option>");
                                }
                            ?>
                        </select>
                    </div>
                </fieldset>
            </div>
        

            <!-- período -->
            <div id="periodo">
                <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-4 pt-0">And when should it be from?</legend>
                    <div class="col-sm-8">
                        <div class="min-max-slider" data-legendnum="2">
                            <input id="min" class="min" name="min" type="range" step="1" min="1950" max="2021.5" required/>
                            <input id="max" class="max" name="max" type="range" step="1" min="1950" max="2021.5" required/>
                        </div>
                    </div>
                </fieldset>
            </div>
        
            <!-- categorias -->
            <div id="categoria">
                <fieldset class="row mb-3">
                    <div class="col-sm-4 pt-0">
                        <legend class="col-form-label ">Which of the following categories are you interested in?</legend>
                        <input name='categoria[]' class='form-check-input' type='checkbox' id="checkall">
                        <label class='form-check-label' for='flexCheckChecked' ><strong id="labelcheck">Check all</strong></label>
                    </div>
            
                    <div class="col-sm-8">
                        <div class='form-check form-check-inline'>
                            <?php
                            foreach($classificacoes as $umaClassificacao){
                                echo("<div class='form-check form-check-inline'><input name='categoria[]' class='form-check-input' type='checkbox' value= '" . $umaClassificacao . "'><label class='form-check-label' for='flexCheckChecked'>" . $umaClassificacao . "</label></div>");
                            }
                            ?>
                        </div>
                    </div>
                </fieldset>
                
                <!-- botão enviar -->
                <input name="btnEnviar" class="btn btn-primary disabled" type="submit" value="Let's go!" id="botao">

            </div>

            </form>

    </div>
    
    <script src="static/script.js"></script>

</body>
</html>
