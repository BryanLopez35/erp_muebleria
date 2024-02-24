<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include your database connection file
    include_once("./conexion.php");

    // Get username and password from the form
    $email = $_POST["email"]; // Utiliza el campo 'name' del formulario
    $password = $_POST["password"];

    // Query to check if the user exists
    $query = "SELECT * FROM users WHERE email = '$email'";
    $user = $dbManager->DataRow($query);

    if ($user) {
        // Check if the entered password matches the stored password
        if ($password === $user['password']) {
            // Authentication successful
            $_SESSION["email"] = $email;
            header("Location: ../dashboard.php"); // Cambié la ruta para que sea relativa
            exit();
        } else {
            // Authentication failed
            echo "Contraseña incorrecta";
        }
    } else {
        // User not found
        echo "Usuario no encontrado";
    }
}
?>
