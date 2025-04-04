<?php
$lista = [1,2,3,4,5,6,7,8,9,10];

foreach ($lista as $valor) {
    if ($valor == 5) {
        echo "parou no valor: $valor <br>";
        break;
    }
}
