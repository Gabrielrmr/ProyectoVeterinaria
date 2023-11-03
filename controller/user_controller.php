<?php
require_once(__DIR__ . './conexion.php');
require_once(__DIR__ . './../model/user.php');

class user_controller extends conexion
{

    public function create(User $user)
    {
        $mysqli = $this->connect();
        
        $Password= $_POST['password'];
        $Encrypt=password_hash($Password,PASSWORD_BCRYPT);
        $user->password=$Encrypt;
        $user->username=$_POST['username'];
        $user->email=$_POST['email'];
        $user->nombre=$_POST['nombre'];
        $user->Role_id = '1';
        $sql = "INSERT INTO User (nombre , username , email, password , Role_id) VALUES ('{$user->nombre}','{$user->username}','{$user->email}','{$user->password}','{$user->Role_id}')";
        $consulta= $mysqli->query($sql);
        return $consulta;
    }
}


