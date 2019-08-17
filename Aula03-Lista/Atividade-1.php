<?php


const KM = 12;
$tempo_gasto;
$litros;
$distancia;
$tempo;
$velocidade;
$litros_usados;
$leia;

echo 'Programa para calcular velocidade media,',PHP_EOL;
echo 'tempo gasto, distância percorrida e quantidade de litros usados!',PHP_EOL;
echo '-----------------------------------------',PHP_EOL;

echo 'Qual o tempo gasto na viagem ?: ',PHP_EOL;
//echo '<br>';
$leia = readline();

$tempo_gasto = $leia;

echo 'Qual a velocidade media ?: ',PHP_EOL;
//echo '<br>';
$leia = readline();

$velocidade_med = $leia;

$distancia = $tempo_gasto * $velocidade_med;

$litros_usados = $distancia / KM;



echo"Velocidade Media = ",$velocidade_med,PHP_EOL;
echo"Tempo Gasto = ",$tempo_gasto,PHP_EOL;
echo"Distancia Percorrida = ",$distancia,PHP_EOL;
echo"Quantidade de Litros usados = ",$litros_usados,PHP_EOL;