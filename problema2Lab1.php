<!DOCTYPE html>
<html>
<head>
    <title>Conversión</title>

    <style>
        body {
            font-family: Arial;
            text-align: center;
            background-color: #a8c1d8;
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

<div class="contenedor">

    <h2>Conversión de pulgadas a centímetros</h2>

    <form method="post">
        Ingrese las pulgadas:
        <input type="number" name="pulg" required>
        <button type="submit">Convertir</button>
    </form>

    <?php
    if (isset($_POST["pulg"])) {

        $pulg = $_POST["pulg"];
        $cm = (int)$pulg * 2.54;

        print("<p>$pulg pulgadas son equivalentes a: $cm centímetros</p>");
    }
    ?>

</div>

</body>
</html>