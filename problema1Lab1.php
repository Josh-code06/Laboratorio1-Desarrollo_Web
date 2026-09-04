<?php
$radio = readline("Escriba el radio del circulo: ");
$pi = 3.1416;

$area = $pi * (float)$radio**2;
$per = 2* $pi * $radio;

print("El area del circulo es: $area\n");
print("El perimetro del circulo es: $per");
?>