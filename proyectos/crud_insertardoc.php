<?php include("conexion.php"); 

if (isset($_POST['enviar'])) {
 $clave_docente = $_POST['clave_docente'];
    $nombre_docente = $_POST['nombre_docente'];
    $apellido_docente = $_POST['apellido_docente'];
    $especialidad = $_POST['especialidad'];
    $email = $_POST['email'];
    $fecha_contratacion= $_POST['fecha_contratacion'];
    

  $sql = "INSERT INTO docentes (clave_docente,nombre_docente,apellido_docente,especialidad,email,fecha_contratacion) VALUES ('$clave_docente', '$nombre_docente', '$apellido_docente', '$especialidad', '$email' ,'$fecha_contratacion')";
  $resultado = mysqli_query($conexion, $sql);

  if ($resultado) {
    echo "<script>
            alert('Docente insertado correctamente');
            window.location.href = '../insertardoc.html';
          </script>";
  } else {
    echo "<script>
            alert('Error al insertar');
            window.location.href = '../insertardoc.html';
          </script>";
  }
}
?>