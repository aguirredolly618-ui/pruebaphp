<?php

//Aca mostramos todas acciones que puede hacer un controlador//
class UsuarioControlLer{

    public function mostrarTodos(){
    require_once 'models/Usuariomodels.php';

    $usuario = new usuario();

    $todos_los_usuarios = $usuario ->conseguirTodos();

    require_once 'views/usuario/mostrar-todosphp';
}
}  