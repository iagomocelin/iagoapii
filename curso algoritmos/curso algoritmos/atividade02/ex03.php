<?php

$vetor = array();
for ($i = 1; $i <=5; $i++){
    $random = rand(0, 10);
    array_push($vetor, $random);
};

/*
var_dump($vetor);
echo "O menor valor do array é " . min($vetor) . ". <br>";
echo "O maior valor do array é " . max($vetor). ".";
*/

$min = 10;
$max = 0;
foreach($vetor as &$value){
    if ($value < $min){
        $min = $value;
    }
    if ($value > $max){
        $max = $value;
    }
}
echo "Menor: " . $min . "<br>";
echo "Maior: " . $max;