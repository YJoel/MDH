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
    echo "0";
    die("Connection failed: " . $conn->connect_error);
} else {
    $sql = "SELECT * FROM administradores WHERE usuario = '$usuario' and contrasena = '$contrasena';";
    $result = $conn->query($sql);


    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo json_encode(
                array(
                    "formulario" => "<form action='../admin/' method='POST' id='formEnvio' style='display: none'>
                        <input type='text' value='" . $row["usuario"] . "' id='usuario' name='usuario'>
                    </form>",
                    "ejecutar" => "formEnvio.submit()",
                )
            );
        }
    } else {
        echo "";
    }
}
?>