<?php
session_start();
$name = $_SESSION['name'];
$direccion = $_SESSION['direccion'];
$email = $_SESSION['e-mail'];
$edad = $_SESSION['edad'];

echo $name;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Bienvenido papu</title>
</head>
<body>
    <div class="welcome-container">
    <h2>Bienvenido</h2>
    <p>
        !Hola <?php echo $name ?>!
    </p>
    <p>
        Tu direccion es <?php echo $direccion ?>
    </p>
    <p>
        Tienes <?php echo $edad ?> y tu correo es <?php echo $email ?>
    </p>
    </div>
</body>
</html>