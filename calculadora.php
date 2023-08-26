<!DOCTYPE html>
<html>
<head>
    <title>Calculadora</title>
    <style>
        /* Estilos para el diseño de la página */
        body {
            font-family: Arial, sans-serif; /* Estilo de fuente */
            background-color: #f5f5f5; /* Color de fondo */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh; /* Altura mínima de la vista */
            flex-direction: column;
        }

        h1 {
            color: #333; /* Color del texto */
            margin-bottom: 20px; /* Espacio inferior */
        }

        /* ... (estilos para otros elementos) ... */
    </style>
</head>
<body>
    <h1>Calculadora</h1>
    <!-- Formulario para ingresar valores y operación -->
    <form action="biblioteca.php" method="post">
        <label for="num1">Número 1:</label>
        <input type="number" id="num1" name="num1" required><br>

        <label for="num2">Número 2:</label>
        <input type="number" id="num2" name="num2" required><br>

        <label>Operación:</label>
        <input type="radio" id="suma" name="operacion" value="S" checked>
        <label for="suma">Suma</label>

        <input type="radio" id="resta" name="operacion" value="R">
        <label for="resta">Resta</label>

        <input type="radio" id="multiplicacion" name="operacion" value="M">
        <label for="multiplicacion">Multiplicación</label>

        <input type="radio" id="division" name="operacion" value="D">
        <label for="division">División</label><br>

        <input type="submit" value="Calcular">
    </form>

    <!-- Mostrar resultado si se recibe desde el archivo "biblioteca.php" -->
    <?php
    if (isset($_GET['resultado'])) {
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $operacion = $_GET['operacion'];
        $resultado = $_GET['resultado'];

        // Mostrar el resultado y detalles de la operación
        echo "<div class='resultado'>";
        echo "<h2>Operación realizada:</h2>";
        echo "<p>Número 1: $num1</p>";
        echo "<p>Número 2: $num2</p>";
        echo "<p>Tipo de operación: $operacion</p>";
        echo "<p>Resultado: $resultado</p>";
        echo "</div>";
    }
    ?>
</body>
</html>
