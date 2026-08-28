<!DOCTYPE html>
<html>
<head>
    <title>Conversor de Pulgadas a Centímetros</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fdf6ec;
            text-align: center;
            padding: 40px;
        }
        .contenedor {
            background-color: white;
            display: inline-block;
            padding: 30px 50px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }
        input[type="submit"] {
            background-color: #e67e22;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .resultado {
            color: #e67e22;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="contenedor">
        <h2>Conversor de Pulgadas a Centímetros</h2>

        <form method="post" action="">
            Ingrese las pulgadas: <input type="text" name="pulgadas">
            <br><br>
            <input type="submit" value="Convertir">
        </form>

        <?php
        // 1 pulgada = 2.54 centímetros
        if (isset($_POST['pulgadas'])) {
            $pulgadas = $_POST['pulgadas'];
            $centimetros = $pulgadas * 2.54;

            echo "<p class='resultado'>Pulgadas: $pulgadas</p>";
            echo "<p class='resultado'>Centímetros: $centimetros</p>";
        }
        ?>
    </div>
</body>
</html>
