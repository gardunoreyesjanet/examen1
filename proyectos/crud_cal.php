<?php include("conexion.php"); 

if (isset($_POST['enviar'])) {
 $id_calificacion = $_POST['id_calificacion'];
    $calificacion = $_POST['calificacion'];
    $fecha_calificacion = $_POST['fecha_calificacion'];
    $periodo = $_POST['periodo'];
    $tipo_evaluacion = $_POST['tipo_evaluacion'];
    $id_alumno = $_POST['id_alumno'];
    $clave_docente = $_POST['clave_docente'];
    $id_materia = $_POST['id_materia'];

  $sql = "INSERT INTO calificacion (id_calificacion,calificacion,fecha_calificacion,periodo,tipo_evaluacion,id_alumno,clave_docente,id_materia) VALUES ('$id_calificacion', '$calificacion', '$fecha_calificacion', '$periodo', '$tipo_evaluacion','$id_alumno','$clave_docente','$id_materia')";
  $resultado = mysqli_query($conexion, $sql);

  if ($resultado) {
    echo "<script>
            alert('calificacion insertada correctamente');
            window.location.href = '../insertarcal.html';
          </script>";
  } else {
    echo "<script>
            alert('Error al insertar');
            window.location.href = '../insertarcal.html';
          </script>";
  }
}
?>
