<h1>Bienvenidos a mi webbbbb </h1>

<?php

require_once 'controllers/usuariocontroller.php';

$controlador = new UsuarioController();

$controlador->mostrarTodos();

$controlador->crear();