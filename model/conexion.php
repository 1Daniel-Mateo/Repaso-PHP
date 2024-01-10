<?php

$server = "localhost";
$db = "itops";
$user = "root";  // usuario de la base de datos
$pass = "";   // contraseña del usuario anterior

// creamos una conexión a la BD
$conn = mysqli_connect($server,$db,$user,$pass);

if (!$conn) {
    echo("coneccion fallida" , mysqli_connect_error());

}else{
    echo ("Conexion exitosa");
    mysqli_close($conn)
}

?>