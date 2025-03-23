<?php
// Arrays
// Arrays são variáveis que podem armazenar mais de um valor por vez.
// Arrays podem armazenar qualquer tipo de valor, inclusive outros arrays.
// Arrays são criados com a função array().
// Os valores de um array são acessados através de um índice.
// O índice de um array começa em 0.
// Arrays podem ser percorridos com a estrutura de repetição foreach.
// Arrays podem ser associativos, onde os índices são strings.
// Arrays podem ser multidimensionais, onde os valores são arrays.
// Arrays podem ser ordenados com as funções sort() e rsort().
// Arrays podem ser filtrados com as funções array_filter() e array_map().
// Arrays podem ser mesclados com a função array_merge().
// Arrays podem ser divididos com a função array_chunk().
// Arrays podem ser transformados em strings com a função implode().
// Arrays podem ser transformados em variáveis com a função extract().
// Arrays podem ser transformados em objetos com a função (object).
// Arrays podem ser transformados em arrays com a função (array).
// Arrays podem ser transformados em variáveis com a função list().
// Arrays podem ser transformados em variáveis com a função compact().
$a = [1, 2, 3, 4, 5];
$b = [6, 7, 8, 9, 10];
$c = [1, "cezar", true, 3.14];
echo "Array a: <br>";
print_r($a);
echo "<br><br>";
echo "Array b: <br>";
print_r($b);
echo "<br><br>";
echo "Array c: <br>";
print_r($c);
echo "<br><br>";
print_r($c[1]);
?>