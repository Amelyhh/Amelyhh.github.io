<?php
//datos que se reciben del formulario
$usuario= $_GET['txtUsuario'];
$contraseña= $_GET['txtPassword'];

//conectar conexión a la base de datos

$nombreServidor="localhost:3306";
$nombreUsuarioServidor="root";
$claveServidor="";
$nombreBDServidor="segundamarket";

try {
    $conn = new PDO("mysql:host=" . $nombreServidor . ";dbname=" . $nombreBDServidor, $nombreUsuarioServidor, $claveServidor);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $instrucionSQL=$conn->prepare("call segundamarket.sp_validarLogin(:user,:password);");
    $instrucionSQL->bindParam(':user',$usuario);
    $instrucionSQL->bindParam(':password',$contraseña);
    $instrucionSQL->execute();

    $datosConsulta=$instrucionSQL->setFetchMode(PDO::FETCH_ASSOC);
    $datosConsulta=$instrucionSQL->fetchAll();

        //echo'<br>Nombre: '.$datosConsulta[0]['nombreUsuario'];
        //echo'<br>Nombre: '.$datosConsulta[0]['claveLogin'];
        //echo'<br>Nombre: '.$datosConsulta[0]['nombreRolUsuario'];

    $usuarioU=$datosConsulta[0]['NombreUsuario'];
    $contraseñaU=$datosConsulta[0]['claveLogin'];
    $nombreRolUsuarioU=$datosConsulta[0]['NombreRolUsuario'];

    echo 'Conexion al servidor Exitosa...';
} catch (PDOException $e) {
    echo 'Fallo la conexion al servidor'. $e->getMessage();
}

if($usuario==$usuarioU && $contraseña==$contraseñaU && $nombreRolUsuarioU=="Administrador"){
    echo 'usuario y/o contraseña validos';
    session_start();
    $_SESSION['usuarioValido']=$usuarioU;
    echo'
    <script>
    window.location.href="../VISTA/PAGINAS/ADMIN/indexAdmin.php";
    </script>
    ';
}elseif($usuario==$usuarioU && $contraseña==$contraseñaU && $nombreRolUsuarioU=="Cliente"){
    echo 'usuario y/o contraseña validos';
    session_start();
    $_SESSION['usuarioValido']=$usuarioU;
    echo'
    <script>
    window.location.href="../VISTA/PAGINAS/CLIENTE/indexCliente.php";
    </script>
    ';
}else{
    echo 'usuario y/o contraseña invalidos';
} 

?>