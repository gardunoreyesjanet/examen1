<?php include("conexion.php");

if (isset($_POST['actualizar'])) {

  $id_calificacion= $_POST['id_calificacion'];
    $calificacion= $_POST['calificacion'];
    $fecha_calificacion= $_POST['fecha_calificacion'];
    $periodo= $_POST['periodo'];
    $tipo_evaluacion= $_POST['tipo_evaluacion'];
    $id_alumno= $_POST['id_alumno'];
    $clave_docente= $_POST['clave_docente'];
    $id_materia= $_POST['id_materia'];

  $sql = "UPDATE calificacion SET  calificacion='$calificacion', fecha_calificacion='$fecha_calificacion',periodo='$periodo',tipo_evaluacion='$tipo_evaluacion', id_alumno='$id_alumno',clave_docente='$clave_docente',id_materia='$id_materia' WHERE id_calificacion='$id_calificacion'";
  $resultado = mysqli_query($conexion, $sql);

  if ($resultado) {
    echo "<script>
            alert('Registro actualizado correctamente');
            window.location.href = '../modificarcal.php';
          </script>";
  } else {
    echo "<script>
            alert('Error al actualizar');
            window.history.back();
          </script>";
  }
}
?>