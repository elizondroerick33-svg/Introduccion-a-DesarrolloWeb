<html>
<head>
    <title>Formulario de entrada del dato</title>
    <meta charset="UTF-8">
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
    if (isset($_REQUEST['nombre']) && $_REQUEST['nombre'] !== '') {
        // htmlspecialchars evita inyección de HTML/JS (XSS) al mostrar el nombre
        $Nombre = htmlspecialchars($_REQUEST['nombre'], ENT_QUOTES, 'UTF-8');
        echo "El nombre es: " . $Nombre . "<br>";

        // Se convierte a entero para comparar correctamente como número
        $Edad = isset($_POST["edad"]) ? intval($_POST["edad"]) : null;

        // Se verifica si la edad fue ingresada y si es mayor a 18
        if ($Edad !== null && $Edad > 18) {
            echo "usted puede votar en las próximas elecciones 2028";
        } else {
            echo "Usted no es mayor de edad";
        }
    }
    ?>
</body>
</html>
