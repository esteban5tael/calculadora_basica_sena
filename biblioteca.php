<?php
// Desarrollador: [Tu Nombre]
// Programa de Formación: [Nombre del Programa]
// Evidencia: Uso de funciones - Operaciones Aritméticas

// Definición de la función que realiza operaciones aritméticas
function operaciones($num1, $num2, $operacion = "S") {
    // Se utiliza una estructura switch para determinar la operación a realizar
    switch ($operacion) {
        case "S": // Suma
            return $num1 + $num2;
        case "R": // Resta
            return $num1 - $num2;
        case "M": // Multiplicación
            return $num1 * $num2;
        case "D": // División
            if ($num2 != 0) {
                return $num1 / $num2;
            } else {
                return "Error: División por cero no permitida.";
            }
        default: // Opción por defecto si la operación no es válida
            return "Operación no válida.";
    }
}

// Verificación si la solicitud al servidor es de tipo POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtención de valores desde el formulario POST
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacion = $_POST['operacion'];

    // Llamada a la función operaciones con los valores obtenidos
    $resultado = operaciones($num1, $num2, $operacion);

    // Redirigir de vuelta a la página con los resultados y valores en la URL
    header("Location: calculadora.php?num1=$num1&num2=$num2&operacion=$operacion&resultado=$resultado");
    exit; // Finalizar el script
}
?>
