<?php
    require('DBController.php');

     class User extends DBController{
        
        private $nombre;
        private $username;
        
        public function userExists($email,$pass){
            //$md5pass=md5($pass); SEGURIDAD
            
            $query=$this->connect()->prepare('SELECT * FROM user WHERE email = :user AND password = :pass');
            $query->execute(['user'=>$email,'pass'=>$pass]);

            if($query->rowCount()){
                return true;
            }else{
                return false;    
            }
        }
        
        public function setUser($email){
            $query=$this->connect()->prepare('SELECT*FROM user WHERE email =:user');
            $query->execute(['user'=> $email]);
            foreach($query as $currentUser){
                $this->nombre=$currectUser['first_name'];
                $this->username=$currectUser['email'];
            }
        }
        public function getNombre(){
            return $this->nombre;
        }
        
     }
     
     
     
     
     

?>