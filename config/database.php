<?PHP

class database{
    public static function conectar(){
        $conexion = new mysqli("localhost","root","","armas");
        $conexion -> query("SET NAMES 'utf-8");
       return $conexion;
}
}