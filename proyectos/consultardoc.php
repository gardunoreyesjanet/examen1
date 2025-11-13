<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Consultar Docente</title>
<link rel="stylesheet" href="cecy.css">
</head>
<body>
<fieldset>
  <legend>Consultar Docente</legend>
  
  <form method="get" action="">
    <label>Seleccionar docente:</label>
    <select name="clave_docente" onchange="this.form.submit()" required>
      <option value="">-- Selecciona el docente --</option>
      <?php
      include("conexionbd.php");
      $sql = "SELECT clave_docente,nombre_docente FROM docentes ORDER BY nombre_docente";
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
  
  <form>
    <label>Clave Docente:</label>
    <input type="number" name="clave_docente" value="<?php echo $alumno['clave_docente']; ?>" readonly>
    
    <label>Nombre Docente:</label>
    <input type="text" name="nombre_docente" value="<?php echo $alumno['nombre_docente']; ?>" readonly>
    
    <label>Apellido Docente</label>
    <input type="text" name="apellido_docente" value="<?php echo $alumno['apellido_docente']; ?>" readonly>
    
    <label> Especialidad</label>
    <input type="text" name="especialidad" value="<?php echo $alumno['especialidad']; ?>" readonly>
    
    <label>Email</label>
    <input type="text" name="email" value="<?php echo $alumno['email']; ?>" readonly>
    
    <label>Fecha de contratacion</label>
    <input type="date" name="fecha_contratacion" value="<?php echo $alumno['fecha_contratacion']; ?>" readonly>
    
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