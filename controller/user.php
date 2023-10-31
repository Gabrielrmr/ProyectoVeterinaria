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
}


