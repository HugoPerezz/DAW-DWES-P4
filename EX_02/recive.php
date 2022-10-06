<?php

$numero1 = $_POST['n1'];
$numero2 = $_POST['n2'];
$operacion = $_POST['operacion'];
$resultado = 0;
if ($operacion == "suma") {
    $resultado = $numero1 + $numero2;
    echo "El resultado de sumar $numero1 y $numero2 es $resultado <br>";
} elseif ($operacion == "resta") {
    $resultado = $numero1 - $numero2;
    echo "El resultado de restar $numero1 y $numero2 es $resultado <br>";
} elseif ($operacion == "multiplica") {
    $resultado = $numero1 * $numero2;
    echo "El resultado de multiplicar $numero1 y $numero2 es $resultado <br>";
} elseif ($operacion == "divide") {
    $resultado = $numero1 / $numero2;
    echo "El resultado dividir $numero1 y $numero2 es $resultado <br>";
}