<!DOCTYPE html>
<html>
<head>
    <title>Área y Perímetro de un Círculo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
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
            background-color: #2e86de;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .resultado {
            color: #2e86de;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="contenedor">
        <h2>Área y Perímetro de un Círculo</h2>

        <!-- Formulario que pide el radio -->
        <form method="post" action="">
            Ingrese el radio: <input type="text" name="radio">
            <br><br>
            <input type="submit" value="Calcular">
        </form>

        <?php
        // Se ejecuta solo si el formulario fue enviado
        if (isset($_POST['radio'])) {
            $radio = $_POST['radio'];

            // Fórmulas: Área = π * r^2   -   Perímetro = 2 * π * r
            $area = pi() * ($radio ** 2);
            $perimetro = 2 * pi() * $radio;

            echo "<p class='resultado'>El área del círculo es: " . round($area, 2) . "</p>";
            echo "<p class='resultado'>El perímetro del círculo es: " . round($perimetro, 2) . "</p>";
        }
        ?>
    </div>
</body>
</html>
