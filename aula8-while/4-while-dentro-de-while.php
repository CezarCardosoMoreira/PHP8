<?php

$contador1 = 1;
while ($contador1 <= 10) {
    echo "Valor do contador Externo:  $contador1  <br>";
    $contador2 = 1;
    while ($contador2 <= 3) {
        echo "Valor do contador interno:  $contador2  <br>";
        $contador2++;
    }

    $contador1++;
}
