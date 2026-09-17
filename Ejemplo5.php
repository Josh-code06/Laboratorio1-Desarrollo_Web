<html>
<head><title> EJEMPLO DE VARIABLES </title></head>
<body>
    <h1>Ejemplo de funciones para las variables</h1>
    <?php
    $ed = 42;
    $nom = 'Juan';
    if (is_integer ($ed) && is_string ($nom))
        print ("$nom tiene $ed años");
    ?>  
</body>
</html>