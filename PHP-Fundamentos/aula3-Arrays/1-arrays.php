<?php


//ARRAYS:
/*são estruturas de dados que permitem armazenar múltiplos valores
em uma única variável. Eles são amplamente usados
para organizar e manipular coleções de dados.
Com arrays, é possível associar chaves (ou índices) a valores,
possibilitando uma manipulação eficiente e estruturada das informações.*/

$nomes = array("cezar", "Juliana", "Brayan");
$nomes2 = ["cezar", "Juliana", "Brayan"];


echo $nomes[0];
echo "<br>";
echo $nomes2[0];
echo "<br>";

//alterar valor do array:
$nomes[0] = "Juliana";
echo "<br>";
echo $nomes[0];
echo "<br>";
//adiciona nome
$nomes2[] = "tick";
echo $nomes2[2];
array_push($nomes2, "aurora");
echo "<br>";
//remove nome:
unset($nomes2[2]);
echo $nomes2[2];
echo "<br>";

//1. **Arrays Associativos:**
// Utilizam chaves nomeadas (em vez de índices numéricos).
$pessoas = array(
    "nome" => "cezar",
    "idade" => 20,
    "peso" => 70
);
echo $pessoas["nome"];

$pessoas2 = [
    "nome" => "cezar",
    "idade" => 20,
    "cpf" => 12345678900,
    "peso" => 70,
    "altura" => 1.80,
];

echo "<br>";
echo $pessoas2["nome"];
echo "<br>";
echo $pessoas2["idade"];
echo "<br>";
echo $pessoas2["peso"];
echo "<br>";
echo $pessoas2["altura"];
echo "<br>";
var_dump($pessoas2);
echo "<br>";
var_dump($pessoas);
echo "<br>";
var_dump($nomes);
echo "<br>";
var_dump($nomes2);
echo "<br>";
echo '<pre>';
print_r($pessoas2);
echo '</pre>';