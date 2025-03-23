<?php
/*Crie um script PHP que inicialize um array vazio chamado $lista.
Em seguida, utilize um loop for para adicionar os números inteiros de 0 a 9 ao array.
A cada iteração do loop, exiba o número adicionado na tela, seguido de uma quebra de linha (<br>),
e imprima o conteúdo atualizado do array $lista usando a função print_r().

Explicação:

Inicialização: O script deve começar com um array vazio.
Loop: Utilize um loop for para iterar 10 vezes.
Adição de Elementos: Em cada iteração, adicione o valor atual do contador do loop ao array $lista.
Exibição: A cada iteração, exiba o número recém-adicionado na tela, seguido de uma quebra de linha.
Impressão do Array: Após exibir o número, use a função print_r() para imprimir o conteúdo atualizado do array $lista.
Isso mostrará como o array cresce a cada iteração.*/
$lista = [];
for ($i = 0; $i < 10; $i++) {
    $lista[] = $i;
    echo $lista[$i] . "<br>";
    print_r($lista);
}
echo "<pre>";
print_r($lista);
echo "</pre>";

$lista2 = [];
for ($i = 0; $i < 10; $i++) {
    array_push($lista2, $i);
    echo $lista2[$i] . "<br>";
    print_r($lista2);
}

echo "<pre>";
print_r($lista2);
echo "</pre>";
