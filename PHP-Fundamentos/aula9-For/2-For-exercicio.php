<?php
/*
 * Crie um script PHP que itere por uma lista de números
 * inteiros de 1 a 20 e exiba apenas os números pares dessa lista,
 * cada um em uma nova linha.

Explicação:

Iteração: O script deve percorrer todos os elementos da lista.
Condição: Para cada número, verifique se ele é par (divisível por 2).
Exibição: Se o número for par, exiba-o na tela, seguido de uma quebra de
linha (<br>) para que cada número apareça em uma linha separada.*/
$lista = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

for ($i = 0; $i < count($lista); $i++) {
    if ($lista[$i] % 2 == 0){
        echo $lista[$i]."<br>";
    }

}