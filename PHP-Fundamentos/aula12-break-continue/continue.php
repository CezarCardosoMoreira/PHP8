<?php
/*O comando **`continue`** no PHP é utilizado dentro de
estruturas de repetição, como `for`, `foreach`, `while` e `do-while`.
Quando o comando é executado, ele interrompe apenas a
iteração corrente do loop em que está inserido e passa
imediatamente para a próxima iteração, ignorando o restante do
código que vem depois dele dentro do bloco do loop.
### Funcionamento:
- Se você deseja "pular" uma iteração específica
baseado em uma condição, pode colocar o `continue`
dentro de um bloco condicional.
- Ele é útil para evitar executar determinadas partes
do código em situações controladas.
*/
$lista = [1,2,3,4,5,6,7,8,9,10];

foreach ($lista as $valor) {
    if ($valor == 5) {
        echo "Pulou o valor: $valor <br>";
        continue;

    }
    echo "Valor: $valor <br>";
}
