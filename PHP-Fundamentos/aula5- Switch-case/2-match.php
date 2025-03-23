<?php
/*A partir do PHP **8.0**, foi introduzida a estrutura **`match`**, que é uma alternativa mais moderna e poderosa ao tradicional **`switch case`**. Ela fornece uma maneira mais compacta e segura de comparar valores e retornar resultados em funções ou blocos de código.
### Diferenças entre `match` e `switch`:
1. **Expressão de Retorno:**
    - O `match` é uma **expressão** e sempre retorna um valor sem necessidade de usar `break`.
    - No `switch`, você precisa usar `"echo"` ou armazenar o valor manualmente com `return`.

2. **Comparação Estrita:**
    - O `match` usa **comparação estrita** (`===`).
    - O `switch` usa **comparação frouxa** (`==`).

3. **Código Mais Limpo:**
    - `match` elimina a repetição desnecessária, tornando o código mais compacto.
### Sintaxe:
``` php
$resultado = match (expressão) {
    valor1 => 'Resultado 1',
    valor2 => 'Resultado 2',
    valor3 => 'Resultado 3',
    default => 'Resultado padrão',
};
```

- **Expressão:** O valor a ser comparado.
- **Valores:** Cada caso está associado a uma expressão ou retorno.
- **Chave `=>`:** Associa valores a um retorno.
- **`default`** (opcional): Retorna no caso de não haver correspondência.


### Benefícios do `match`:
1. **Mais Limpo:** Código mais curto e sem necessidade de usar `break`.
2. **Tipo-Seguro:** Usa comparação estrita (`===`), evitando surpresas.
3. **Retorno Automático:** Sempre retorna um valor, sem necessidade de ecoar ou adicionar manualmente.

Use o `switch match` sempre que desejar uma abordagem moderna e eficiente para lidar com comparações, especialmente se já estiver trabalhando com PHP 8.0 ou superior! 🚀


*/

$dia = 3;

$resultado = match ($dia) {
    1 => 'Segunda-feira',
    2 => 'Terça-feira',
    3 => 'Quarta-feira',
    4 => 'Quinta-feira',
    5 => 'Sexta-feira',
    6, 7 => 'Fim de semana', // Combinando múltiplos valores
    default => 'Dia inválido',
};
echo $resultado;

echo "<br>";


$valor = '2';

$resultado = match ($valor) {
    2 => 'Número inteiro 2',
    '2' => 'String 2',
    default => 'Outro valor',
};

echo $resultado;

echo "<br>";


$nota = 'A';

$mensagem = match ($nota) {
    'A', 'B' => 'Aprovado',
    'C' => 'Recuperação',
    'D', 'E' => 'Reprovado',
    default => 'Nota inválida',
};

echo $mensagem;


