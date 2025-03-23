<?php
/*O uso de `break` dentro de um laço `while` serve para **interromper o loop imediatamente**, independentemente da condição do `while`. É útil quando queremos parar o loop mediante uma condição específica.

while (condição) {
    // Código a ser executado

    if (condição_para_parar) {
        break; // Sai do loop
    }
}
Nesse caso, o `while` estará em execução enquanto a **condição** for verdadeira, mas o `break` interrompe o loop assim que a condição específica dentro do bloco for atendida.


*/

$contador = 1;

while (true) { // Executa indefinidamente até encontrar o break
    echo "Contando: $contador .<br>";

    if ($contador >= 5) {
        echo "Valor limite atingido. Parando o loop. valor do contador: $contador<br> ";
        break; // Interrompe o loop assim que o valor limite for atingido
    }

    $contador++; // Incrementa o contador
}

echo "Fim do programa!";
/*### O que acontece nesse código?
1. O laço `while` utiliza a condição `true`, ou seja, ele sempre será executado.
2. Dentro do bloco, exibimos o valor atual do contador usando `echo`.
3. A cada iteração, verificamos se `$contador` é maior ou igual a `5`:
    - Quando for, o `break` é acionado e o loop é interrompido imediatamente.

4. O laço só para por causa do `break`.
*/