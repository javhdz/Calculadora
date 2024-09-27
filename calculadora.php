<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <style>
        body {
            background-color: blue;
            color: white; /* Cambiar el texto a blanco para mayor legibilidad */
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
    <h1>UNIVERSIDAD TECNOLOGICA DE COAHUILA :D</h1>
    <h1>Calculadora en PHP</h1>
    <form method="post">
        <input type="number" name="num1" placeholder="Número 1" required>
        <input type="number" name="num2" placeholder="Número 2" required>
        
        <select name="operation">
            <option value="sum">Sumar</option>
            <option value="sub">Restar</option>
            <option value="mul">Multiplicar</option>
            <option value="div">Dividir</option>
        </select>
        
        <input type="submit" name="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $resultado = 0;

        switch ($operation) {
            case "sum":
                $resultado = $num1 + $num2;
                echo "<h2>Resultado: $num1 + $num2 = $resultado</h2>";
                break;
            case "sub":
                $resultado = $num1 - $num2;
                echo "<h2>Resultado: $num1 - $num2 = $resultado</h2>";
                break;
            case "mul":
                $resultado = $num1 * $num2;
                echo "<h2>Resultado: $num1 * $num2 = $resultado</h2>";
                break;
            case "div":
                if ($num2 != 0) {
                    $resultado = $num1 / $num2;
                    echo "<h2>Resultado: $num1 / $num2 = $resultado</h2>";
                } else {
                    echo "<h2>Error: No se puede dividir por cero.</h2>";
                }
                break;
            default:
                echo "<h2>Operación no válida.</h2>";
                break;
        }
    }
    ?>
</body>
</html>
