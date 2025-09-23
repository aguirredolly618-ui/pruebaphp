<?php

//Aca mostramos todas las acciones que puede hacer un controlador

class UsuarioController {

    public function mostrartodos(){

require_once 'models/usuariomodels.php';

$usuario = new usuario();

$todos_los_usuarios = $usuario->conseguirTodos();

require_once 'views/usuario/mostrar-todos.php';


}

    public function crear(){

        require_once 'views/usuario/crear.php';

        require_once 'models/usuariomodels.php';
    }
}