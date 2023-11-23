<?php
require_once(__DIR__ ."./conexion.php");
require_once(__DIR__ ."/../model/User.php");

class UserController extends conexion
{

    public function create (User $user) {
        $connection = $this->connect();
        $sql = "INSERT INTO User (username, email, password, Role_id) 
        VALUES ('{$user->username}', '{$user->email}', '{$user->password}', '{$user->Role_id}')";
        
        $result = $connection->query($sql);

        return $result;
    }
    public function update($value) {
        $connection = $this->connect();
        $sql = "UPDATE User SET $value';";

        $resultado = $connection->query($sql);

        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }
    
    public function delete (User $user) {
        $connection = $this->connect();
        $sql = "DELETE FROM User Where id='{$user->id}'";
        $result = $connection->query($sql);
        return $result;
    }
    public function read() {
        $connection = $this->connect();
        $users = [];
    
        $sql = "SELECT * FROM User";
        $result = $connection->query($sql);
    
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $user = new User();
                $user->id = $row["id"];
                $user->username = $row["username"];
                $user->email = $row["email"];
                $user->password = $row["password"];
                $user->Role_id = $row["Role_id"];
                $users[] = $user;
            }
        }
    
        return $users;
    }
}


