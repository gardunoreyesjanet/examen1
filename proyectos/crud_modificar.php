<?php include("conexion.php");

if (isset($_POST['actualizar'])) {
  $id_alumno = $_POST['id_alumno'];
    $nombre_alumno = $_POST['nombre_alumno'];
    $apellido_alumno = $_POST['apellido_alumno'];
    $fecha_nac = $_POST['fecha_nac'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
 $sexo = $_POST['sexo'];
  $sql = "UPDATE alumno SET  nombre_alumno='$nombre_alumno', apellido_alumno='$apellido_alumno', fecha_nac='$fecha_nac',direccion='$direccion', telefono='$telefono',email='$email',sexo='$sexo' WHERE id_alumno='$id_alumno'";
  $resultado = mysqli_query($conexion, $sql);

  if ($resultado) {
    echo "<script>
            alert('Registro actualizado correctamente');
            window.location.href = '../modificar.php';
          </script>";
  } else {
    echo "<script>
            alert('Error al actualizar');
            window.history.back();
          </script>";
  }
}
?>