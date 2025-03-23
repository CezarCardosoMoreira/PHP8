<?php

$numero = 2;
function teste()
{
    $numero = 10;

    echo $numero;
    echo "<br>";
}

echo "O número Global é: " . $numero;
echo "<br>";

echo "O numero da variavel local é ", teste();
