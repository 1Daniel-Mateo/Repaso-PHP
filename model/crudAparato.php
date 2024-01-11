<?php
  //enlace con conexion.php
  include_once('conexion.php');

  //registrar nuevo aparato
  function registrarAparato($serial, $placa, $descripcion1, $marca, $modelo, $descripcion2){
    global $conn;
    $insertar = "insert into aparato values(null,?,?,?,?,?,?)";
    $stmt = mysqli_query($conn,$insertar);
    mysqli_stmt_bind_param($stmt,sssss, $serial, $placa, $descripcion1, $marca, $modelo, $descripcion2);
    $registro = mysqli_stmt_execute($stmt)

    
    if ($registro) {
      echo "Registro exitoso";
    } else {
      echo "error de registro";
    }
    
  }



  //consulta especifica 
  $consulta = "select * from aparato where idActivo";
  $resultado=mysqli_query($conn, $consulta);

  if (mysqli_num_rows($resultado) > 0) {
    while ($fila = mysqli_fetch_assoc($resultado)) {
      echo "<tr>". $fila["idActivo"]."</tr>";
      echo "<tr>". $fila["NSerial"]."</tr>";
      echo "<tr>". $fila["placa"]."</tr>";
      echo "<tr>". $fila["descripElemento"]."</tr>";
      echo "<tr>". $fila["marca"]."</tr>";
      echo "<tr>". $fila["modelo"]."</tr>";
      echo "<tr>". $fila["descripAdicional"]."</tr>";
    }
  } else {
     echo "error los datos que buscas no existen"
  }
  

?>
