<?php
// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

// Conectarse a la base de datos
$conexion = mysqli_connect('localhost', 'root', 'admin', 'estudiante');

// Verificar la conexión
if (!$conexion) {
    die('Error al conectarse a la base de datos: ' . mysqli_connect_error());
}

// Insertar los datos del formulario en la tabla 'estudiantes'
$sql = "INSERT INTO estudiante VALUES (null,'$nombre', '$correo', '$contrasena')";

if (mysqli_query($conexion, $sql)) {
    echo "¡Registro exitoso!";
    echo "<script>alert('Registro exitoso')</script>";
    header("Location: register.php");
    exit;

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}

// Cerrar la conexión
mysqli_close($conexion);
?>