<!DOCTYPE html>
<html>
<head>
    <title>Área y Perímetro</title>

    <style>
        body {
            font-family: Arial;
            text-align: center;
            background-color: #dceeff;
        }

        .contenedor {
            background-color: white;
            width: 400px;
            margin: 80px auto;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px #aaa;
        }

        h2 {
            color: #333;
        }

        input {
            padding: 8px;
            margin: 10px;
            border: 1px solid #aaa;
            border-radius: 5px;
        }

        button {
            padding: 8px 15px;
            background-color: #337ab7;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #286090;
        }

        p {
            font-size: 18px;
            color: #333;
        }
    </style>
</head>

<body>

<h2>Área y Perímetro de un Círculo</h2>

<form method="post">
    Radio:
    <input type="number" name="radio" required>
    <button type="submit">Calcular</button>
</form>

<?php

if (isset($_POST["radio"])) {

    $radio = $_POST["radio"];
    $pi = 3.1416;

    $area = $pi * (float)$radio**2;
    $per = 2 * $pi * $radio;

    echo "<p>Área: $area</p>";
    echo "<p>Perímetro: $per</p>";
}

?>

</body>
</html>