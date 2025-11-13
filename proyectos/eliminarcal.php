<?php include("conexion.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Eliminar Calificacion</title>
<link rel="stylesheet" href="cecy.css">
</head>
<body>
<fieldset>
  <legend>Eliminar Calificacion</legend>
  
  <form method="post" action="crud_eliminarcal.php">
    <label>Seleccionar calificacion a Eliminar:</label>
    <select name="id_calificacion" required>
      <option value="">-- Selecciona una  calificacion --</option>
      <?php
      $sql = "SELECT id_calificacion, calificacion,fecha_calificacion FROM calificacion ORDER BY id_calificacion";
      $resultado = mysqli_query($conexion, $sql);
      
      while ($fila = mysqli_fetch_assoc($resultado)) {
         echo "<option value='{$fila['id_calificacion']}'>id_calificacion: {$fila['id_calificacion']} - {$fila['calificacion']} ({$fila['fecha_calificacion']})</option>";
      }
      
        
       
         
      
      mysqli_close($conexion);
      ?>
    </select>
    
    <br><br>
    <input type="submit" name="eliminar" value="Eliminar" onclick="return confirm('¿Estás seguro de que quieres eliminar esta calificacion?')">
    <a href="index.html">🏠 Regresar</a>
  </form>
</fieldset>
</body>
</html>