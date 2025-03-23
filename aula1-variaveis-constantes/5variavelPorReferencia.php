<?php
//Em PHP, uma variável **por referência**
// significa que duas (ou mais) variáveis **apontam para o mesmo local na memória**,
// ou seja, ambas compartilham o mesmo conteúdo. Qualquer alteração feita em uma delas será refletida na outra.

$a = 10;
$b = &$a;

echo "variavel a: ".$a;
echo "<br>";
echo "variavel b: ".$b;

echo "<br>";
echo "Alterando o valor de b para 20";
echo "<br>";
$b = 20;

echo "variavel a: ".$a;
echo "<br>";
echo "variavel b: ".$b;

