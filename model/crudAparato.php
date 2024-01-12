<?php
//enlace con conexion.php
include_once('conexion.php');

//registrar nuevo aparato
function registrarAparato($serial, $placa, $descripcion1, $marca, $modelo, $descripcion2)
{

  global $conn;
  $insertar = "insert into aparato values(null,?,?,?,?,?,?)";
  $stmt = mysqli_prepare($conn, $insertar);
  mysqli_stmt_bind_param($stmt, 'ssssss', $serial, $placa, $descripcion1, $marca, $modelo, $descripcion2);
  $registro = mysqli_stmt_execute($stmt);

  if ($registro) {
    return "El aparato ha sido registrado exitosamente.";

  } else {
    return "Ha ocurrido un error al registrar el aparato.";
  }

}



//modelo de actualizar
function actualizar($Id, $Userial, $Uplaca, $Udescripcion1, $Umarca, $Umodelo, $Udescripcion2)
{
  global $conn;
  $actualizar = "UPDATE aparato SET NSerial=?,placa=?,descripElemento=?,marca=?,modelo=?,descripAdicional=? WHERE idActivo=?";
  $stmt = mysqli_prepare($conn, $actualizar);
  mysqli_stmt_bind_param($stmt, 'ssssssi', $Userial, $Uplaca, $Udescripcion1, $Umarca, $Umodelo, $Udescripcion2, $Id);
  $modificacion = mysqli_stmt_execute($stmt);

  if ($modificacion) {
    return "Los datos fueron modificados";
  } else {
    return "ha ocurrido un error al modificar los datos";
  }

}

//consulta especifica 
function consulta($id)
{
  global $conn;
  $consulta = "select * from aparato where idActivo = '$id'";
  $resultado = mysqli_query($conn, $consulta);

  if (mysqli_num_rows($resultado) > 0) {
    $fila = mysqli_fetch_assoc($resultado);
    return $fila;
  } else {
    return false;
  }

}






?>