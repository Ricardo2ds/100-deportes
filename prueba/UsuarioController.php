<?php
include 'UsuarioModel.php';

class UsuarioController {
    private $modeloUsuario;

    public function __construct() {
        $servername = "localhost";
        $username = "root";
        $password = "123456";
        $database = "sys";

        $this->modeloUsuario = new UsuarioModel($servername, $username, $password, $database);
    }

    public function mostrarUsuarios() {
        $usuarios = $this->modeloUsuario->obtenerUsuarios();
        $this->modeloUsuario->cerrarConexion();
        return $usuarios;
    }
}
?>
