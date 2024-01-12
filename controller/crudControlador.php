<?php
include('../model/conexion.php');
include('../model/crudAparato.php');

//controlador de registro
$serial = $_POST['serial'];
$placa = $_POST['placa'];
$descripcion1 = $_POST['descripcion1'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$descripcion2 = $_POST['descripcion2'];

if (isset($_POST)) {   
    if(empty($serial) || empty($placa) || empty($descripcion1) || empty($marca) || empty($modelo) || empty($descripcion2)){
        header('Location: ../index.php?m=1&m=0');
        echo "campos vacios";
    }else {
        $registro = registrarAparato($serial, $placa, $descripcion1, $marca, $modelo, $descripcion2);
        if ($registro) {
            header('Location: ../index.php?m=1');
            echo "Registrado";
        } else {
            header('Location: index.php?m=0');
        }
    }
}


//Controlador de actualizacion


$idU = $_POST['idActivo'];
$Userial = $_POST['Userial'];
$Uplaca = $_POST['Uplaca'];
$Udescripcion1 = $_POST['Udescripcion1'];
$Umarca = $_POST['Umarca'];
$Umodelo = $_POST['Umodelo'];
$Udescripcion2 = $_POST['Udescripcion2'];

error_log("ID del activo: " . $idU);

if (isset($_POST)) {
        $actualizar = actualizar($idU,$Userial,$Uplaca,$Udescripcion1,$Umarca,$Umodelo,$Udescripcion2);
        if ($actualizar) {
            header('Location: ../index.php?m=1');
            echo "Actualizado";
        }else{
            header('Location: ../views/actualizar.php?m=0');
        }
}



// if ($resultado) {
//     header('Location: ../index.php');
//     exit();
//   } else {
//     echo "error de actualizacion";
// }




include('../views/actualizar.php');
include('../index.php');
?>