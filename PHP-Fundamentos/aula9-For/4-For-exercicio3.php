<?php

/*Desenvolva um script PHP que realize as seguintes operações:

Criação da Primeira Lista:

Utilize um loop for para gerar uma lista de
números inteiros, iniciando em 10 e terminando em 20 (inclusive).
Armazene esses números em um array chamado $lista.
Imprima o conteúdo completo do array $lista usando a função print_r().
Criação da Segunda Lista (Números Ímpares):

Crie um novo array vazio chamado $lista2.
Itere sobre o array $lista criado no passo anterior.
Para cada número em $lista, verifique se ele é ímpar.
Se o número for ímpar, adicione-o ao array $lista2.
A cada iteração do loop, imprima o conteúdo atualizado
do array $lista2, utilizando a função print_r(),
e insira uma quebra de linha.
Objetivo:

O objetivo do script é demonstrar a manipulação de arrays em PHP,
incluindo a criação de arrays com loops e a
filtragem de elementos com base em uma condição.*/
//craiando a lista com o for
$lista= [];
for ($i=10; $i <= 20; $i++) {
    array_push($lista, $i);
}
print_r($lista);

//criando a lista com o for adicionando somente numeros inpares
$lista2 = [];
for ($i=0; $i < count($lista); $i++) {
    if ($lista[$i] % 2 != 0){
        $lista2[] = $lista[$i];
    }
    echo "<br>";
    print_r($lista2);
}
