<?php
/*Em PHP, include_once é uma construção de linguagem usada para incluir e avaliar arquivos,
similar a include. No entanto, include_once tem uma característica adicional importante:
ele garante que um arquivo seja incluído apenas uma vez durante a execução do script.

Como include_once funciona:

Inclusão do Arquivo: Quando o PHP encontra uma instrução include_once,
ele inclui o conteúdo do arquivo especificado no script.
Verificação de Inclusão: Antes de incluir o arquivo,
include_once verifica se o arquivo já foi incluído anteriormente no mesmo script.
Inclusão Única: Se o arquivo já foi incluído, include_once
ignora a instrução e não inclui o arquivo novamente.
Aviso (Warning): Se o arquivo especificado não for encontrado,
include_once gera um aviso (E_WARNING) e continua a execução do script.
Quando usar include_once:

Prevenção de Redefinição: Use include_once quando você
precisa garantir que um arquivo seja incluído apenas uma vez
para evitar a redefinição de funções, classes ou variáveis.
Bibliotecas e Funções: Ao incluir bibliotecas de funções ou
arquivos com definições de classe, use include_once para evitar conflitos e erros.
Configurações: Se o seu script depende de um arquivo de
configuração que define variáveis globais, use include_once para
garantir que as configurações sejam carregadas apenas uma vez.
Exemplo:

Suponha que você tenha um arquivo chamado funcoes.php com funções úteis:

PHP

<?php
// funcoes.php
function saudacao($nome) {
    echo "Olá, " . $nome . "!";
}
?>
Você pode usar include_once para incluir este arquivo em outros scripts:

PHP

<?php
// script.php
include_once 'funcoes.php';

saudacao("João"); // Olá, João!

// Se você tentar incluir funcoes.php novamente, ele será ignorado.
include_once 'funcoes.php';
?>
Vantagens de usar include_once:

Evita Redefinições: Garante que funções, classes e variáveis
sejam definidas apenas uma vez, prevenindo erros.
Melhora a Organização: Ajuda a manter seu código organizado,
garantindo que arquivos sejam incluídos apenas quando necessário.
Reduz Erros: Diminui a chance de erros causados por inclusões duplicadas.
Considerações:

Assim como include, use caminhos de arquivo corretos
(relativos ou absolutos) ao usar include_once.
Tenha cuidado com a segurança ao incluir arquivos de fontes não confiáveis.
include_once tem um pequeno impacto no desempenho, pois o PHP
precisa verificar se o arquivo já foi incluído. No entanto,
na maioria dos casos, esse impacto é insignificante.
Em resumo, include_once é uma ferramenta valiosa em PHP para
garantir que arquivos sejam incluídos apenas uma vez,
prevenindo erros e melhorando a organização do seu código.*/
include_once ('index.php');

?>

<p>Depois do Include_once</p>
