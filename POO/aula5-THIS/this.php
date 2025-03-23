<?php

class Pessoa {
    public $nome;
    public $idade;

    function falar($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
        echo "Oi meu nome é: $nome, minha idade é: $idade e eu estou falando! ";
    }

}

$cezar = new Pessoa();
$cezar->falar("cezar", 18);
