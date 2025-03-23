<?php
// Variáveis por Referência
// Variáveis por referência são variáveis que apontam para o mesmo valor na memória.
// Variáveis por referência são criadas com o operador &.
// Variáveis por referência são úteis para modificar variáveis fora de funções.
// Variáveis por referência são úteis para economizar memória.
// Variáveis por referência são úteis para criar funções recursivas.
// Variáveis por referência são úteis para criar funções que retornam mais de um valor.
// Variáveis por referência são úteis para criar funções que recebem mais de um valor.
// Variáveis por referência são úteis para criar funções que recebem arrays.

$a = 10;
$b = &$a;   // $b é uma referência para $a
echo "Valor de a: " . $a . "<br>";
echo "Valor de b: " . $b . "<br>";
echo "<br><br>";

$b = 20;    // Modificando $b, modifica $a
echo "Valor de a: " . $a . "<br>";
echo "Valor de b: " . $b . "<br>";


?>