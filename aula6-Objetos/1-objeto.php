<?php

class
Pessoa{
    public $nome;
    public $idade;
    public $sexo;

    function __construct(){}
    function falar(){
        echo "oi";
    }
}

$cezar = new Pessoa();
$cezar->nome = "cezar";
$cezar->idade = 20;
$cezar->sexo = "masculino";
$cezar->falar();
echo "<br>";
print_r($cezar);
echo "<br>";
echo '<pre>';
print_r($cezar);
echo '</pre>';
