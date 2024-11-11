<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $encrypted_message = $_POST['encrypted_message'];

    // Desencriptamos con base64
    $decrypted_message = base64_decode($encrypted_message);
    echo "Mensaje desencriptado: " . $decrypted_message;
}
?>

<form method="POST">
    <label for="encrypted_message">Mensaje encriptado:</label>
    <input type="text" name="encrypted_message" required><br>
    <button type="submit">Desencriptar</button>
</form>
