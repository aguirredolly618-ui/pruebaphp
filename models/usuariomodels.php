<?php

require_once 'config/database.php';

class usuario {

    public $db;  

    public function __construct() {
        $this->db = database::conectar();
    }

    public $id_usuario;
    public $nombre;   
    public $apellido;
    public $email;
    public $password;  
    public $rol;
    public $imagen;

    function getid_usuario(){
        return $this->id_usuario;
    }

    function getnombre(){
        return $this->nombre;
    }

    function getapellido(){
        return $this->apellido;
    }

    function getemail(){
        return $this->email;
    }
    function getpassword(){
        return $this->password;
    }

    function getrol(){
        return $this->rol;
    }

    function getimagen(){
        return $this->imagen;
    }

function setid_usuario($id_usuario){
    $this->id_usuario = $id_usuario;
}

function setnombre($nombre){
    $this->nombre = $nombre;

}

function setapellido($apellido){
    $this->apellido = $apellido;

}

function setemail($email){
    $this->email = $email;

}

function setpassword($password){
    $this->password = $password;

}

function setrol($rol){
    $this->rol = $rol;

}

function setimagen($imagen){
    $this->imagen = $imagen;

}

   public function conseguirTodos(){

    echo "IMPRIMENDO TODOS LOS USUARIOS ACTIVOS Activos";
   }

   public function crear (){

    
   }
}