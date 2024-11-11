<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $message = $_POST['message'];

    // Usamos base64 para encriptar
    $encrypted_message = base64_encode($message);
    echo "Mensaje encriptado: " . $encrypted_message;
}
?>

<form method="POST">
    <label for="message">Mensaje a encriptar:</label>
    <input type="text" name="message" required><br>
    <button type="submit">Encriptar</button>
</form>