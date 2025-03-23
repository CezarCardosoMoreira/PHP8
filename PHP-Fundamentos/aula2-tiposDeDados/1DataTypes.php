<?php

//No PHP, os **tipos de dados**
// são um elemento essencial da linguagem que define a natureza dos valores armazenados nas variáveis.
// PHP é uma linguagem **dinamicamente tipada**, ou seja, não é necessário declarar explicitamente o tipo de uma variável –
// o PHP decide automaticamente, com base no valor atribuído a ela.
//Abaixo, está um guia completo sobre os **tipos de dados** do PHP, com exemplos.


//inteiros:
$inteiro = 10;

//float/double:
$numeroFloat = 10.5;



//String?
$string1 = "cezar";


//Booleano:
$booleano1 = true;
$booleano2 = false;


echo $inteiro;
echo "<br><br>";
echo $string1;
echo "<br><br>";
echo $numeroFloat;
echo "<br><br>";
echo $booleano1;
echo "<br><br>";
echo $booleano2;
echo "<br><br>";


echo gettype($inteiro);
echo "<br><br>";
echo gettype($string1);
echo "<br><br>";
echo gettype($numeroFloat);
echo "<br><br>";
echo gettype($booleano1);
echo "<br><br>";
echo gettype($booleano2);
echo "<br><br>";


var_dump($inteiro);
echo "<br><br>";
var_dump($string1);
echo "<br><br>";
var_dump($numeroFloat);
echo "<br><br>";
var_dump($booleano1);
echo "<br><br>";
var_dump($booleano2);
echo "<br><br>";


