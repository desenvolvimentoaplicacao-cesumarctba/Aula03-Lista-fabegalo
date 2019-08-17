<?php

$temperaturaC;
$temperatutaF;
$leia;

echo 'Qual o Valor em °C ?: ';
$leia = readline();

$temperaturaC = $leia;

$temperaturaF = (9 * $temperaturaC + 160) / 5;

echo 'A Temperatura ',$temperaturaC,'°C'," Em Fahrenheit é $temperaturaF",'°F',PHP_EOL;