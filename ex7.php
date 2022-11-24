<?php

/*  Faça um programa para uma loja de tintas. O programa deverá pedir o tamanho em metros quadrados da área a ser pintada. Considere que a cobertura da tinta é de 1 litro para 3 metros quadrados e que a tinta é vendida em latas de 18 litros, que custam R$80,00. Informe ao usuário a quantidades de latas de tinta a serem compradas e o preço total.  









*/


   $metro = '3000';
   $tinta = ($metro / 3)/18;
echo 'Você terá que comprar ' . intval($tinta) . ' latas de tintas';






?>