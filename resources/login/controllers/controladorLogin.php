<?php
$usuario = $_POST["usuario"];
$contrasena = $_POST["contrasena"];

$servidor = "localhost";
$user = "root";
$password = "";
$bd = "mdh";

$conn = new mysqli($servidor, $user, $password, $bd);

/* DATOS DE CONEXION A BASE DE DATOS */
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM administradores WHERE usuario = '$usuario' and contrasena = '$contrasena';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo json_encode(
            array("response" => 1,
                "body" => array(
                    "usuario" => $row["usuario"],
                    "nombre" => $row["nombre"],
                    "apellido" => $row["apellido"],
                )));
    }
} else {
    echo "0";
}
?>