<?php

//Constantes são valores imutáveis no decorrer da execução do script.
// Após uma constante ser definida, seu valor não pode ser alterado.
// Elas são úteis para guardar valores que você sabe que não mudarão, como valores de configuração.:

//## Como Declarar Constantes
//Você pode usar duas abordagens principais para definir constantes:
//1. Usar a função `define()`.
//2. Utilizar a palavra-chave `const`.
// O nome geralmente é escrito em letras maiúsculas por convenção.
//`define()` **não é permitido dentro de classes**.
//Declarando com `define()`:
define("NOME", "cezar moreira");
echo NOME;

echo "<br><br>";

// `const` pode ser usado tanto globalmente quanto dentro de uma classe.
// Declarando com `const`
const NOME2 = "ezar moreira";
echo NOME2;


