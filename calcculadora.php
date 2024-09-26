<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabla de suma</title>
</head>
<body>
<form method="post">
    <input type="number" name="num" required>
    <input type="submit" name="submit" value="Multiplicar">
    
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num'];
    echo "<h2>Tabla del: $num1</h2>";

    for ($i = 1; $i <= 10; $i++) {
        $resultado = $num1 * $i;
        echo "$num1 x $i = $resultado<br>";
    }
}
?>
</body>
</html>