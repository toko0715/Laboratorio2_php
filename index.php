<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Formulario</title>
</head>
<body>
    <div class="container">
    <h2>Datos del usuario</h2>
    <form method="POST">
        <label for="name">Nombre y Apellido</label>
        <input type="text" name="name" placeholder="Nombre del usuario">
        <label for="direccion">Direccion</label>
        <input type="text" name="direccion" placeholder="Direccion del usuario">
        <label for="e-mail">E-mail</label>
        <input type="email" name="e-mail" placeholder="Correo electronico">
        <label for="edad">Edad</label>
        <input type="text" name="edad" placeholder="18">
        <button type="submit"> Enviar</button>
        <button type="reset"> Limpiar</button>
    </form>
    </div>
</body>
</html>

<?php 

if ($_SERVER ["REQUEST_METHOD"] == "POST") {
    $name = $_POST ["name"];
    $direccion = $_POST ["direccion"];
    $email = $_POST ["e-mail"];
    $edad = $_POST ["edad"];
}

if ($name == null || $email == null || $edad == null ||  $direccion == null) {
    echo "<br>Todos los campos son obligatorios papu";
} else {
    $edad_n = (int)$edad;
    if ($edad_n == 0) {
        echo "<br>La edad solo debe tener valores numericos";
    } else {
        if ($edad_n < 18) {
            echo "<br>Solo se admiten usuarios mayores de edad";
        } else {
            session_start();
            $_SESSION['name'] = $name;
            $_SESSION['e-mail'] = $email;
            $_SESSION['direccion'] = $direccion;
            $_SESSION['edad'] = $edad;
            header("Location: formresult.php");
            exit();
        }
    }
}

?>
