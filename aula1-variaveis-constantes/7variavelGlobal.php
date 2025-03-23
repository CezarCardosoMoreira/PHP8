<?php
$numero = 2;

echo "$numero é uma variavel Global.<br>";

function teste()
{
    global $numero;
    echo $numero;
    echo "<br>";}

echo "é uma variavel local usando o valor da variavel global: ",teste()
?>