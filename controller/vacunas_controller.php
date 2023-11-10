<?php
require_once(__DIR__ . './conexion.php');
require_once(__DIR__ . './../model/controlvacuna.php');
require_once(__DIR__ . './../model/vacuna.php');

class vacunas_controller extends conexion{
    public function mostrarVacunas(){
        $mysqli = $this->connect();
        $sql = "SELECT id FROM controlvacuna c inner join vacuna v on c.Vacuna_id=v.id group by v.id ";
        $result = $mysqli->query($sql);
        $vacunas=[];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $vacunas[] = $row;
            }
        }
        $mysqli->close();
        return $vacunas;
    }
}