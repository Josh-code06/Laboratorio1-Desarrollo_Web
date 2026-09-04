<?php
$num1 = readline("Ingrese el primer valor: \n");
$num2 = readline("ingrese el segundo valor: \n");
$redon = readline("Ingrese el numero que desea redondear");

$suma = $num1 + $num2;
$rest = $num1 - $num2;
$mult = $num1 * $num2;
$Redondeado = round($redon);
$redon_Ar = ceil($redon);
$redon_ab = floor($redon);

echo "La suma es: $suma";
echo "La resta es: $rest";
echo "La multiplicación es: $mult";
echo "El redondeo es de: $redondeado";
echo "El redondeo hacia arriba es: $redon_Ar";
echo "El redondeo hacia abajo es: $redon_ab";

?>