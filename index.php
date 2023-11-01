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
  ?>
   <h1>Veterinaria AnimalSalud</h1>
  <div class="ContainerPrincipal" >
    <div class="Iconos">
      <div class="Icon">
        <img src="./imagenes/perro.png" alt="">
      </div>
      <div class="Icon">
        <img src="./imagenes/gato.png" alt="">
      </div>
      <div class="Icon">
        <img src="./imagenes/cruz.png" alt="">
      </div>
    </div>
    <div class="ImageDoctora">
      <img src="./imagenes/Doctora.svg" alt="">
    </div>
    <div class="RegistroContainer">
      <h2>Registro en la Clínica Veterinaria</h2>
      <form class="Registro" action="" method="post">
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="text" name="username" placeholder="Nombre de usuario" required>
        <select name="Rol" id="Rol">
          <option value="Usuario">Usuario</option>
          <option value="Administrador">Administrador</option>
        </select>
        <input type="email" name="email" placeholder="Correo Electrónico" required>
        <input type="password" name="password" placeholder="Contraseña" required>
        <button type="submit">Registrarse</button>
      </form>
    </div>  
  </div>
  <script src="./js/main.js"></script>
</body>
</html>