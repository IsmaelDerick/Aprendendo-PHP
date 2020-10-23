<?php

$altura = 1.85;
$peso = 75;


$imc = $peso / ($altura * $altura);

if ($imc < 16) {
    echo "Baixo peso Grau 1";
} else if ($imc >= 16 && $imc <= 16.99) {
    echo "Baixo peso Grau 2";
} else if ($imc >= 17 && $imc <= 18.49) {
    echo "Baixo peso Grau 3";
} else if ($imc >= 18.50 && $imc <= 24.99) {
    echo "Peso adequado";
} else if ($imc >= 25 && $imc <= 29.99) {
    echo "Sobrepeso";
} else if ($imc >= 30 && $imc <= 34.99) {
    echo "Obsidade grau 1";
} else if ($imc >= 35 && $imc <= 39.99) {
    echo "Obsidade grau 2";
} else
    echo "Obsidade grau 3";
