<?php include("conexion.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Eliminar Docente</title>
<link rel="stylesheet" href="cecy.css">
</head>
<body>
<fieldset>
  <legend>Eliminar Docente</legend>
  
  <form method="post" action="crud_eliminardoc.php">
    <label>Seleccionar Docente a Eliminar:</label>
    <select name="clave_docente" required>
      <option value="">-- Selecciona una  materia --</option>
      <?php
      $sql = "SELECT clave_docente, nombre_docente,especialidad FROM docentes ORDER BY clave_docente";
      $resultado = mysqli_query($conexion, $sql);
      
      while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<option value='{$fila['clave_docente']}'>clave_docente: {$fila['clave_docente']} - {$fila['nombre_docente']} ({$fila['especialidad']})</option>";
      }
      
      mysqli_close($conexion);
      ?>
    </select>
    
    <br><br>
    <input type="submit" name="eliminar" value="Eliminar" onclick="return confirm('¿Estás seguro de que quieres eliminar este alumno?')">
    <a href="index.html">🏠 Regresar</a>
  </form>
</fieldset>
</body>
</html>