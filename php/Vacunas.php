<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/Vacunas.css">
    <?php

    ?>
</head>
<body>
    <?php 
        require_once(__DIR__ ."/../controller/conexion.php");
        require_once(__DIR__ ."/../controller/vacuna_controller.php");
        $result= (new VacunaController)->read();
    ?>
    <div class="container_principal_vacunas">
        <h1>Vacunas</h1>
        <div class="AgregarVacuna">
            <button>Agregar Vacuna</button>
            <form class="agregar_vacunas_form" method="post" name="AgregarVacunas">
                <label for="">Ingrese el nombre de la Vacuna:</label>
                <input name="AgregarVacuna" type="text">
            </form>
        </div>
        <div class="table__content">
            <div class="table__vacunas">
                <div class="table__header">
                    <div class="table__column fila">fila</div>
                    <div class="table__column nombre">Nombre</div>
                    <div class="table__column vacunas_administradas">Vacunas Administrados</div>
                </div>
            </div>
            <?php foreach( $result as $row) {?>
                <form class="table__row" method="POST">
                    <div class="table__column">
                        <p class="table__text" id="textContent"></p><?php echo$row['id']; ?></p>
                    </div>         
                    
                    <div class="table__column">
                        <p class="table__text" id="textContent"><?php echo$row['nombre'];?></p>
                        <input id="input_modificador" class="input_modificador" type="text" name="nombre" value="<?php ?>">
                    </div>
                    
                    <div class="table__column">
                        <p class="table__text" id="textContent"><?php echo ((new VacunaController) -> vacinasAdministradas($row['id'])['cantidad']);?></p>
                    </div>
                    <div class="table__column table__button">
                        <div class="table__button-content">
                            <input class="input__Update" id="inputNombreSubmit" type="submit" name="activarSubmit" value="Actualizar">
                            <input id="inputNombre" type="hidden" name="id" value="<?php echo$row['id'];?>">
                        </div>
                        <div class="table__button-content">
                            <input class="input__Delete" id="inputNombreSubmit" type="submit" name="activarSubmit" value="Eliminar">
                            <input id="inputNombre" type="hidden" name="id" value="<?php echo$row['id'];?>">
                        </div>
                    </div>

                </form>
            <?php }?>
        </div>
    </div>
    </div>
    <script src="./js/main.js"></script>
</body>
</html>