<?php
/*A estrutura de repetição `for` é uma das mais utilizadas em programação quando você precisa executar um bloco de código um número específico de vezes. O loop `for` é eficiente porque oferece, de forma compacta, uma maneira de inicializar uma variável, estabelecer uma condição de controle e incrementá-la/decrementá-la em cada iteração.
### **Estrutura básica do `for` em PHP**
``` php
for (inicialização; condição; incremento/decremento) {
    // Bloco de código a ser executado
}
```
### **Componentes do `for`**
1. **Inicialização**: Executada apenas uma vez no início do loop. Geralmente é usada para inicializar uma variável de controle.
2. **Condição**: Verificada antes de cada iteração. Se a condição for verdadeira, o loop continua. Se for falsa, o loop é encerrado.
3. **Incremento/Decremento**: Executado ao final de cada iteração. É onde o valor da variável de controle é alterado.
*/


for ($i = 0; $i <= 10; $i++) {
    echo "Contagem atual: $i <br>";
}