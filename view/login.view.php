<?php
    namespace controller;
    echo 'estas en view';

class Login {
    public function index() {
        // Cargar la vista login.view.php
        $vista = view('login');

        // Enviar datos a la vista (si es necesario)

        // Devolver la vista renderizada
        return $vista;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
</head>
<body>
    <h1>Inicio de sesión</h1>
    <form action="./login" method="POST">
        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email" required><br>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required><br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>