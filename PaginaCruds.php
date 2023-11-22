<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/PaginaCruds.css">
</head>
<body>
<header class="Header">
    <div class="LogoHeader">
    <img src="./imagenes/Logo.png" alt="">
    </div>
    <h1>Veterinaria AnimalSalud</h1>
    <button class="CerrarSesion">cerrar</button>
  </header>
  <main>
    <div class="Usuario">
        <img src="" alt="">
        <p>Nombre</p>
        <p>username</p>
        <p>correo</p> 
    </div>
    <div class="OpcionesUsuario">
        <a href="PaginaInicial.php" class="Regresar">
            <img src="./imagenes/flecha.png" alt="">
        </a>
        <div class="MostraTabla">
            <?php 
            require_once(__DIR__ ."./controller/PaginaInicial_controller.php");
            if (isset($_POST["option"])) {
                require_once(__DIR__ ."./php/".$_POST["option"]. '.php');
            }
            ?>
        </div>
        <form class="btnForm" method="post">
            <button type="submit" name="option" class="Opcion Vacunas" value="Vacunas">
                <img src="./imagenes/Vacunas.png" alt="">
                <h3>Vacunas</h3>
            </button>
        </form>
        <form class="btnForm" method="post">
            <button type="submit" name="option" class="Opcion Razas" value="Razas">
                <img src="./imagenes/Razas.png" alt="">
                <h3>Razas</h3>
            </button>
        </form>
        <form  class="btnForm" method="post">
            <button type="submit" name="option" class="Opcion Mascotas" value="Mascotas">
                <img src="./imagenes/Mascotas.png" alt="">
                <h3>Mascotas</h3>
            </button>
        </form>
        <form class="btnForm" method="post">
            <button type="submit" name="option" class="Opcion ControlVacunas" value="ControlVacunas">
                <img src="./imagenes/ControlVacunas.png" alt="">
                <h3>Control Vacunas</h3>
            </button>
        </form>
    </div>
  </main>
</body>
</html>