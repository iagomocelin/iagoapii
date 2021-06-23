<html>
<body>
<h2>Nossa sugestão de filme é...</h2>
</body>
</html>
<?php

$filmes = [];
$csvFile = file('netflix_titles.csv');
foreach ($csvFile as $line) {
    $umRegistro = str_getcsv($line);
    $ehfilme = !empty($umRegistro[1]);
        if($ehfilme !== false && $umRegistro[1] == "Movie"){
            $filmes[] = $umRegistro;
        }
    }
    
    $numeroAleatorio = rand(0,count($filmes));
    $sugestao = $filmes[$numeroAleatorio];
    echo("<h3>" . $sugestao[2] . "</h3>");
    if (!empty($sugestao[5])){
        echo("<p><b>País: </b>" . $sugestao[5] . "</p>");
    }
    if (!empty($sugestao[7])){
    echo("<p><b>Ano: </b>" . $sugestao[7] .  "</p>");
}
    if (!empty($sugestao[3])){
    echo("<p><b>Direção: </b>" . $sugestao[3] .  "</p>");
}
    if (!empty($sugestao[4])){
    echo("<p><b>Elenco: </b>" . $sugestao[4] .  "</p>");
}
    if (!empty($sugestao[9])){
    echo("<p><b>Duração: </b>" . $sugestao[9] .  "</p>");
}
    if (!empty($sugestao[11])){
    echo("<p><b>Sinopse: </b>" . $sugestao[11] . "</p>");
}

?>