<?php
function exibeMensagem($mensagem){
    echo $mensagem .PHP_EOL;
}
$contasCorrente = [
    70336476179 => [
        'titular' => 'Ismael',
        'saldo' => 10000
    ],
    70336476180 => [
        'titular' => 'derick',
        'saldo' => 900000
    ]
];
//sacar
$sacar = 100;

if ($sacar > $contasCorrente[70336476179]['saldo']) {
    exit("Valor maior que disponivel");
} else {
    $contasCorrente[70336476179]['saldo'] -= $sacar;
  
}

foreach($contasCorrente as $cpf => $conta){
    echo "CPF: $cpf". PHP_EOL;
    echo "Titular: ", $conta['titular'] . PHP_EOL;
    echo "Saldo: ",$conta['saldo'] . PHP_EOL;
    echo " ". PHP_EOL;
}

