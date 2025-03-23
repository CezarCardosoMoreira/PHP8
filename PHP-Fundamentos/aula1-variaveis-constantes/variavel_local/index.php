<?php   

// Variável local
// A variável local é aquela que é declarada dentro de uma função e só pode ser acessada dentro dela.
// Se você tentar acessar uma variável local fora da função, o PHP irá retornar um erro.
// Exemplo de variável local:

// Variável global
// A variável global é aquela que pode ser acessada em qualquer parte do código, seja dentro de funções ou fora delas.
$nome = "João"; 
echo $nome;

// Função que exibe o nome
// A variável $nome é uma variável local, pois foi declarada dentro da função exibirNome().
// Portanto, ela só pode ser acessada dentro da função.
function exibirNome() {
    $nome = "Maria"; 
    echo $nome;
}

// Chamando a função
// A função exibirNome() exibe o nome Maria, que é a variável local declarada dentro dela.
// Porém, a variável $nome declarada fora da função não é afetada, pois ela é uma variável global.
exibirNome(); // Maria
echo $nome; // João
?>