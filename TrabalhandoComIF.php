<?php

$idade = 16;
$pessoas = 2;
$idade2 = 18;

echo "Você só pode entrar se for maior que 18 anos ou tiver 16 anos e esta acompanhado." . PHP_EOL;

if ($idade >= 18) {
    echo "Voce tem $idade anos pode entrar";
} else if ($idade >=16 && $pessoas ==2){
    if($idade2 >=18)
    echo "voces estao de $pessoas pessoas e a segunda pessoa tem $idade2, pode entrar" . PHP_EOL;
    
    else
    echo"Os dois nao podem entrar";
} 
else
    echo "Voce ainda e de menor";
