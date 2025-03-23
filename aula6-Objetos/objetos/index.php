<?php

// Objetos
// Objetos são instâncias de classes.
// Classes são modelos para objetos.
// Objetos são criados com a palavra-chave new.
// Objetos podem ter propriedades, que são variáveis dentro do objeto.
// Objetos podem ter métodos, que são funções dentro do objeto.
// Objetos podem ser passados como parâmetros.
// Objetos podem ser clonados com a palavra-chave clone.
// Objetos podem ser comparados com a palavra-chave instanceof.
// Objetos podem ser convertidos em strings com a função serialize().
// Objetos podem ser convertidos em strings com a função json_encode().
// Objetos podem ser convertidos em arrays com a função get_object_vars().
// Objetos podem ser convertidos em arrays com a função (array).
// Objetos podem ser convertidos em arrays com a função (object).
class Pessoa {

    
    function falar() {
        echo "Olá, eu sou uma pessoa! <br>";
    }

    function andar() {
        echo "Estou andando... <br>";
    }

    function correr() {
        echo "Estou correndo... <br>";
    }

}

// Instanciando um objeto
$pessoa = new Pessoa();

// Chamando métodos do objeto
$pessoa->falar();
echo "<br>";
$pessoa->andar();
echo "<br>";
$pessoa->correr();
echo "<br>";


?>