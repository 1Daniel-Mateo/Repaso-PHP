<?php 
    include('../model/crudAparato.php');
    include('../index.php');

    //controlador de registro
    $serial = $_POST['serial'];
    $placa = $_POST['placa'];
    $descripcion1 = $_POST['descripcion1'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $descripcion2 = $_POST['descripcion2'];

    $registro = registrarAparato($serial, $placa, $descripcion1, $marca, $modelo, $descripcion2);
  
    //controlador de actualizacion
    
    
?>