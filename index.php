<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="registro.css">
</head>
<body>
  <?php
    require_once __DIR__ . "/vendor/autoload.php";
    use Dotenv\Dotenv;
    $dotenv = Dotenv::createImmutable(__DIR__);
    $dotenv->load();
    echo $_ENV["PORT"]
  ?>
    <div class="registro-container">
        <h2>Registro en la Clínica Veterinaria</h2>
        <form action="tu-script-de-registro.php" method="post">
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="text" name="username" placeholder="Nombre de usuario" required>
            <select name="Rol" id="Rol">
              <option value="Usuario"></option>
              <option value="Asministrador"></option>
            </select>
            <input type="email" name="email" placeholder="Correo Electrónico" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit">Registrarse</button>
        </form>
    </div>
</body>
</html>

</body>
</html>