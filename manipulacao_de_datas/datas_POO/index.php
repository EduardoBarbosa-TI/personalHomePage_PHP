<?php
$data = new DateTime();

echo $data->format('d-m-Y') . PHP_EOL;

echo $data->format('d-m-Y H:i:s') . PHP_EOL;

/*
DateInterval::
-> P representação de período: vem antes de dia, mês, ano  e semana
Y anos 
M meses
D dias 
W semanas
-> T representação de tempo: vem antes de hora, minuto,segundo
H horas 
M  minutoa
S segundos
*/ 

$intervalo = new DateInterval('PT5M'); // adiciona um perido de 5 minutos
$data->add($intervalo);

$intervalo = new DateInterval('P5Y10M5DT10H50M10S');
$data->sub($intervalo);

$intervalo = new DateInterval('P5DT10H50M');
$data->sub($intervalo);

var_dump($data->format('d-m-Y H:i:s'));

