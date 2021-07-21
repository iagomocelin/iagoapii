<?php

$valor = 10;
$valor += 5;
echo $valor;
//echo 10/5;


$valor1 = 5;
$valor2 = 10;
echo ($valor1 !== $valor2);

($valor1 == $valor2) ? $resultado = true : $resultado = false;
var_dump($resultado);

$v1 = 10;
$v1++;
$v2 = ++$v1;
echo($v2. '<br/>');
echo($v1. ' - ' .$v2);

$verd = true;
$falso = false;
echo('<br/> AND:');
var_dump($verd && $falso);
echo('OR:');
var_dump($verd || $falso);
echo('NOT:');
var_dump(!($falso));

$nome = 'Iago';
$sobrenome = 'Mocelin';
echo $nome. ' ' .$sobrenome;
