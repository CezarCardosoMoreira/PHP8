<?php
class Pessoa {
    public $nome;
    public $idade;
}

$cezar = new Pessoa();
$cezar->nome = "cezar";
$cezar->idade = 20;

echo $cezar->nome;
echo "<br>";
echo $cezar->idade;
