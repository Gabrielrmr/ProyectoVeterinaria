<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/registro.css">
</head>
<body>
  <?php
    require_once __DIR__ . "/vendor/autoload.php";
    use Dotenv\Dotenv;
    $dotenv = Dotenv::createImmutable(__DIR__);
    $dotenv->load();
    echo $_ENV["PORT"]
  ?>
  
  <div class="ContainerPrincipal" >
    <div class="RegistroContainer">
      <h2>Registro en la Clínica Veterinaria</h2>
      <form class="Registro" action="" method="post">
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
    <div class="slider-container">
        <div class="slider">
            <img src="./imagenes/conejo.jpg" alt="Imagen 1">
            <img src="./imagenes/perro.jpg" alt="Imagen 2">
            <img src="./imagenes/gato.jpg" alt="Imagen 3">
            <img src="./imagenes/loro.jpg" alt="Imagen 4">
        </div>
        <div class="slider-indicator">
            <span data-slide="1"></span>
            <span data-slide="2"></span>
            <span data-slide="3"></span>
            <span data-slide="4"></span>
        </div>
    </div>
  </div>
  <script src="./js/main.js"></script>
</body>
</html>