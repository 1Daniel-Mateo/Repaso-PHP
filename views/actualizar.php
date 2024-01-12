<?php
require_once('../model/conexion.php');
require_once('../model/crudAparato.php');

$id = $_GET['idActivo'];
$activo = consulta($id);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Una pagina de pruebas php">
  <meta name="keywords" content="PHP, ejemplo con php, repaso">
  <meta name="author" content="Daniel Alvarez">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>PDF PERSONALIZADO</title>
</head>

<body>
  <header>
    <h1>EJEMPLO DE GENERACION DE REPORTE</h1><br>
    <header>

      <div class="card">
        <div class="card-body">


          <form action="../controller/crudControlador.php" method="POST">

            <div class="mb-3">
              <label for="Userial" class="form-label">Numero serial</label>
              <input type="text" class="form-control" id="Userial" name="Userial"
                value="<?php echo $activo['NSerial']; ?>">
            </div>

            <div class="mb-3">
              <label for="Uplaca" class="form-label">Placa</label>
              <input type="text" class="form-control" id="Uplaca" name="Uplaca" value="<?php echo $activo['placa']; ?>">
            </div>

            <div class="mb-3">
              <label for="Udescripcion1" class="form-label">Descripcion de elemento</label>
              <input type="text" class="form-control" id="Udescripcion1" name="Udescripcion1" value="<?php echo $activo['descripElemento']; ?>">
            </div>

            <div class="mb-3">
              <label for="Umarca" class="form-label">Marca</label>
              <input type="text" class="form-control" id="Umarca" name="Umarca" value="<?php echo $activo['marca']; ?>">
            </div>

            <div class="mb-3">
              <label for="Umodelo" class="form-label">Modelo</label>
              <input type="text" class="form-control" id="Umodelo" name="Umodelo" value="<?php echo $activo['modelo']; ?>">
            </div>

            <div class="mb-3">
              <label for="Udescripcion2" class="form-label">Descripcion Adicional</label>
              <input type="text" class="form-control" id="Udescripcion2" name="Udescripcion2" value="<?php echo $activo['descripAdicional']; ?>">
            </div>

            <button type="submit" class="btn btn-primary">Modificar</button>
          </form>



        </div>
      </div>

</body>

</html>