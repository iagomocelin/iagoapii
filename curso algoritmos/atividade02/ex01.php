<?php

/*for ($i = 1; $i <=20; $i++){
    $random = rand(100, 200);
    echo $random;
    echo "<br>";
}*/

$i = 1;
do {
    $random = rand(100, 200);
    echo $random;
    echo "<br>";
    $i++;
} while ($i <= 20);