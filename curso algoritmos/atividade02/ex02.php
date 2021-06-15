<?php

$i = 1;
$three = 0;
$vetor = array();
while($i <= 20){
    $random = rand(0, 5);
    if ($random == 3){
        $three++;
    }
    array_push($vetor, $random);
    $i++;
}
var_dump($vetor);
echo("O número 3 apareceu ". $three . " vezes nesta lista.");