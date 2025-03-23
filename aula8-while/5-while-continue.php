<?php
/*O comando `continue` no `while` é utilizado para **pular a iteração atual** e passar diretamente para a próxima, ignorando o restante do código que está dentro do bloco do laço. Ele é útil quando queremos "saltar" algumas condições específicas sem parar completamente o laço.



while (condição) {
    // Se condicional para pular a iteração atual
    if (condição_para_pular) {
        continue; // Pula o restante do bloco e vai para a próxima iteração
    }

    // Código que será executado apenas se o continue não for chamado
}

*/




$contador = 10;
while ($contador > 0) {
    if ($contador == 5 || $contador == 7) {
        echo "pulou a execução <br>";
        $contador--; // Atualiza o contador antes de continuar
        continue;
    }
    echo "Contando: $contador<br>";
    $contador--; // Atualiza o contador
}