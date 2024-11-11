<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $description = $_POST['description'];
    $options = $_POST['options'];
    $interests = isset($_POST['interests']) ? implode(", ", $_POST['interests']) : '';

    // Validaciones
    if (strlen($description) > 250) {
        echo "La descripción no puede tener más de 250 caracteres.";
    } else {
        echo "Nombre: " . $name . "<br>";
        echo "Dirección: " . $address . "<br>";
        echo "Correo: " . $email . "<br>";
        echo "Descripción: " . $description . "<br>";
        echo "Opción seleccionada: " . $options . "<br>";
        echo "Intereses: " . $interests . "<br>";
    }
}
?>

<form method="POST" enctype="multipart/form-data">
    <label for="name">Nombre:</label>
    <input type="text" name="name" required><br>

    <label for="address">Dirección:</label>
    <input type="text" name="address" required><br>

    <label for="email">Correo electrónico:</label>
    <input type="email" name="email" required><br>

    <label for="photo">Fotografía:</label>
    <input type="file" name="photo" required><br>

    <label for="description">Descripción:</label>
    <textarea name="description" required></textarea><br>

    <label for="options">Opciones:</label>
    <select name="options" required>
        <option value="option1">Opción 1</option>
        <option value="option2">Opción 2</option>
    </select><br>

    <label for="interests">Intereses:</label><br>
    <input type="checkbox" name="interests[]" value="interest1"> Interés 1<br>
    <input type="checkbox" name="interests[]" value="interest2"> Interés 2<br>

    <button type="submit">Inscribirse</button>
</form>
