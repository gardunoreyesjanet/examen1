<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Modificar Docente</title>
<link rel="stylesheet" href="cecy.css">
</head>
<body>
<fieldset>
  <legend>Modificar Docente</legend>
  
  <form method="get" action="">
    <label>Seleccionar Docente:</label>
    <select name="clave_docente" onchange="this.form.submit()" required clave_docente="clave_docente">
      <option value="">-- Selecciona un docente --</option>
      <?php
      include("conexion.php");
      $sql = "SELECT clave_docente, nombre_docente FROM docentes ORDER BY nombre_docente";
      $resultado = mysqli_query($conexion, $sql);
      while ($fila = mysqli_fetch_assoc($resultado)) {
        $selected = (isset($_GET['clave_docente']) && $_GET['clave_docente'] == $fila['clave_docente']) ? 'selected' : '';
        echo "<option value='{$fila['clave_docente']}' $selected>{$fila['clave_docente']} - {$fila['nombre_docente']}</option>";
      }
      ?>
    </select>
  </form>
  
  <br>
  
  <?php
  if (isset($_GET['clave_docente'])) {
    $clave_docente = $_GET['clave_docente'];
    $sql = "SELECT * FROM docentes WHERE clave_docente = '$clave_docente'";
    $resultado = mysqli_query($conexion, $sql);
    
    if (mysqli_num_rows($resultado) > 0) {
      $alumno = mysqli_fetch_assoc($resultado);
  ?>
  
  <form method="post" action="crud_modificardoc.php">
    <input type="hidden" name="clave_docente" value="<?php echo $alumno['clave_docente']; ?>">
    
<label>Clave_Docente</label>
    <input type="number" name="clave_docente" value="<?php echo $alumno['clave_docente']; ?>" required>
    <label>Nombre docente</label>
    <input type="text" name="nombre_docente" value="<?php echo $alumno['nombre_docente']; ?>" required>
    
    <label>Apellido Docente</label>
    <input type="text" name="apellido_docente" value="<?php echo $alumno['apellido_docente']; ?>" required>
    <label>Especialidad</label>
    <input type="text" name="especialidad" value="<?php echo $alumno['especialidad']; ?>" required>
    <label>Email</label>
    <input type="text" name="email" value="<?php echo $alumno['email']; ?>" required>
    <label>Fecha de contratacion</label>
    <input type="date" name="fecha_contratacion" value="<?php echo $alumno['fecha_contratacion']; ?>" required>
   
    <input type="submit" name="actualizar" value="Actualizar">
    <a href="modificardoc.php">🔄 Nueva Selección</a>
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