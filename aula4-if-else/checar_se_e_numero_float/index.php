<?php

if (is_float(27.25)) {
    echo " é um número float <br><br>";
} else {
    echo "Não é um número float <br><br>";
}

if (is_float("teste")) {
    echo " é um número float <br><br>";
} else {
    echo "Não é um número float <br><br>";
}

if (is_float(30)) {
    echo " é um número float <br><br>";
} else {
    echo "Não é um número float <br><br>";
}

$numero = 30;
if (is_float($numero)) {
    echo ".$numero sé um número float <br><br>";
} else {
    echo " .$numero Não é um número float <br><br>";
}

?>