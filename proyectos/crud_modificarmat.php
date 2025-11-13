<?php include("conexion.php");

if (isset($_POST['actualizar'])) {
  $id_materia = $_POST['id_materia'];
    $nombre_materia = $_POST['nombre_materia'];
    $descripcion = $_POST['descripcion'];
    $creditos= $_POST['creditos'];
    $horas_semana = $_POST['horas_semana'];
    

  $sql = "UPDATE materia SET  nombre_materia='$nombre_materia', descripcion='$descripcion', creditos='$creditos',horas_semana='$horas_semana' WHERE id_materia='$id_materia'";
  $resultado = mysqli_query($conexion, $sql);

  if ($resultado) {
    echo "<script>
            alert('Registro actualizado correctamente');
            window.location.href = '../modificarmat.php';
          </script>";
  } else {
    echo "<script>
            alert('Error al actualizar');
            window.history.back();
          </script>";
  }
}
?>