<?php
require_once(__DIR__ . './conexion.php');
require_once(__DIR__ . './../model/user.php');

class GenderController extends conexion
{

    public function create(user $user)
    {
        $mysqli = $this->connect();
        $nombre= $mysqli->real_escape_string($user->nombre);
        $username = $mysqli->real_escape_string($user->username);
        $email = $mysqli->real_escape_string($user->email);
        $password = $mysqli->real_escape_string($user->password);
        $Role_id = $mysqli->real_escape_string($user->Role_id);
        $sql = "INSERT INTO user (nombre,username,email,'password',Role_id) VALUES ('$nombre','$username','$email','$password','$Role_id')";
        $mysqli->close();
    }

    public function read()
    {
        $mysqli = $this->connect();
        $sql = "SELECT id, name FROM user";
        $result = $mysqli->query($sql);
        $users = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $users[] = $row;
            }
        }
        $mysqli->close();
        return $users;
    }

    public function update($id, $newName)
    {
        $mysqli = $this->connect();
        $newName = $mysqli->real_escape_string($newName);
        $sql = "UPDATE gender SET name = '$newName' WHERE id = $id";
        if ($mysqli->query($sql)) {
            echo "Registro actualizado con éxito.";
        } else {
            echo "Error al actualizar el registro: " . $mysqli->error;
        }
        $mysqli->close();
    }

    public function delete($id)
    {
        $mysqli = $this->connect();
        $sql = "DELETE FROM gender WHERE id = $id";
        if ($mysqli->query($sql)) {
            echo "Registro eliminado con éxito.";
        } else {
            echo "Error al eliminar el registro: " . $mysqli->error;
        }
        $mysqli->close();
    }
}


