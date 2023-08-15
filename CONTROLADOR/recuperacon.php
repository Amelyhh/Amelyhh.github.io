<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "segundamarket";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}

$correo = $_POST['email'];

$queryclave = $conn->prepare("SELECT l.claveLogin FROM usuario_nueva u INNER JOIN `login` l ON u.idUsuario = l.idUsuar WHERE u.emailUsuario = :correo");
$queryclave->bindParam(':correo', $correo);
$queryclave->execute();

$nr = $queryclave->rowCount();

if ($nr == 1) {
    $mostrar = $queryclave->fetch();
    $enviarpass = $mostrar['claveLogin'];

    $paracorreo = $correo;
    $titulo = "Recuperar contraseña";
    $mensaje = "Tu contraseña es: ".$enviarpass;
    $tucorreo = "From: gabrielyair079@gmail.com";

    if (mail($paracorreo, $titulo, $mensaje, $tucorreo)) {
        echo "<script> alert('Tu contraseña ha sido enviada a tu correo');window.location= '../Vista/Paginas/Cuentas/Inicio.html' </script>";
    } else {
        echo "<script> alert('Error');window.location= '../Vista/Paginas/Cuentas/Olvidar.html' </script>";
    }
} else {
    echo "<script> alert('Este correo no existe');window.location= '../Vista/Paginas/Cuentas/Inicio.html' </script>";
}
?>