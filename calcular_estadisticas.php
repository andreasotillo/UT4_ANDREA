<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $values = array_map('intval', explode(',', $_POST['values']));

    // Calcular la media
    $mean = array_sum($values) / count($values);

    // Calcular la moda
    $values_count = array_count_values($values);
    $mode = array_search(max($values_count), $values_count);

    // Calcular la mediana
    sort($values);
    $middle = floor(count($values) / 2);
    if (count($values) % 2 == 0) {
        $median = ($values[$middle - 1] + $values[$middle]) / 2;
    } else {
        $median = $values[$middle];
    }

    echo "Media: " . $mean . "<br>";
    echo "Moda: " . $mode . "<br>";
    echo "Mediana: " . $median . "<br>";
}
?>

<form method="POST">
    <label for="values">Valores (separados por coma):</label>
    <input type="text" name="values" required><br>
    <button type="submit">Calcular</button>
</form>
