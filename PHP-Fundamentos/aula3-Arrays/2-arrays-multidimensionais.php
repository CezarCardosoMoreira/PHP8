<?php

//Arrays Multidimensionais:
/*
 * são arrays que contêm outros arrays como seus elementos.
 * Eles são especialmente úteis para organizar dados em camadas ou estruturas mais complexas,
 * como tabelas, matrizes ou até mesmo árvores hierárquicas.
- **Definição:** Um array dentro de outro array.
- Cada elemento do array pode ser acessado utilizando **múltiplos índices** (ou chaves),
correspondendo à profundidade do dado.
1. **Array Bidimensional:** Um array com "linhas e colunas", semelhante a uma tabela.
    - Cada elemento é um array que pode ser acessado com dois índices (linha e coluna).

2. **Arrays com N Dimensões:**
Arrays multidimensionais podem ter **quaisquer dimensões** (tridimensional, quatro dimensões, etc.).
Quanto mais dimensões, mais índices são necessários para acessar cada elemento.

 * */

$lojas =[
    'Curitiba' => [
        'telefone' => '33333333',
        'endereco' => 'rua 123',
        'estado' => 'PR',
        'email' => 'cwb@email.com'
    ],
    'Araucaria' => [
        'telefone' => '3322233',
        'endereco' => 'rua 1010',
        'estado' => 'PR',
        'email' => 'araucaria@email.com'
    ],
    'Colombo' => [
        'telefone' => '45633333',
        'endereco' => 'rua 15',
        'estado' => 'PR',
        'email' => 'colombo@email.com'
    ],
];

echo '<pre>';
print_r($lojas);
echo '</pre>';

echo "<br>";


//buscar um valor especifico
echo $lojas['Curitiba']['email'];
echo "<br>";
echo $lojas['Colombo']['email'];

$nota = [
  [0,1,2],
  [3,4,5],
  [6,7,8]
];
echo '<pre>';
print_r($nota);
echo '</pre>';
echo "<br>";
echo $nota[0][2];
