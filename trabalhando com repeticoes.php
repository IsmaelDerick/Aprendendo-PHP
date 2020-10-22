<?php
$cont = 1;

echo "Ola meu amigo" . PHP_EOL;

while ($cont <= 100) {
    echo "voce esta no $cont" . PHP_EOL;
    $cont++;
}
echo "esse foi com while" . PHP_EOL;
echo " " . PHP_EOL;

for ($i = 0; $i <= 100; $i++) {
    echo "Voce esta no numero $i" . PHP_EOL;
}
echo "esse foi o for" . PHP_EOL;
echo " " . PHP_EOL;

for ($i=0;$i<=100;$i++){
    if($i == 10){
        continue;
    }
    echo $i .PHP_EOL;
}


echo "FOR PULANDO O 10";