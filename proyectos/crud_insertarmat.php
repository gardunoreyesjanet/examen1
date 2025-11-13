<?php include("conexion.php"); 

if (isset($_POST['enviar'])) {
 $id_materia = $_POST['id_materia'];
    $nombre_materia = $_POST['nombre_materia'];
    $descripcion = $_POST['descripcion'];
    $creditos = $_POST['creditos'];
    $horas_semana = $_POST['horas_semana'];
    

  $sql = "INSERT INTO materia (id_materia,nombre_materia,descripcion,creditos,horas_semana) VALUES ('$id_materia', '$nombre_materia', '$descripcion', '$creditos', '$horas_semana')";
  $resultado = mysqli_query($conexion, $sql);

  if ($resultado) {
    echo "<script>
            alert('materia insertado correctamente');
            window.location.href = '../insertarmat.html';
          </script>";
  } else {
    echo "<script>
            alert('Error al insertar');
            window.location.href = '../insertarmat.html';
          </script>";
  }
}
?>