<?php

$contasCorrente = [
 70336476179 => [
     'titular' => 'Ismael',
     'saldo'=> 1000000
 ],
 70336476180 => [
    'titular' => 'derick',
    'saldo'=> 900000
 ]
];


foreach($contasCorrente as $cpf => $conta){
    echo "CPF: $cpf". PHP_EOL;
    echo "Titular: ", $conta['titular'] . PHP_EOL;
    echo "Saldo: ",$conta['saldo'] . PHP_EOL;
    echo " ". PHP_EOL;
}