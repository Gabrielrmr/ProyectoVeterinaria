<?php 
require_once(__DIR__ ."/../controller/user_controller.php");
require_once(__DIR__ . './../model/user.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Iniciar'])){

    $user= new User;
    $Conect=$userc->connect();
    $username = mysqli_real_escape_string($Conect,$_POST['username']);
    $Password = mysqli_real_escape_string($Conect,$_POST['password']);
    $Checkvalidar= "SELECT * FROM User WHERE username = '$username' OR password = '$password' ";
    $Resulvalidar= mysqli_query($Conect,$Checkvalidar);

    if(mysqli_num_rows($Resulvalidar)== 0){
        header("location:crud.php");
    }else{
        echo"lo siento la contraseña o usuario es incorrecto";
    }

}

?>