<?php

/*Manipulação de String*/ 
$html = "<h1>Helllo World </h1>";
echo $html;

/*Manipulação de Data*/ 
echo date("d");
echo date("m");// representação do mês por numeros
echo date("M"); // representação do mês por nome
echo date("y");// representação do ano com 2 algarismos
echo date("Y"); // representação do ano com 4 algarismos
echo date("d/m/Y");

$data = date("d/m/Y");
echo $data;

/*Manipulação de Horario*/ 
date_default_timezone_set('America/Sao_Paulo'); // ajuste de fuso horario

echo date("H:i:s");

$data = date("d/m/Y H:i:s");
echo $data;

/*Manipulação de Array*/ 
$cursos = array("php", "java", "redes", "c");

print_r($cursos);
print_r($cursos[0]);

/*Diferenças entre funções echo e print*/

print "Heloo"; // nessa função eu só consigo printar somente uma string, apenas um elemento.
echo "hello", "World"; // nessa função euconsigo printar quantas strings forem necessárias.

$carros = ['Ferrari', 'mercedez'];
print_r($carros);
print_r($carros[1]);


$endereco = [
    'cep' => '23454345346',
    'numero' => '3245326',
    'cidade' => 'xangrila'
];
print_r($endereco['cidade']);


$pessoasEndereco = [
    'pessoa1' => array(
        "cep" => "32425245",
        "cidade" => "xangrila"
    ),
    'pessoa2' => [
        "cep" => "324223455",
        "cidade" => "capao"
    ],
];

print_r($pessoasEndereco);
print_r($pessoasEndereco['pessoa1']);

?>