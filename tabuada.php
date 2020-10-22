<?php

for($i=0;$i<=10;$i++){
    
    echo"Tabuada de $i" .PHP_EOL;
    echo " " .PHP_EOL;
    for($u=0;$u<=10;$u++){
        $mult= $i*$u;
        echo"$i X $u = $mult "  .PHP_EOL;
    }
    echo" ".PHP_EOL;

}