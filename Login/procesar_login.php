<?php
// Establecemos la conexión con la base de datos
$conexion = mysqli_connect('localhost', 'root', 'admin', 'estudiante');

// Verificamos si el usuario ha enviado el formulario de inicio de sesión
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtenemos los datos del formulario
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    // Buscamos al estudiante en la base de datos
    $consulta = "SELECT * FROM estudiante WHERE est_correo = '$correo' AND est_contrasena = '$contrasena'";
    $resultado = mysqli_query($conexion, $consulta);

    // Si se encontró un estudiante con ese correo y contraseña, iniciamos la sesión
    if (mysqli_num_rows($resultado) == 1) {
        // Iniciamos la sesión
        session_start();

        // Obtenemos los datos del estudiante y los almacenamos en la sesión
        $fila = mysqli_fetch_assoc($resultado);
        $_SESSION['id'] = $fila['est_id'];
        $_SESSION['nombre'] = $fila['est_nombre'];
        $_SESSION['correo'] = $fila['est_correo'];

        // Redirigimos al estudiante a la página de inicio
        header('Location: landingpage.php');
        exit;
    } else {
        // Si no se encontró un estudiante con ese correo y contraseña, mostramos un mensaje de error
        echo "<script>alert('Registro exitoso')</script>";
        header("Location: index.php");
    }
}
?>