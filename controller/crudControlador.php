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
    if(empty($serial) || empty($placa) || empty($descripcion1) || empty($marca) || empty($modelo)){
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
if (isset($_GET['idActivo'])) {
//Variables que van a ser tomadas para el parametro
$idU = $_GET['idActivo'];
$Userial = $_POST['Userial'];
$Uplaca = $_POST['Uplaca'];
$Udescripcion1 = $_POST['Udescripcion1'];
$Umarca = $_POST['Umarca'];
$Umodelo = $_POST['Umodelo'];
$Udescripcion2 = $_POST['Udescripcion2'];

//comprobador en consola para evaluar si detecta al id
error_log("ID del activo: " . $idU);

//condicion para evaluar si se actualizan o no los datos
if (isset($_POST)) {
    //variable para la conexion con la funcion del modelo
        $actualizar = actualizar($idU,$Userial,$Uplaca,$Udescripcion1,$Umarca,$Umodelo,$Udescripcion2);
        //condicion de evualacion si actualizo los datos o no
        if ($actualizar) {
            header('Location: ../index.php?m=1');
            echo "Actualizado";
        }else{
            header('Location: ../views/actualizar.php?m=0');
        }
}
}

//controlador eliminar
if (isset($_GET['idActivo'])) {
    $idEliminar = $_GET['idActivo'];

    // Llama a la función eliminar y obtiene el resultado
    $resultadoEliminar = eliminar($idEliminar);

    // Redirige a la página principal con un mensaje según el resultado
    if ($resultadoEliminar === true) {
        header('Location: ../index.php?m=1');
    } else {
        header('Location: ../index.php?=0');    
    }
} else {
    // Si no se proporciona un ID, redirige a la página principal
    header('Location: ../index.php');
   
}



include('../views/actualizar.php');
include('../index.php');
?>