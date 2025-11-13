<?php
// Conexión sin PDO (PHP Data Object) orientado a objetos
$servername = "localhost";
$database = "alumnos";
$username = "root";
$password = "";

// Creación de conexión
$conexion = mysqli_connect($servername, $username, $password, $database);

// Chequeo de conexión
if (!$conexion) {
    die("❌ Conexión fallida: " . mysqli_connect_error());
}

// PROCESO DE INSERCIÓN DE DATOS
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Atributos de la tabla
    $id_alumno = $_POST['id_alumno'];
    $nombre_alumno = $_POST['nombre_alumno'];
    $apellido_alumno = $_POST['apellido_alumno'];
    $fecha_nac = $_POST['fecha_nac'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];

    // Validar que no vengan vacíos
    if (!empty($id_alumno) && !empty($nombre_alumno) && !empty($apellido_alumno) && 
        !empty($fecha_nac) && !empty($direccion) && !empty($telefono) && !empty($email)) {
        
        // Sentencia SQL
        $sql = "INSERT INTO alumno (id_alumno, nombre_alumno, apellido_alumno, fecha_nac, direccion, telefono, email) 
                VALUES ('$id_alumno', '$nombre_alumno', '$apellido_alumno', '$fecha_nac', '$direccion', '$telefono', '$email')";

        if (mysqli_query($conexion, $sql)) {
            // Mostrar mensaje y redirigir a los 5 segundos
            echo "
            <html>
            <head>
                <meta charset='UTF-8'>
                <title>Registro exitoso</title>
                <script>
                    // Redirigir después de 5 segundos
                    setTimeout(function(){
                        window.location.href = 'insertar.html';
                    }, 5000);
                </script>
            </head>
            <body style='font-family: Arial, sans-serif; text-align: center; margin-top: 50px;'>
                <h2 style='color: green;'>✅ Nuevo registro creado exitosamente.</h2>
                <p>Serás redirigido automáticamente a la página de inserción en 5 segundos...</p>
                <p><a href='insertar.html'>Haz clic aquí si no eres redirigido automáticamente.</a></p>
            </body>
            </html>
            ";
        } else {
            echo "❌ Error al insertar: " . mysqli_error($conexion);
        }
    } else {
        echo "⚠️ Por favor, completa todos los campos del formulario.";
    }

    // Cerrar conexión
    mysqli_close($conexion);
}
?>
