# php
 introdução ao básico do PHP


# PHP (Hypertext Preprocessor)

Uma linguagem server-side, rolada ao lado do servidor. É uma liguagem de programação back-end, pois ela realiza a comunicação com banco de dados. Ele é um processador no servidor e o resultado do processamento é enviado ao cliente(quem requisitou).

Ex: Arquivo PHP: 2+2
Cliente: 4
Todo arquivo php usa uma extensão: nome.php

Requisitor para funcionar:

Xampp
hhtps://www.apachefriends.org/pt_br/index.html

# Onde gravado os arquivos:

` c:\xampp\htdocs`

Exemplo

`c:\xampp\htdocs\site\index.php`

# Acesso ao site:

`http://localhost/`

Exemplo

`http://localhost/site/index.php`

# Variáveis:

- Variável é um espaço na memória que damos um nome para armazenar algum valor.
- O PHP é case-sensitive, significativo de acordo com o valor. Ex: para uma variável que vai armazenar a idade de uma pessoa eu coloco o nome da variável de $idade.
- No PHP toda variável inicia com $
Não utilize caracteres especiais, espaços ou acentos para o nome das variáveis. Alguns deles até funcionam, porém é recomendável escrever nome de variáveis de forma simples.

Ex:

$endereço  ----  errado
$endereco  --- correto
$Endereco  --- errado
$EndeReco --- errado
$endereco_do_Cliente --- errado
$end89567  --  errado
$endChico  -- errado
$chocolate -- errado


## Tipos de dados:

- os valores em php podem ser divididos entre os tipos:
- string : toods os valores que estiver entre aspas é uma string, ou seja, uma texto. Ex:'Vini'
- interger: todo número inteiro. Ex: 41
-float ou double: todo número decimal . Ex: 1.75
- Boolean: valor verdadeiro (true) ou falso (false)

# operadores aritiméticos:

+ : adição
- : sibtração
* : multiplicação
/ : divisão
** : exponenciação
% : resto da divisão, operador de módulo