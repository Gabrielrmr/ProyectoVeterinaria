<?php
    require_once(__DIR__ ."/../controller/vacunas_controller.php");
    $vacunac= new vacunas_controller();
    $Conect=$vacunac->connect();
    $sql = "SELECT id FROM controlvacuna c inner join vacuna v on c.Vacuna_id=v.id group by v.id ";
    $result = $mysqli->query($sql);
    $vacunas=[];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $vacunas[] = $row;
        }
    }
    echo "$vacunas";
?>
