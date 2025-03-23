<?php
// Arrays Associativos
// Arrays associativos são arrays onde os índices são strings.
// Arrays associativos são criados com a função array().
// Os valores de um array associativo são acessados através de um índice.
// Arrays associativos podem ser percorridos com a estrutura de repetição foreach.
// Arrays associativos podem ser multidimensionais, onde os valores são arrays.
// Arrays associativos podem ser ordenados com as funções ksort() e krsort().
// Arrays associativos podem ser filtrados com as funções array_filter() e array_map().
// Arrays associativos podem ser mesclados com a função array_merge().
// Arrays associativos podem ser divididos com a função array_chunk().
// Arrays associativos podem ser transformados em strings com a função implode().
$arr = [
    "nome" => "Cezar",
    "sobrenome" => "Moreira",
    "idade" => 33,
    "email" => "cezar@email.com",
    "telefone" => "11 99999-9999",
];

echo "Nome: " . $arr["nome"] . "<br>";
echo "Sobrenome: " . $arr["sobrenome"] . "<br>";
echo "Idade: " . $arr["idade"] . "<br>";
echo "Email: " . $arr["email"] . "<br>";
echo "Telefone: " . $arr["telefone"] . "<br>";
echo "<br><br>";
print_r($arr);
echo "<br><br>";
print_r($arr["nome"]);
echo "<br><br>";
print_r($arr["sobrenome"]);
echo "<br><br>";

?>