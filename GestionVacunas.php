<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Vacunas</h2>
<div class="CrudVacunas">
    <?php 
    require_once(__DIR__ ."/process/MostrarVacunas.php")
    ?>
    <div class="Filas">
        <h2>Nombre</h2>
        <h2>Vacunas Aplicadas</h2>
        <h2>Especie</h2>
    </div>
</div>
<div class="AgregarVacuna">
    <h2>Agregar Vacuna</h2>
    <form method="post">
        <input type="text" name="nombre" required><br>
        <input type="text" name="especie" required><br>
        <button type="submit">Agregar Vacuna</button>
    </form>
</div>
</body>
</html>

</body>
</html>