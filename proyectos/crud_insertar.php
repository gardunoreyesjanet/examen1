<?php include("conexion.php"); 

if (isset($_POST['enviar'])) {
 $id_alumno = $_POST['id_alumno'];
    $nombre_alumno = $_POST['nombre_alumno'];
    $apellido_alumno = $_POST['apellido_alumno'];
    $fecha_nac = $_POST['fecha_nac'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];

  $sql = "INSERT INTO alumno (id_alumno,nombre_alumno,apellido_alumno,fecha_nac,direccion,telefono,email) VALUES ('$id_alumno', '$nombre_alumno', '$apellido_alumno', '$fecha_nac', '$direccion', '$telefono', '$email')";
  $resultado = mysqli_query($conexion, $sql);

  if ($resultado) {
    echo "<script>
            alert('Alumno insertado correctamente');
            window.location.href = '../insertar.html';
          </script>";
  } else {
    echo "<script>
            alert('Error al insertar');
            window.location.href = '../insertar.html';
          </script>";
  }
}
?>