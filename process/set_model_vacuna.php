<?php
require_once(__DIR__."/../controller\conexion.php");
require_once(__DIR__."/../controller\vacuna_controller.php");
require_once(__DIR__ ."/../model/vacuna.php");
    class SetModelVacuna extends conexion{
        public function createModel (){
            // Obtener conexio Forma 2
                // $mysqli = (new conexion) ;
                // $mysqli = $mysqli ->connect();
            // Obtener conexio Forma 3
                // $mysqli = $this -> connect();
            // Obtener conexio Forma 1
            $mysqli = (new conexion) ->connect();
            $modelVacuna = (new Vacuna);
            $modelVacuna -> nombre = $mysqli->real_escape_string($_POST['AgregarVacuna']);
            (new VacunaController) -> create($modelVacuna);
        }
        public function updateModel (){
            $mysqli = (new conexion) ->connect();
            $modelVacuna = (new Vacuna);
            $modelVacuna -> nombre = $mysqli->real_escape_string($_POST['nombreVacuna']);
            (new VacunaController) -> update($modelVacuna);
        }
        public function deleteModel ($id){
            $mysqli = (new conexion) ->connect();
            $modelVacuna = (new Vacuna);
            $modelVacuna -> id = $id;
            (new VacunaController) -> delete($modelVacuna);
        }
    }
?>