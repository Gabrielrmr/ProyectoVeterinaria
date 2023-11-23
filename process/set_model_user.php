<?php
require_once(__DIR__."/../controller\conexion.php");
require_once(__DIR__."/../controller\user_controller.php");
require_once(__DIR__ ."/../model/user.php");
    class SetModelUser extends conexion{
        // public function createModel (){
            // $mysqli = (new conexion) ->connect();
            // $modelUser = (new User);
            // $modelUser -> nombre = $mysqli->real_escape_string($_POST['nombreUser']);
            // $modelUser -> username = $mysqli->real_escape_string($_POST['userName']);
            // $modelUser -> email = $mysqli->real_escape_string($_POST['email']);
            // $modelUser -> password = ($_POST['password']);
            // $modelUser -> Role_id = 1;
            // // if(!empty($_POST['fotoUser'])){
            // $modelUser -> foto = "img/".$_POST['userName'].".png";
            // // }else($modelUser -> foto = null)
           
            // (new UserController) -> update($modelUser);
        // }
        public function updateModel ($id){
            // $mysqli = (new conexion) ->connect();
            // $modelUser = (new User);
            $lonPost = sizeof($_POST) - 1;
            $Values ="";
            $cont=0;
            for ($i=0; $i <= $lonPost; $i++) { 
               if(!empty($_POST[array_keys($_POST)[$i]]) && array_keys($_POST)[$i] != 'btnUpdate'){
                   $nombreColumna = array_keys($_POST)[$i];
                   if( $cont>0){$Values += ",";}
                   $cont++;
                   $Values += $nombreColumna. '=' .$_POST[array_keys($_POST)[$i]];
                   if($i == $lonPost){$Values += 'WHERE id ='.$id;}
               }
            }
            (new UserController) -> update($Values);
        }
        public function deleteModel (){
            $mysqli = (new conexion) ->connect();
            $modelUser = (new User);
            $modelUser -> id = ($_POST['userId']);
            (new UserController) -> delete($modelUser);
        }
    }

?>