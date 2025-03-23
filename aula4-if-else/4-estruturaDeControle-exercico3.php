<?php
/*Cálculo de Desconto
Escreva uma função chamada calcularDesconto que recebe dois parâmetros: o valor de um produto e uma categoria.

A função deve retornar o valor do produto com o desconto aplicado, de acordo com a categoria.

Considere as seguintes categorias e seus respectivos descontos:

"eletrônicos": 10% de desconto.

"vestuário": 20% de desconto.

"alimentos": 5% de desconto.

Outras categorias: nenhum desconto.

Se a categoria for desconhecida ou não estiver listada acima, o desconto será zero.

O valor do produto e a categoria serão sempre fornecidos como argumentos da função.

*/

function calcularDesconto($valorProduto, $categoria){
    if ($categoria == "eletronicos") {
        $resultado = $valorProduto -= ($valorProduto * 0.10) ;
        echo($resultado);
    }elseif ($categoria == "vestuario") {
        $resultado = $valorProduto -= ($valorProduto * 0.20);
        echo($resultado);
    }elseif ($categoria == "alimentos") {
        $resultado = $valorProduto -= ($valorProduto * 0.05);
        echo($resultado);
    }else {
        echo $valorProduto;
    }
}

calcularDesconto(100, "a");


/*
 function calcularDesconto($valorProduto, $categoria) {
    $desconto = 0;

    switch (strtolower($categoria)) { // Converter para minúsculas para evitar problemas de case sensitivity
        case "eletrônicos":
            $desconto = 0.10; // 10% de desconto
            break;
        case "vestuário":
            $desconto = 0.20; // 20% de desconto
            break;
        case "alimentos":
            $desconto = 0.05; // 5% de desconto
            break;
        default:
            $desconto = 0; // Sem desconto
            break;
    }

    $valorComDesconto = $valorProduto - ($valorProduto * $desconto);
    return $valorComDesconto;
}

// Exemplo de uso da função
$valor = 100; // Valor do produto
$categoria = "eletrônicos"; // Categoria do produto
echo "Valor final: " . calcularDesconto($valor, $categoria);

  */