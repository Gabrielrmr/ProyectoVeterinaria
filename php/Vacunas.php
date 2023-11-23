<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/Vacunas.css">
    <?php
    require_once __DIR__ . "/../vendor/autoload.php";
    require_once __DIR__ ."/../controller/conexion.php";
    use Dotenv\Dotenv;
    $dotenv = Dotenv::createImmutable(__DIR__);
    $dotenv->load();
    ?>
</head>
<body>
    <?php 
        require_once (__DIR__ ."../controller/vacuna_controller.php");
        $result= (new VacunaController)->read();
    ?>
    <div class="AgregarVacuna">
        <button>Agregar Vacuna</button>
        <form method="post" name="AgregarVacunas">
            <label for="">Ingrese el nombre de la Vacuna:</label>
            <input type="text">
        </form>
    </div>
    <table class="Table_Vacunas">
        <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Vacunas Administrados</th>
        </tr>
        <?php 
        foreach( $result as $row) {
        ?>
        <tr>
            <th><input type="text"></th>
            <th><input type="text"></th>
            <th><input type="text"></th>
        </tr>
        <?php 
        }
        ?>
    </table>
</body>
</html>