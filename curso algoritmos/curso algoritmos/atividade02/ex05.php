
<html>
<head>
<title>Tabela de dados a partir de um Array</title>
</head>

<body>
<h1>Tabela de dados a partir de um Array</h1>
<p>Este script php lista os elementos de um vetor</p>
<br>

<?php //bloco php

//notem que foi declarado um vetor, e em cada posição, há um novo vetor com os dados
$listaContatos = array( "100" => array("nome" => "Artemio", "telefone" => "111", "endereco" => "AAA"),
                        "101" => array("nome" => "Barbara", "telefone" => "222", "endereco" => "BBB"),
                        "102" => array("nome" => "Bianca", "telefone" => "333", "endereco" => "CCC"),
                        "103" => array("nome" => "Bruna", "telefone" => "444", "endereco" => "DDD"),
                        "104" => array("nome" => "Bruno", "telefone" => "555", "endereco" => "EEE"),
                        "105" => array("nome" => "Daniel", "telefone" => "666", "endereco" => "FFF"),
                        "106" => array("nome" => "Evelin", "telefone" => "777", "endereco" => "GGG"),
                        "107" => array("nome" => "Fernanda", "telefone" => "888", "endereco" => "HHH"),
                        "108" => array("nome" => "Francesca", "telefone" => "999", "endereco" => "III"),
                        "109" => array("nome" => "Gabriel", "telefone" => "111", "endereco" => "JJJ"),
                        "110" => array("nome" => "Iago", "telefone" => "222", "endereco" => "KKK"),
                        "111" => array("nome" => "João", "telefone" => "333", "endereco" => "LLL"),
                        "112" => array("nome" => "Laisa", "telefone" => "444", "endereco" => "MMM"),
                        "113" => array("nome" => "Lauany", "telefone" => "555", "endereco" => "NNN"),
                        "114" => array("nome" => "Leticia", "telefone" => "666", "endereco" => "OOO"),
                        "115" => array("nome" => "Lucas", "telefone" => "777", "endereco" => "PPP"),
                        "116" => array("nome" => "Lucineia", "telefone" => "888", "endereco" => "QQQ"),
                        "117" => array("nome" => "Luiza", "telefone" => "999", "endereco" => "RRR"));
?>

<table style="border: 1px solid black; ">
<tr>
    <td>Código</td>
    <td>Nome</td>
    <td>Telefone</td>
    <td>Endereço</td>
</tr>

<?php //bloco php

//laço de repetição para percorrer o vetor $listaContatos

//como é organizado este foreach:
//-------listacompleta-----índices----array interno com os dados
foreach($listaContatos as $umIndice => $umContato){
    echo("<tr>");
    echo("<td>");
    echo($umIndice);
    echo("</td>");
    echo("<td>");
    echo($umContato["nome"]);
    echo("</td>");
    echo("<td>");
    echo($umContato["telefone"]);
    echo("</td>");
    echo("<td>");
    echo($umContato["endereco"]);
    echo("</td>");
    echo("</tr>");
}
?>
</table>
</body>
</html>

                   
                   