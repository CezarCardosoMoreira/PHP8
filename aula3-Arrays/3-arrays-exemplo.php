<?php

$carro = [
    'nome' => 'gol',
    'ano' => 2019,
    'cor' => 'preto',
    'modelo' => 'g7'
    ];

print_r($carro);
echo "<br>";
$carroNome = $carro['nome'];
$carroCor = $carro['cor'];

echo "o Carro: ".$carroNome ." da cor: ".$carroCor ." é um veiculo semi-novo";

echo "<br>";
echo '<pre>';
print_r($carro);
echo '</pre>';
