<?php

/* O **`switch case`** é uma estrutura condicional em PHP usada para comparar o
valor de uma **variável** (ou expressão) com múltiplos casos diferentes.
Ele é útil quando você precisa tomar decisões baseadas em vários **valores possíveis** ou **escolhas**.

switch (expressão) {
    case valor1:
        // Código a ser executado se "expressão" for igual a "valor1"
        break;

    case valor2:
        // Código a ser executado se "expressão" for igual a "valor2"
        break;

    default:
        // Código a ser executado se nenhum caso corresponder
        break;
}
1. **`switch`**: Avalia a **expressão** fornecida (por exemplo, uma variável ou resultado de operação).
2. **`case`**: Cada **caso** representa um valor possível a ser comparado com a expressão.
3. **`break`**: Finaliza a execução dentro do bloco, garantindo que o código não "continue" para os próximos casos.
4. **`default`**: Opcional, mas é executado se nenhum dos **casos anteriores** for correspondente.

### Funcionamento:
- A expressão dentro de `switch` é comparada com cada valor fornecido nos **cases** usando o operador de igualdade (`==`).
- Se uma correspondência for encontrada:
    - O código dentro desse bloco `case` será executado.
    - Após o código dentro desse `case`, o comando **`break`** impede que outros casos sejam executados.

- Se nenhum valor for correspondente e o **`default`** estiver definido, ele será executado.

### Quando Usar `switch` em vez de `if-else`?
- **Melhor legibilidade:** Quando há várias condições baseadas no mesmo valor.
- **Semelhança com menus ou seleções:** Por exemplo, escolha em um formulário ou resposta API.

### Importante:
- **`break`:** Se omitido, os blocos de código dos próximos casos continuam a ser executados
("queda para o próximo caso").
- **Comparação com `if/else`:** `switch` compara o valor exato (variável ou expressão),
enquanto `if` pode usar operadores de comparação variáveis (`>`, `<`, etc.).


 */

$dia = 3;

switch ($dia) {
    case 1:
        echo "Hoje é segunda-feira.";
        break;
    case 2:
        echo "Hoje é terça-feira.";
        break;
    case 3:
        echo "Hoje é quarta-feira.";
        break;
    default:
        echo "Dia inválido!";
        break;
}
