<?php

/*Em PHP, a função include é uma ferramenta poderosa
para inserir o conteúdo de um arquivo PHP dentro de outro.
Isso permite modularizar seu código, reutilizar partes
dele e organizar seus projetos de forma mais eficiente.

Como funciona:

Quando o PHP encontra uma instrução include,
ele basicamente copia e cola o conteúdo do
arquivo especificado no local onde a instrução include aparece.
O arquivo incluído pode conter
código PHP, HTML, CSS ou JavaScript.
Se o arquivo incluído contiver código PHP,
ele será executado como se estivesse presente no arquivo principal.
O include tenta prosseguir com a execução
do script mesmo que o arquivo incluído não exista,
gerando um aviso (warning) caso não encontre o arquivo.
Sintaxe:

PHP

include 'nome_do_arquivo.php';
ou

PHP

include ('nome_do_arquivo.php');
Casos de uso comuns:

Cabeçalhos e rodapés: Inclua arquivos que
contenham o cabeçalho e o rodapé do seu site em todas as
 páginas, evitando repetição de código.
Funções e classes: Armazene funções e classes
reutilizáveis em arquivos separados e inclua-os quando necessário.
Configurações: Mantenha configurações do seu site
(como informações de banco de dados) em um arquivo separado
e inclua-o em todos os scripts que precisam dessas configurações.
Partes de templates: Divida suas páginas em
partes menores e inclua-as conforme necessário.
Diferenças entre include e require:

A principal diferença entre include e
require é como eles lidam com erros.
O include gera um aviso (warning) se o arquivo
não for encontrado e continua a execução do script.
O require gera um erro fatal (fatal error) se o
arquivo não for encontrado e interrompe a execução do script.
Existem tambem as funções include_once e require_once,
que previnem a inclusão de um mesmo arquivo mais de uma vez dentro do mesmo script.
Exemplo:

Suponha que você tenha um arquivo chamado config.php
com as configurações do seu banco de dados:

PHP

<?php
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "seu_banco_de_dados";
?>
Você pode incluir esse arquivo em outros
scripts para acessar as configurações:

PHP

<?php
include 'config.php';

// Agora você pode usar as variáveis $servername, $username, etc.
$conn = new mysqli($servername, $username, $password, $dbname);

// ...
?>
Considerações:

Use caminhos relativos ou absolutos para
especificar o arquivo a ser incluído.
Tenha cuidado com a segurança ao incluir arquivos,
especialmente se eles contiverem código PHP.
Organize seus arquivos de forma lógica para
facilitar a manutenção do seu código.*/
include('teste.php');
?>
<p>após o include</p>

