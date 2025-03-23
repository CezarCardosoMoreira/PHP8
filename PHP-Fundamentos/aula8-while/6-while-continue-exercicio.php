<?php

$lista = [10,20,30,40,50,60,70,80,90,100];
$contador = 0;

while ($contador < count($lista)){
    if ($lista[$contador]  == 30 || $lista[$contador] == 40){
        echo "Pulou o numero: $lista[$contador] <br>";
        $contador++;
        continue;
    }
    echo $lista[$contador]."<br>";
    $contador++;
}
