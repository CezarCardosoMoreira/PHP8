<?php
$pessoas = [
    '$pessoa1' => [
        'nome' => 'Cezar',
        'idade' => 20,
        'sexo' => 'masculino',
    ],
    'pessoa2' => [
        'nome' => 'Juliana',
        'idade' => 22,
        'sexo' => 'feminino',
    ],
    'pessoa3' => [
        'nome' => 'Maria',
        'idade' => 17,
        'sexo' => 'feminino',
    ]
];

print_r($pessoas);
echo "<br>";
foreach ($pessoas as $pessoa){
    //echo print_r($pessoa['nome']);
    if ($pessoa['idade'] > 18){
        echo "maior de idade: " .$pessoa['nome'] ."<br>";
    }
    elseif ($pessoa['idade'] < 18){
        echo "menor de idade: " .$pessoa['nome'] ."<br>";
    }
}

echo "<br>";
echo '<pre>';
print_r($pessoas);
echo '</pre>';
