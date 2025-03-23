<?php
/*Vamos entender como funciona o **laço `while`** no PHP e como ele pode ser usado:
### O que é o `while`?
O laço `while` é uma das estruturas de repetição do PHP.
 Ele executa um **bloco de código repetidamente** enquanto uma condição específica for verdadeira.
O loop verifica a condição **antes** de executar o código, então se a condição for falsa logo no começo,
o laço não será executado nenhuma vez.
### Estrutura Básica
A sintaxe de um `while` no PHP é a seguinte:
``` php
while (condição) {
    // Código a ser executado enquanto a condição for verdadeira
}
```
### Como funciona?
1. A **condição** no `while` é avaliada como verdadeira (`true`) ou falsa (`false`).
2. Enquanto a expressão da **condição** for verdadeira, o PHP repete o **bloco de código** dentro do `while`.
3. Assim que a condição se tornar falsa, o laço é encerrado.

### Exemplo Simples
Vamos criar um contador com `while`:
``` php

```
### O que acontece nesse código?
1. O valor inicial da variável `$contador` é `1`.
2. A condição do `while` é `$contador <= 5` (enquanto `$contador` for menor ou igual a `5`, o loop será executado).
3. Dentro do loop, a mensagem `"Contando: $contador"` é exibida, e o valor da variável `$contador` é incrementado em 1 a cada iteração.
4. Assim que `$contador` se torna maior q
*/
$contador = 1;

while ($contador <= 5) {
    echo "Contando: $contador\n";
    $contador++; // Incrementa o contador
}

echo "Fim do loop!";


$lista = [5, "Cezar", 10, true, false, "brayan", "carro", 22.5, 11, "Juliana", "Gato", "Cachorro"];

$tamanho = count($lista);
$contador = 0;
while ($contador <= $tamanho) {
    if (is_string($lista[$contador])) {
        echo "$lista[$contador] <br>";
    }
    $contador++;
}