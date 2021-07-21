<html>
<style>
table {
  border-spacing: 20px 0;
  padding: 20px;
}

</style>
<body>
<h3>Filmes Brasileiros da Netflix lançados em 2020</h3>
<table style="border: 1px solid black; ">
<tr>
    <td><b>Título Internacional</b></td>
    <td><b>Data de Atualização</b></td>
</tr>
<?php

    //Listar o título (índice 2) de todos os filmes (índice 1), que foram feitos no Brasil (índice 5) e que foram atualizados no ano de "2020" (índice 7)
 
 
    $csvFile = file('netflix_titles.csv');
    foreach ($csvFile as $line) {
        $umRegistro = str_getcsv($line);
        if (!empty($umRegistro[5])){

            $temBrasil = strpos($umRegistro[5], 'Brazil');
            
            if ($umRegistro[1] == "Movie" && $temBrasil !== false && $umRegistro[7] == "2020"){  
                echo("<tr>");
                echo("<td>");
                echo($umRegistro[2]);    
                echo("</td>");
                echo("<td>");
                echo($umRegistro[6]);
                echo("</td>");
                echo("</tr>");
            }
        }

    }
    ?>
    </table>
    <p>Vá sortear um filme para assistir hoje! <a href="rand.php">Clique aqui agora</a></p>
</body>
</html>