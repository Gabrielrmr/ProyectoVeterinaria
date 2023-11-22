<?php 
require_once(__DIR__ ."/../controller/user_controller.php");
require_once(__DIR__ . './../model/user.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Iniciar'])){
    $user= new User();
    $connection = new Conexion();
    $mysql = $connection->connect();

    $username = mysqli_real_escape_string($mysql,$_POST['UsernameInicio']);
    $password = mysqli_real_escape_string($mysql,$_POST['PasswordInicio']);
    $Resulvalidar = $mysql->query("SELECT password FROM User Where username='$username'");


    if($Resulvalidar->num_rows > 0){
        $user = $Resulvalidar->fetch_object();
        $passwordA = $user->password;

        if (password_verify($password, $passwordA)) {
            echo "Contraseña Correcta";
            header("Location: PaginaCruds.php");
        } else {
            echo "Contraseña Incorrecta";
        }
    }

}

?>