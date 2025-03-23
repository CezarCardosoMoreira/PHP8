<?php
/*Crie um programa em PHP que utilize um **laço de repetição `while`
** para exibir todos os números **pares** de 4 a 30.
 * Para cada número exibido, faça a quebra de linha utilizando o comando `"<br>"`
 * para que cada número seja mostrado em linhas separadas.
**Regras**:
1. Inicie a variável `$contador` com o valor 4.
2. A repetição deve continuar enquanto `$contador` for menor ou igual a 30.
3. A cada iteração, incremente o valor da variável `$contador` em 2.
4. Exiba o valor atual de `$contador` em cada repetição.
*/


$contador = 4;
while ($contador <= 30) {
    echo $contador . "<br>";
    $contador = $contador + 2;
}

