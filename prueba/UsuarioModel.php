<?php
class UsuarioModel {
    private $conn;

    public function __construct($servername, $username, $password, $database) {
        // Crear una conexión
        $this->conn = new mysqli($servername, $username, $password, $database);

        // Verificar la conexión
        if ($this->conn->connect_error) {
            die("Error de conexión: " . $this->conn->connect_error);
        }
    }

    public function obtenerUsuarios() {
        // Consulta a la base de datos
        $sql = "SELECT * FROM usuarios";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return array();
        }
    }

    public function cerrarConexion() {
        // Cerrar la conexión
        $this->conn->close();
    }
}
?>
