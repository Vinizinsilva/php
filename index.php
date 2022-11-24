<?php
echo 'Olá Neymar jr.... o ano está acabando ...........';
echo '<br>';
echo '<h1>Vini</h1>';
/*
http://localhost/php/php/index.php
*/

print('<h2> Quinta-Feira</h2>');
print_r('<h2> Sexta-Feira</h2>');


/* Comando que exibe mensagem na tela:

echo
print
print_r
*/

$nome = 'Vini';  // Tipo Variável: text
$idade = 17;   // Tipo Variável: number
$altura = 1.71;  //Tipo Variável: number
$remedio = false;  // Tipo Variável: boolean
// true - verdadeiro
// false - falso

echo '<br>';
echo $nome . '<br>';
echo $idade . '<br>';
echo $altura . '<br>';
echo $remedio . '<br>';
echo 'Olá' . $nome . ' você tem ' . $idade . 'anos'; 


echo '<br>';
echo gettype($nome) . '<br>';
echo gettype($idade) . '<br>';
echo gettype($altura) . '<br>';
echo gettype($remedio) . '<br>';

// comando gettype mostra o tipo de dados usado na variável.

echo '<br>';
echo '<h1> Operações </h1>';

$n1 = 10;
$n2 = 2;

echo $n1 + $n2 . '<br>';
echo $n1 - $n2 . '<br>';
echo $n1 * $n2 . '<br>';
echo $n1 / $n2 . '<br>';
echo $n1 % $n2 . '<br>';   //sobra de valor
echo $n1 ** $n2 . '<br>';  //exponensiação






?>