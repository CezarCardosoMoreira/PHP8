<?php
/*O loop `do...while` em programação é uma estrutura de repetição que executa um bloco de código pelo menos uma vez e, em seguida, continua a executar o bloco enquanto uma condição especificada for verdadeira. A principal diferença entre um loop `do...while` e `while` é que o `do...while` **sempre executa o código ao menos uma vez**, pois ele verifica a condição **depois de executar o bloco de código**.
Aqui está uma explicação simples do funcionamento:
1. O bloco de código dentro do `do` é executado.
2. Após executar o bloco, a condição no `while` é avaliada.
3. Se a condição for verdadeira, o código é executado novamente.
4. O loop continua até que a condição seja avaliada como falsa.

### Sintaxe do `do...while` em PHP:
``` php
do {
    // Bloco de código a ser executado
} while (condição);
```
*/
$contador = 1;

do {
    echo "Contagem atual: $contador <br>";
    $contador++;
} while ($contador <= 5);


