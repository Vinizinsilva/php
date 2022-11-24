<?php
// O Maia adoro vender figurinhas do pokemon
// ele tem 420 figurinhas repetidas 
// ele está vendendocada figurinhapor R$ 2 cada
// Quanto ele vai ganhar se vender 305 figurinhas?
// Quanto ele ainda pode lucrar com elas?

$totalfigurinhas = 420;
$vendidas = 305;
$lucro = $vendidas * 2;
$sobraram = ($totalfigurinhas - $vendidas)* 2;

echo 'Quanto ele vai ganhar se vender 305 figurinha?  R$' . $lucro;
echo '<br>';
echo 'Quanto ele ainda pode lucrar com eles? R$' . $sobraram;



?>