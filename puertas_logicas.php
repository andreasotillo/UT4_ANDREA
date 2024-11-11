<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $input1 = $_POST['input1'];
    $input2 = $_POST['input2'];

    // Validación para asegurarse de que sean 0 o 1
    if (($input1 != 0 && $input1 != 1) || ($input2 != 0 && $input2 != 1)) {
        echo "Los valores deben ser 0 o 1.";
    } else {
        echo "AND: " . ($input1 && $input2) . "<br>";
        echo "OR: " . ($input1 || $input2) . "<br>";
        echo "XOR: " . ($input1 ^ $input2) . "<br>";
    }
}
?>

<form method="POST">
    <label for="input1">Valor 1:</label>
    <input type="number" name="input1" required><br>
    <label for="input2">Valor 2:</label>
    <input type="number" name="input2" required><br>
    <button type="submit">Calcular</button>
</form>
