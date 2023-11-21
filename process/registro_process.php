<?php
    require_once(__DIR__ ."/../controller/user_controller.php");
class processRegistro extends conexion{
    public function validacionRegistro(){
        if(isset($_POST['Registrarse'])){
            if (empty($_POST['nombre']) or empty($_POST['username']) or empty($_POST['email']) or empty($_POST['password']) ){
                echo "los campos son todos obligatorios";
            }else{
                $userc= new UserController();
                $user= new User;
                $Conect=$userc->connect();
                $username = mysqli_real_escape_string($Conect,$_POST['username']);
                $email = mysqli_real_escape_string($Conect,$_POST['email']);
                $checkRegister="SELECT * FROM user WHERE username = '$username' OR email = '$email'";
                $checkResultado=mysqli_query($Conect,$checkRegister);
                if($checkResultado->num_rows > 0){
                    echo "El usuario ya existe";
                }else{
                    $status=$userc->create($user);
                    if($status){
                        echo "El usuario ha sido creado";
                        header("Location:index.php");
                    }
                    else{
                        echo "Ha ocurrido un error al crear el usuario";
                    }
        
                }
                $Conect->close();    
            }
        }
    }
}

?>