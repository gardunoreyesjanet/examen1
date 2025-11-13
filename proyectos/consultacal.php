<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Consultar Calificación</title>
  <link rel="stylesheet" href="cecy.css">
</head>
<body>
<fieldset>
  <legend>Consultar Calificación</legend>
  
  <form method="get" action="">
    <label>Seleccionar calificación:</label>
    <select name="id_calificacion" onchange="this.form.submit()" required>
      <option value="">-- Selecciona la calificación --</option>
      <?php
      include("conexion.php");

      // CORREGIDO: Hacer JOIN para obtener el nombre del alumno
      $sql = "SELECT c.id_calificacion, a.nombre_alumno, a.apellido_alumno 
              FROM calificacion c
              JOIN alumno a ON c.id_alumno = a.id_alumno
              ORDER BY a.nombre_alumno, a.apellido_alumno";

      $resultado = mysqli_query($conexion, $sql);

      if ($resultado && mysqli_num_rows($resultado) > 0) {
        while ($fila = mysqli_fetch_assoc($resultado)) {
          $selected = (isset($_GET['id_calificacion']) && $_GET['id_calificacion'] == $fila['id_calificacion']) ? 'selected' : '';
          $nombre_completo = $fila['nombre_alumno'] . ' ' . $fila['apellido_alumno'];
          echo "<option value='{$fila['id_calificacion']}' $selected>{$fila['id_calificacion']} - $nombre_completo</option>";
        }
      } else {
        echo "<option value=''>No hay calificaciones</option>";
      }
      ?>
    </select>
  </form>
  
  <br>
  
  <?php
  if (isset($_GET['id_calificacion']) && !empty($_GET['id_calificacion'])) {
    $id_calificacion = mysqli_real_escape_string($conexion, $_GET['id_calificacion']);

    // Consulta completa con JOINs
    $sql = "SELECT 
              c.id_calificacion,
              c.calificacion,
              c.fecha_calificacion,
              c.periodo,
              c.tipo_evaluacion,
              a.nombre_alumno,
              a.apellido_alumno,
              d.nombre_docente,
              d.apellido_docente,
              m.nombre_materia
            FROM calificacion c
            JOIN alumno a ON a.id_alumno = c.id_alumno
            JOIN docentes d ON d.clave_docente = c.clave_docente
            JOIN materia m ON m.id_materia = c.id_materia
            WHERE c.id_calificacion = '$id_calificacion'";

    $resultado = mysqli_query($conexion, $sql);
    
    if ($resultado && mysqli_num_rows($resultado) > 0) {
      $cal = mysqli_fetch_assoc($resultado);
      $nombre_alumno = $cal['nombre_alumno'] . ' ' . $cal['apellido_alumno'];
      $nombre_docente = $cal['nombre_docente'] . ' ' . $cal['apellido_docente'];
  ?>
  
  <form>
    <label>ID Calificación:</label>
    <input type="number" value="<?php echo $cal['id_calificacion']; ?>" readonly><br><br>
    
    <label>Calificación:</label>
    <input type="number" step="0.01" value="<?php echo $cal['calificacion']; ?>" readonly><br><br>
    
    <label>Fecha:</label>
    <input type="date" value="<?php echo $cal['fecha_calificacion']; ?>" readonly><br><br>
    
    <!-- LISTA DESPLEGABLE DE PERÍODOS (2000-2001 hasta 2025-2026) -->
    <label>Periodo:</label>
    <select name="periodo" >
      <?php
      $periodo_actual = $cal['periodo']; // Ej: "2025-2026"
      for ($anio = 2000; $anio <= 2025; $anio++) {
        $fin = $anio + 1;
        $valor = "$anio-$fin";
        $selected = ($periodo_actual === $valor) ? 'selected' : '';
        echo "<option value='$valor' $selected>$valor</option>";
      }
      ?>
    </select><br><br>
    
    <label>Tipo Evaluación:</label>
    <input type="text" value="<?php echo $cal['tipo_evaluacion']; ?>" readonly><br><br>
    
    <label>Alumno:</label>
    <input type="text" value="<?php echo htmlspecialchars($nombre_alumno); ?>" readonly><br><br>
    
    <label>Docente:</label>
    <input type="text" value="<?php echo htmlspecialchars($nombre_docente); ?>" readonly><br><br>

    <label>Materia:</label>
    <input type="text" value="<?php echo $cal['nombre_materia']; ?>" readonly><br><br>

    <div style="margin-top: 15px;">
      <a href="consultacal.php">Nueva Selección</a> |
      <a href="index.html">Regresar</a>
    </div>
  </form>
  
  <?php
    } else {
      echo "<p style='color:red;'>No se encontró la calificación con ID: $id_calificacion</p>";
    }
  }
  mysqli_close($conexion);
  ?>
  
</fieldset>
</body>
</html>