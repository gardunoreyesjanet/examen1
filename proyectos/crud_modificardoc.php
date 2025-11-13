<?php include("conexion.php");

if (isset($_POST['actualizar'])) {
  $clave_docente = $_POST['clave_docente'];
    $nombre_docente = $_POST['nombre_docente'];
    $apellido_docente = $_POST['apellido_docente'];
    $especialidad = $_POST['especialidad'];
    $email = $_POST['email'];
    $fecha_contratacion= $_POST['fecha_contratacion'];
    
  $sql = "UPDATE docentes SET  nombre_docente='$nombre_docente', apellido_docente='$apellido_docente', especialidad='$especialidad',email='$email',fecha_contratacion='$fecha_contratacion' WHERE clave_docente='$clave_docente'";
  $resultado = mysqli_query($conexion, $sql);

  if ($resultado) {
    echo "<script>
            alert('Registro actualizado correctamente');
            window.location.href = '../modificardoc.php';
          </script>";
  } else {
    echo "<script>
            alert('Error al actualizar');
            window.history.back();
          </script>";
  }
}
?>