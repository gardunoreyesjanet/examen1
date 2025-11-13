<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Modificar Calificación</title>
  <link rel="stylesheet" href="cecy.css">
</head>
<body>
<fieldset>
  <legend>Modificar Calificación</legend>
  
  <!-- Seleccionar calificación: ID - Nombre Alumno -->
  <form method="get" action="">
    <label>Seleccionar la calificación:</label>
    <select name="id_calificacion" onchange="this.form.submit()" required>
      <option value="">-- Selecciona una calificación --</option>
      <?php
      include("conexion.php");

      $sql = "SELECT c.id_calificacion, a.nombre_alumno, a.apellido_alumno
              FROM calificacion c
              JOIN alumno a ON c.id_alumno = a.id_alumno
              ORDER BY a.apellido_alumno, a.nombre_alumno";

      $resultado = mysqli_query($conexion, $sql);
      while ($fila = mysqli_fetch_assoc($resultado)) {
        $selected = (isset($_GET['id_calificacion']) && $_GET['id_calificacion'] == $fila['id_calificacion']) ? 'selected' : '';
        $nombre_completo = $fila['nombre_alumno'] . ' ' . $fila['apellido_alumno'];
        // Solo ID y nombre del alumno
        echo "<option value='{$fila['id_calificacion']}' $selected>{$fila['id_calificacion']} - $nombre_completo</option>";
      }
      ?>
    </select>
  </form>
  
  <br>
  
  <?php
  if (isset($_GET['id_calificacion']) && !empty($_GET['id_calificacion'])) {
    $id_calificacion = mysqli_real_escape_string($conexion, $_GET['id_calificacion']);

    $sql = "SELECT 
              c.*,
              a.nombre_alumno, a.apellido_alumno,
              d.nombre_docente, d.apellido_docente,
              m.nombre_materia
            FROM calificacion c
            JOIN alumno a ON c.id_alumno = a.id_alumno
            JOIN docentes d ON c.clave_docente = d.clave_docente
            JOIN materia m ON c.id_materia = m.id_materia
            WHERE c.id_calificacion = '$id_calificacion'";

    $resultado = mysqli_query($conexion, $sql);
    
    if (mysqli_num_rows($resultado) > 0) {
      $cal = mysqli_fetch_assoc($resultado);
      $nombre_alumno = $cal['nombre_alumno'] . ' ' . $cal['apellido_alumno'];
      $nombre_docente = $cal['nombre_docente'] . ' ' . $cal['apellido_docente'];
  ?>
  
  <!-- Formulario de modificación -->
  <form method="post" action="crud_modificarcal.php">
    <input type="hidden" name="id_calificacion" value="<?php echo $cal['id_calificacion']; ?>">

    <label>ID Calificación:</label>
    <input type="number" value="<?php echo $cal['id_calificacion']; ?>" readonly><br><br>

    <label>Calificación:</label>
    <input type="number" step="0.01" min="0" max="10" name="calificacion" value="<?php echo $cal['calificacion']; ?>" required><br><br>

    <label>Fecha:</label>
    <input type="date" name="fecha_calificacion" value="<?php echo $cal['fecha_calificacion']; ?>" required><br><br>

    <!-- LISTA DESPLEGABLE DE PERÍODOS -->
    <label>Período:</label>
    <select name="periodo" required>
      <?php
      $periodo_actual = $cal['periodo'];
      for ($anio = 2000; $anio <= 2025; $anio++) {
        $fin = $anio + 1;
        $valor = "$anio-$fin";
        $selected = ($periodo_actual === $valor) ? 'selected' : '';
        echo "<option value='$valor' $selected>$valor</option>";
      }
      ?>
    </select><br><br>

    <label>Tipo Evaluación:</label>
    <input type="text" name="tipo_evaluacion" value="<?php echo $cal['tipo_evaluacion']; ?>" required><br><br>

    <label>Alumno:</label>
    <input type="text" value="<?php echo htmlspecialchars($nombre_alumno); ?>" readonly>
    <input type="hidden" name="id_alumno" value="<?php echo $cal['id_alumno']; ?>"><br><br>

    <label>Docente:</label>
    <input type="text" value="<?php echo htmlspecialchars($nombre_docente); ?>" readonly>
    <input type="hidden" name="clave_docente" value="<?php echo $cal['clave_docente']; ?>"><br><br>

    <label>Materia:</label>
    <input type="text" value="<?php echo $cal['nombre_materia']; ?>" readonly>
    <input type="hidden" name="id_materia" value="<?php echo $cal['id_materia']; ?>"><br><br>

    <!-- BOTONES EXACTAMENTE COMO EN TU CÓDIGO ORIGINAL -->
    <input type="submit" name="actualizar" value="Actualizar">
    <a href="modificarcal.php">Nueva Selección</a>
    <a href="index.html">Regresar</a>
  </form>
  
  <?php
    } else {
      echo "<p style='color:red;'>No se encontró la calificación.</p>";
    }
  }
  mysqli_close($conexion);
  ?>
  
</fieldset>
</body>
</html>