<?php
/*Em PHP, a visibilidade private é o modificador de acesso mais restritivo.
Aqui está um detalhamento completo:

O que significa private?

Acesso extremamente restrito:
Membros (propriedades, métodos ou constantes) declarados como
private só podem ser acessados dentro da própria classe em que foram definidos.
Nem subclasses (classes que herdam da classe pai)
nem instâncias da classe fora dela podem acessar esses membros.
Quando usar private?

Use private quando você deseja encapsular
completamente um membro da classe,
escondendo-o de qualquer acesso externo.
Isso é crucial para proteger dados
sensíveis ou detalhes de implementação interna que não
devem ser modificados ou acessados de fora da classe.
É uma prática fundamental para manter a
integridade e a segurança do seu código.
Exemplo:

PHP

class Banco {
    private $saldo = 1000;
    private function verificarSaldo() {
        return $this->saldo;
    }
    public function sacar($valor) {
        if ($valor <= $this->verificarSaldo()) {
            $this->saldo -= $valor;
            echo "Saque de R$ " . $valor . " realizado. Novo saldo: R$ " . $this->verificarSaldo();
        } else {
            echo "Saldo insuficiente.";
        }
    }
}
$conta = new Banco();
$conta->sacar(500); // Saída: Saque de R$ 500 realizado. Novo saldo: R$ 500
// $conta->saldo; // Erro: propriedade privada não pode ser acessada fora da classe
// $conta->verificarSaldo(); // Erro: método privado não pode ser acessado fora da classe
Pontos importantes:

private garante o mais alto nível de encapsulamento.
Ajuda a evitar que o estado interno de um objeto seja corrompido por código externo.
É uma prática recomendada para proteger dados e lógica sensíveis dentro de suas classes.
A visibilidade private é muito importante para garantir que dados
sensíveis não sejam acessados por outras classes.*/

class Banco {
    private $saldo = 1000;
    private function verificarSaldo() {
        return $this->saldo;
    }
    public function sacar($valor) {
        if ($valor <= $this->verificarSaldo()) {
            $this->saldo -= $valor;
            echo "Saque de R$ " . $valor . " realizado. Novo saldo: R$ " . $this->verificarSaldo();
        } else {}
    }
}

$conta = new Banco();
$conta->sacar(500);


