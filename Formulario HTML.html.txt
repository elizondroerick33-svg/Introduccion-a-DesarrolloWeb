<html>
<head>
    <title>Formulario de entrada del dato</title>
</head>
<body>
    <!-- Formulario que pide nombre y edad -->
    <form method="post" action="">
        Ingrese su nombre:
        <input type="text" name="nombre" id="nombre">
        <br><br>
        Ingrese su Edad:
        <input type="text" name="edad" id="edad">
        <br><br>
        <input type="submit" value="confirmar">
    </form>

    <?php
    if (isset($_REQUEST['nombre'])) {
        $Nombre = $_REQUEST['nombre'];
        echo "El nombre es: " . $Nombre . "<br>";

        $Edad = $_POST["edad"];

        // Se verifica si la edad fue ingresada y si es mayor a 18
        if (isset($Edad) and $Edad > 18) {
            echo "usted puede votar en las próximas elecciones 2028";
        } else {
            echo "Usted no es mayor de edad";
        }
    }
    ?>
</body>
</html>
