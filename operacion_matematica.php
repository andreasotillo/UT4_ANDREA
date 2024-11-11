<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    echo "Resultado de la suma: " . ($num1 + $num2);
}
?>

<form method="POST">
    <label for="num1">Número 1:</label>
    <input type="number" name="num1" required><br>
    <label for="num2">Número 2:</label>
    <input type="number" name="num2" required><br>
    <button type="submit">Calcular</button>
</form>