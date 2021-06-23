<?php

//código referente ao vídeo https://www.youtube.com/watch?v=E0O3sFsqFGU

//******************************************************************
//********************** Funções de string *************************
//******************************************************************

//declarando um string que será usada nos testes
$nome = "Tiago Rios da Rocha";

//pegando o tamanho de uma string
echo("a qtd de caracteres desta string é: " . strlen($nome) . "<br>");

//pegando parte de uma string, começando na posição 0, pegando 5 caracteres
echo("pegando a substring inicial: " . strtoupper(substr($nome,0,5)) . "<br>");

//pegando parte de uma string, começando na posição 14 e indo até o final
echo("pegando a substring final: " . strtoupper(substr($nome,14)) . "<br>");

//transformando a string para minúscula e imprimindo
echo(strtolower("TIAGO RIOS DA ROCHA EM MAIÚSCULO") . "<br>");

//transformando a string em maiúscula e imprimindo
echo(strtoupper("tiago rios da rocha em minúsculo" . "<br>"));

//quebrando a string a partir dos caracteres de espaço e armazenando cada elemento em um vetor
$stringEmVetor = explode(" ",$nome);

//percorrendo cada elemento do vetor e imprimindo seus elementos
foreach($stringEmVetor as $umElemento){
    echo("- Pedaço da string: " . $umElemento . "<br>");
}

//******************************************************************
//********************** Funções de array **************************
//******************************************************************

//declarei um vetor com alguns elementos para os testes
$vetorAleatorio = array(33,5345,656,232,5454,67,23,4,5,7,8);

//chamando uma função que devolve a soma de todos os elementos de um vetor
echo("A soma de todos os elementos do vetor é: " . array_sum($vetorAleatorio) . "<br>");

//imprimindo todos os elementos de um vetor usando o laço de repetição foreach
echo("Imprimindo todos os valores do vetor:");
foreach($vetorAleatorio as $umElemento){
    echo($umElemento . " ");
}

//chamando uma função que irá ordenar todos os elementos do vetor em forma decrescente
arsort($vetorAleatorio);

//imprimindo todos os elementos de um vetor usando o laço de repetição foreach
echo("<br>Imprimindo todos os valores do vetor - decrescente:");
foreach($vetorAleatorio as $umElemento){
    echo($umElemento . " ");
}

//chamando uma função que irá ordenar todos os elementos do vetor em forma crescente
sort($vetorAleatorio);

//imprimindo todos os elementos de um vetor usando o laço de repetição foreach
echo("<br>Imprimindo todos os valores do vetor - crescente:");
foreach($vetorAleatorio as $umElemento){
    echo($umElemento . " ");
}

//******************************************************************
//********************** Funções de array **************************
//**************** Criando suas próprias funções *******************
//******************************************************************

//criei uma função que tem um comando de imprimir na tela
//esta função não recebe parâmetro e não tem retorno
function ola(){
    echo "<h3>Olá!!!</h3>";
}

//chamando 10 vezes a função ola
for($i=0; $i<10; $i++){
    ola();
}

//crei uma função que não recebe parâmetro e tem retorno, no caso, uma string
function ola2(){
    return "string dentro da função ola2!!!";
}

//chamando a função ola2, que irá devolver uma string no retorno
echo("vou chamar a função ola2: " . ola2());

//crei uma função que recebe 2 parâmetros e retorna o resultado da soma
function soma($el1, $el2){
    return $el1 + $el2;
}

//chamando a função soma, que irá retornar o resultado de 2 e 2
echo("<br>O resultado da soma de 2 + 2 é: " . soma(2,2));

?>







