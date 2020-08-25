<?php

class UserSession{

    public function __construct(){
        session_start();
    }

    public function setCurrentUser($user){
        $_SESSION['user']=$user;
    }
    public function getCurrentUser(){
        return $_SESSION['user'];
    }

    public function closeSession(){
        session_unset(); //Borra los valores de las sesion
        session_destroy();//Destruye la sesion

    }
}



?>