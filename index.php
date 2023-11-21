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
    require_once (__DIR__ ."/controller/user_controller.php");
    require_once (__DIR__ ."/process/login.php");
  ?>
  <header class="Header">
    <div class="LogoHeader"></div>
    <h1>Veterinaria AnimalSalud</h1>
    <div class="Botones">
      <button  class="InicioSesionHeader">Iniciar Sesion</button>
      <button class="RegistrarseHeader">Registrarse</button>
    </div>
  </header>
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
    <div class="InicioRegistro">
      <div class="IniciarContainer">
        <h2>Inicia Sesion</h2>
        <form class="InicioSesion" method="post">
          <input type="text" name="UsernameInicio" placeholder="Username">
          <input type="password" name="PasswordInicio" placeholder="Password">
          <button class="Iniciar" type="submit" name="Iniciar">Iniciar Sesion</button>
       </form>
      </div>
      <div class="RegistroContainer">
        <h2>Registro en la Clínica Veterinaria</h2>
        <form class="Registro" method="post">
          <input type="text" name="nombre" placeholder="Nombre" value="<?php echo $_POST['nombre'] ?? ""?>">
          <input type="text" name="username" placeholder="Nombre de usuario" value="<?php echo $_POST['username'] ?? ""?>">
          <input type="email" name="email" placeholder="Correo Electrónico" value="<?php echo $_POST['email'] ?? ""?>">
          <input type="password" name="password" placeholder="Contraseña" value="<?php echo $_POST['password'] ?? ""?>">
          <button name="Registrarse" type="submit">Registrarse</button>
        </form>
        <?php
        require_once(__DIR__ ."/process/registro_process.php");
        echo (new processRegistro) -> validacionRegistro();
        ?>
      </div>  
    </div>
  </div>
  <script src="./js/main.js"></script>
</body>
</html>