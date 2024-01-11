<?php
  //enlace con conexion.php
  include_once('conexion.php');

  //registrar nuevo aparato
  function registrarAparato($serial, $placa, $descripcion1, $marca, $modelo, $descripcion2){
    global $conn;
    $insertar = "insert into aparato values(null,?,?,?,?,?,?)";
    $stmt = mysqli_prepare($conn, $insertar);
    mysqli_stmt_bind_param($stmt,'ssssss',$serial, $placa, $descripcion1, $marca, $modelo, $descripcion2);
    $registro = mysqli_stmt_execute($stmt);
    
    
    if ($registro) {
      header('Location: ../index.php');
      exit();
    } else {
      echo "error de registro";
    }

    mysqli_stmt_close($stmt);

  }

  function actualizar($Id,$Userial,$Uplaca,$Udescripcion1,$Umarca,$Umodelo,$Udescripcion2){
    global $conn;
    $actulizar = "update aparato set NSerial='$Userial',placa='$Uplaca',descripElemento='$Udescripcion1',marca='$Umarca',modelo='$Umodelo',descripAdicional='$Udescripcion2' where idActivo='$Id'";
    $stmt = mysqli_prepare($conn, $actualizar);
    mysqli_stmt_bind_param($stmt,$Id,$Userial,$Uplaca,$Udescripcion1,$Umarca,$Umodelo,$Udescripcion2);
    $resultado=mysqli_stmt_execute($stmt);

    if ($resultado) {
      header('Location: ../index.php');
      exit();
    } else {
      echo "error de actualizacion";
    }

    mysqli_stmt_close($stmt);
  }

  //consulta especifica 
  function FunctionName($Id) {
    $consulta = "select * from aparato where idActivo='$Id'";
    $resultado=mysqli_query($conn, $consulta);
    
    if (mysqli_num_rows($resultado)>0) {
      $fila = mysqli_fetch_assoc($resultado);
      return $fila;
    } else {
      return false;
    }
    
  }
  
  

  
  

?>
