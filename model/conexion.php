<?php

$server = "localhost";
$user = "root";  // usuario de la base de datos
$pass = "";   // contraseña del usuario anterior
$db = "itop";


// creamos una conexión a la BD
$conn = mysqli_connect($server,$user,$pass,$db);

if ($conn->connect_errno) {
    die("Conexión fallida: " . $conn->connect_errno);
}

?>