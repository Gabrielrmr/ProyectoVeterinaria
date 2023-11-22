<?php

class controlador
{
    public function abrir(){
        if (isset($_POST['option'])) {
            session_start();
            $_SESSION['select'] = true;
        }
    }
}