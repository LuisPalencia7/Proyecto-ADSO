<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="Estilos.css">
</head>
<body>

<form action="registrar.php" method="POST">
    <h2>Hola</h2>
    <p>Inicia tu registro</p>

    <div class="input-wrapper">
        <label for="name">Nombre</label>
        <input type="text" id="name" name="name" placeholder="Nombre" required>
        <img class="input-icon" src="images/name.svg" alt="Ícono de nombre">
    </div>
    <div class="input-wrapper">
        <label for="email">Correo</label>
        <input type="email" id="email" name="email" placeholder="Correo" required>
        <img class="input-icon" src="images/email.svg" alt="Ícono de correo">
    </div>
    <div class="input-wrapper">
        <label for="direction">Dirección</label>
        <input type="text" id="direction" name="direction" placeholder="Dirección" required>
        <img class="input-icon" src="images/direction.svg" alt="Ícono de dirección">
    </div>
    <div class="input-wrapper">
        <label for="phone">Teléfono</label>
        <input type="tel" id="phone" name="phone" placeholder="Teléfono" required>
        <img class="input-icon" src="images/phone.svg" alt="Ícono de teléfono">
    </div>
    <div class="input-wrapper">
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" placeholder="Contraseña" required>
        <img class="input-icon" src="images/password.svg" alt="Ícono de contraseña">
    </div>
    <input class="btn" type="submit" name="register" value="Enviar">
</form>


</body>
</html>