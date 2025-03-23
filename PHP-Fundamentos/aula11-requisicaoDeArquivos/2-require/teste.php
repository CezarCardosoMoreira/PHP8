<?php
/*Em PHP, require é uma construção de linguagem usada
para incluir e avaliar arquivos. Assim como include,
ele incorpora o conteúdo de um arquivo especificado
no script PHP que o chama. No entanto,
há uma diferença crucial entre os dois:

Diferença Fundamental entre require e include

Tratamento de Erros:
require produz um erro fatal (E_COMPILE_ERROR)
se o arquivo especificado não for encontrado.
Isso interrompe a execução do script.
include gera um aviso (E_WARNING)
no mesmo cenário, mas o script continua a ser executado.
Quando usar require

require é tipicamente usado quando o arquivo que
você está incluindo é essencial para o
funcionamento do seu script. Por exemplo:

Arquivos de configuração: Se o seu script
precisa de configurações de banco de dados ou
outras configurações cruciais, use require.
Se esses arquivos estiverem ausentes,
o script não pode funcionar corretamente.
Bibliotecas de funções: Se o seu script depende de
funções ou classes definidas em um arquivo separado, use require.
A ausência dessas funções resultaria em erros.
Variações: require_once

PHP também oferece require_once. Essa variação garante
que um arquivo seja incluído apenas uma vez durante a execução do script.
Isso evita a redefinição de funções ou classes,
o que pode levar a erros fatais.

Exemplo:

PHP

<?php
// Inclui o arquivo de configuração. Se não for encontrado, o script para.
require 'config.php';

// O script continua a usar as configurações definidas em config.php.
echo "Nome do banco de dados: " . $dbname;
?>
Considerações Importantes:

Caminhos de Arquivo: Certifique-se de usar
caminhos de arquivo corretos (relativos ou absolutos) ao usar require.
Segurança: Tenha cuidado ao incluir arquivos fornecidos
por usuários ou de fontes não confiáveis.
Isso pode levar a vulnerabilidades de segurança.
Organização de Código: require ajuda a
manter seu código organizado, permitindo que você
divida funcionalidades em arquivos separados.
Em resumo, require é uma ferramenta essencial em
PHP para incluir arquivos críticos, garantindo que seu
script dependa de componentes necessários para funcionar corretamente.*/

require('index.php');
?>
<p>Depois o require</p>


