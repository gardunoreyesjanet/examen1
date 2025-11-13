<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Consultar Alumno</title>
<link rel="stylesheet" href="cecy.css">
</head>
<body>
<fieldset>
  <legend>Consultar Alumno</legend>
  
  <form method="get" action="">
    <label>Seleccionar Alumno:</label>
    <select name="id_alumno" onchange="this.form.submit()" required>
      <option value="">-- Selecciona un alumno --</option>
      <?php
      include("conexionbd.php");
      $sql = "SELECT id_alumno, nombre_alumno FROM alumno ORDER BY nombre_alumno";
      $resultado = mysqli_query($conexion, $sql);
      while ($fila = mysqli_fetch_assoc($resultado)) {
        $selected = (isset($_GET['id_alumno']) && $_GET['id_alumno'] == $fila['id_alumno']) ? 'selected' : '';
        echo "<option value='{$fila['id_alumno']}' $selected>{$fila['id_alumno']} - {$fila['nombre_alumno']}</option>";
      }
      ?>
    </select>
  </form>
  
  <br>
  
  <?php
  if (isset($_GET['id_alumno'])) {
    $id_alumno = $_GET['id_alumno'];
    $sql = "SELECT * FROM alumno WHERE id_alumno = '$id_alumno'";
    $resultado = mysqli_query($conexion, $sql);
    
    if (mysqli_num_rows($resultado) > 0) {
      $alumno = mysqli_fetch_assoc($resultado);
  ?>
  
  <form>
    <label>ID Alumno:</label>
    <input type="number" name="id_alumno" value="<?php echo $alumno['id_alumno']; ?>" readonly>
    
    <label>Nombre:</label>
    <input type="text" name="nombre_alumno" value="<?php echo $alumno['nombre_alumno']; ?>" readonly>
    
    <label>Apellido:</label>
    <input type="text" name="apellido_alumno" value="<?php echo $alumno['apellido_alumno']; ?>" readonly>
    
    <label>Fecha de Nacimiento:</label>
    <input type="date" name="fecha_nac" value="<?php echo $alumno['fecha_nac']; ?>" readonly>
    
    <label>Dirección:</label>
    <input type="text" name="direccion" value="<?php echo $alumno['direccion']; ?>" readonly>
    
    <label>Teléfono:</label>
    <input type="tel" name="telefono" value="<?php echo $alumno['telefono']; ?>" readonly>
    
    <label>Email:</label>
    <input type="text" name="email" value="<?php echo $alumno['email']; ?>" readonly>
    
    <a href="consulta.php">🔄 Nueva Selección</a>
    <a href="index.html">🏠 Regresar</a>
  </form>
  
  <?php
    }
    mysqli_close($conexion);
  }
  ?>
  
</fieldset>
</body>
</html>