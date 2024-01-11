<?php 
    include('../model/crudAparato.php');

    //controlador de registro
    $serial = $_POST['NSerial'];
    $placa = $_POST['placa'];
    $descripcion1 = $_POST['descripElemento'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $descripcion2 = $_POST['descripAdicional'];

    $registrado = registrarAparato($serial, $placa, $descripcion1, $marca, $modelo, $descripcion2);
    
?>