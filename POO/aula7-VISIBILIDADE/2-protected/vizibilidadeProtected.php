<?php
/*Em PHP, a visibilidade protected é um modificador
de acesso que restringe o acesso a propriedades,
métodos e constantes de uma classe.
Aqui está um resumo detalhado:

O que significa protected?

Acesso restrito: Membros declarados como protected
só podem ser acessados dentro da própria classe e
por classes que herdam dela (classes filhas).
Isso significa que instâncias da classe fora da
hierarquia de herança não podem acessar esses membros.
Quando usar protected?

Use protected quando você deseja que um membro
seja acessível apenas dentro da classe e em suas subclasses.
Isso é útil para esconder detalhes de implementação
interna da classe, ao mesmo tempo em que permite que as
subclasses personalizem ou estendam o comportamento da classe pai.
Exemplo:

PHP

class Animal {
    protected $nome;
    public function __construct($nome) {
        $this->nome = $nome;
    }
    protected function exibirNome() {
        echo "Nome do animal: " . $this->nome;
    }
}
class Cachorro extends Animal {
    public function latir() {
        echo "Au au! ";
        $this->exibirNome(); // Acesso ao método protected da classe pai
    }
}
$cachorro = new Cachorro("Rex");
$cachorro->latir(); // Saída: Au au! Nome do animal: Rex
// $cachorro->exibirNome(); // Erro: método protegido não pode ser acessado fora da classe
Pontos importantes:

protected oferece um nível de encapsulamento
intermediário entre public e private.
É essencial para implementar herança e
polimorfismo de forma segura e organizada.
A visibilidade protected garante que membros sensíveis da
classe sejam protegidos de acesso externo, mas ainda estejam
disponíveis para subclasses que precisem deles.*/


class Animal {
    protected $nome;
    public function __construct($nome) {
        $this->nome = $nome;
    }
    protected function exibirNome() {
        echo "Nome do animal: " . $this->nome;
    }
}
class Cachorro extends Animal {
    public function latir() {
        echo "Au au! ";
        $this->exibirNome(); // Acesso ao método protected da classe pai
    }
}
$cachorro = new Cachorro("Rex");
$cachorro->latir(); // Saída: Au au! Nome do animal: Rex
// $cachorro->exibirNome(); // Erro: método protegido não pode ser acessado fora da classe