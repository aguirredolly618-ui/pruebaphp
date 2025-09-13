<?PHP

class usuario{
    public $db;

    public function __construct() {
        $this->db =  database::conectar();
}

public $id_usuario;
public $nombre;
public $pesos;
public $gmail;
public $password;
public $rol;
public $imagen;

function getId_usuario(){
    return $this->id_usuario;

}

function getNombre(){
    return $this->nombre;

}

function getApellido(){
    return $this->apellido;


}

function getemail(){
    return $this->email;

}

function getPassword(){
    return $this->password;

}

function getRol(){
    return $this->rol;

}
function getImagen(){
    return $this->imagen;

}
function setId_usuario($id_usuario){
    return $this->id_usuario=$id_usuario;

}

function setNombre($nombre){
    return $this->nombre=$nombre;
}
    function setApellido($apellido){
            return $this->apellido=$apellido;
    }
    function setemail($email){      
        return $this->email=$email;
    }
    function setPassword($password){
        return $this->password=$password;
    }   
    function setRol($rol){
        return $this->rol=$rol;
    }

function setImagen($imagen){
    return $this->imagen=$imagen;
}








}