<?php
/*O foreach no PHP é uma estrutura de controle de fluxo (loop)
projetada especificamente para iterar sobre arrays e objetos.
Ele simplifica a iteração, tornando o código mais legível e conciso,
especialmente quando você precisa acessar todos os elementos
de um array ou as propriedades de um objeto.

Sintaxe do foreach:

Existem duas formas principais de usar o foreach no PHP:

Iterando apenas pelos valores:

PHP

foreach ($array as $valor) {
    // código a ser executado para cada valor
}
$array: O array que você deseja iterar.
$valor: Uma variável que receberá o valor
de cada elemento do array a cada iteração.
Iterando pelas chaves e valores:

PHP

foreach ($array as $chave => $valor) {
    // código a ser executado para cada chave e valor
}
$array: O array que você deseja iterar.
$chave: Uma variável que receberá a chave de cada elemento do array.
$valor: Uma variável que receberá o valor de cada elemento do array.
Exemplo:

*/

$cores = array("vermelho", "verde", "azul", "amarelo");

// Iterando apenas pelos valores
foreach ($cores as $cor) {
    echo "Cor: " . $cor . "<br>";
}

echo "<br>";
$pessoa = array(
    "nome" => "João",
    "idade" => 30,
    "cidade" => "São Paulo"
);

// Iterando pelas chaves e valores
foreach ($pessoa as $chave => $valor) {
    echo $chave . ": " . $valor . "<br>";
}

echo "<br><br>";
$lista = array("Cezar", "juliana", "Brayan");
foreach ($lista as $nome) {
    echo $nome . "<br>";
}
