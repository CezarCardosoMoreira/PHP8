<?php

//Uma variável **`static`** em PHP é uma variável
// que **mantém seu valor entre chamadas** de função ou método.
// Diferente de variáveis comuns (que são reiniciadas toda vez que a
// função/método é chamado), as variáveis `static` persistem com o
// valor que tinham após a última execução.

//A palavra-chave **`static`**
// é utilizada para declarar variáveis dentro de
// funções ou métodos que precisam reter seu valor entre
// chamadas consecutivas. Muito útil para contadores, cache ou quando
// é necessário armazenar valores para uso contínuo.



for ($i = 0; $i < 10; $i++) {

    static $a = 0;
    $a++;
    echo $a ."<br>";
}