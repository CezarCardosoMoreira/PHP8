<?php
/*Em PHP, a visibilidade public é um dos três modificadores
de acesso que você pode usar para definir o nível de acesso de propriedades,
 métodos e constantes dentro de uma classe.
Aqui está um resumo do que isso significa e como funciona:

O que significa public?

Acesso irrestrito: Membros (propriedades, métodos ou constantes)
declarados como public podem ser acessados de qualquer lugar:
Dentro da própria classe.
De classes derivadas (herança).
De fora da classe, em qualquer parte do seu código.
Como usar public:

Você usa a palavra-chave public antes da
declaração da propriedade, método ou constante.
Se você não especificar um modificador de
acesso, o PHP assume que o membro é public por
padrão (embora seja uma boa prática sempre especificar explicitamente).
Exemplo:

PHP

class Carro {
    public $cor = "Vermelho";
    public function exibirCor() {
        echo "A cor do carro é: " . $this->cor;
    }
}

$meuCarro = new Carro();
echo $meuCarro->cor; // Acessando a propriedade public fora da classe
$meuCarro->exibirCor(); // Acessando o método public fora da classe
Pontos importantes:

A visibilidade public é a menos restritiva.
Use public quando você quiser que um membro da
classe seja acessível em qualquer parte do seu código.
É importante lembrar que existem outros
modificadores de acesso como private e protected que
garantem níveis diferentes de acesso, sendo o private o mais restritivo.*/
class Pessoa {
    public $nome;
}
$cezar = new Pessoa();
$cezar->nome = "cezar";
echo $cezar->nome;
