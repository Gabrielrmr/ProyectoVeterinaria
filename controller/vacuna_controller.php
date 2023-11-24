<?php
require_once(__DIR__ ."./conexion.php");
require_once(__DIR__ ."/../model/vacuna.php");

class VacunaController extends conexion
{

    public function create (vacuna $vacuna) {
    
        $connection = $this->connect();
        $sql = "INSERT INTO vacuna (nonbre) VALUES ('{$vacuna->nombre}')";
        $result = $connection->query($sql);
        // return $result;
    }
    public function update(vacuna $vacuna) {
        $connection = $this->connect();
        $sql = "UPDATE vacuna SET username = '{$vacuna->nombre} WHERE id = '{$vacuna->id}';";

        $resultado = $connection->query($sql);

        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }
    
    public function delete (vacuna $vacuna) {
        $connection = $this->connect();
        $sql = "DELETE FROM vacuna Where id='{$vacuna->id}'";
        $result = $connection->query($sql);
        return $result;
    }
    public function read() {
        $connection = $this->connect();
        $vacunas = [];
    
        $sql = "SELECT * FROM vacuna";
        $result = $connection->query($sql);
    
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $vacuna = new vacuna();
                $vacuna->id = $row["id"];
                $vacuna->nombre = $row["nombre"];
                $vacunas[] = $vacuna;
            }
        }
    
        return $result;
    }
    public function vacinasAdministradas($id) {
        $connection = $this->connect();
        $sql = "select  v.id, count(c.Vacuna_id) as cantidad from vacuna as v left join ControlVacuna as c on v.id = c.Vacuna_id WHERE id = '$id' group by v.id ; ";
        $result = $connection->query($sql);
        foreach ($result as $num) {$resul = $num;};
        return $resul;
    }
}


