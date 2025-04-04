<?php
class Humano {
    public const OLHOS = 2;
    public const PERNAS = 2;
    public const BRACOS = 2;

    function mostraConstantes(){
        echo self::OLHOS;
        echo "<br>";
        echo self::PERNAS;
        echo "<br>";
        echo self::BRACOS;
    }
}

$cezar = new Humano();
echo $cezar::OLHOS;
echo "<br>";
echo $cezar::PERNAS;
echo "<br>";
echo $cezar::BRACOS;
echo "<br>";
$cezar->mostraConstantes();
