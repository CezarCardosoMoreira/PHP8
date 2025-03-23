<?php
 /*são estruturas condicionais em PHP utilizadas para executar blocos de código
 com base em condições específicas. Elas verificam se uma expressão (condição) é verdadeira
 ou falsa para tomar uma decisão no fluxo do programa

 if (condição) {
    // Código é executado se a condição for verdadeira
}


 if (condição) {
    // Este bloco será executado se a condição for verdadeira
} else {
    // Este bloco será executado se a condição for falsa
}


 if (condição1) {
    // Este bloco será executado se a condição1 for verdadeira
} elseif (condição2) {
    // Este bloco será executado se a condição2 for verdadeira
} else {
    // Este bloco será executado se todas as condições anteriores forem falsas
}


 - **Condições Avaliadas:**
  As condições podem envolver operadores lógicos (`&&`, `||`),
  comparações (`>`, `<`, `==`, `!=`, etc.) ou valores booleanos.
- **Chaves `{}`:** São obrigatórias para incluir mais de uma linha de
 código dentro dos blocos `if`, `else` e `elseif`. Para uma única linha,
 podem ser omitidas, mas isso reduz a legibilidade.

*/

$valor = 11;
if ($valor > 10) {
    echo "valor maior que 10";
}elseif ($valor < 10){
    echo "valor menor que 10";
}else{
    echo "valor igual a 10";
}
?>

