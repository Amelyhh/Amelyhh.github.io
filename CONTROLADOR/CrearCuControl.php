<?php
//recibir datos del formulario y guardarlo en las variables
$nombreUsuario=$_REQUEST['txtUsuario'];
$apellidoPUsuario=$_REQUEST['txtApPaterno'];
$apellidoMUsuario=$_REQUEST['txtApMaterno'];
$emailUsuario=$_REQUEST['txtEmail'];
$telUsuario=$_REQUEST['txtTelefono'];
$nombreLogin=$_REQUEST['txtNombreLogin'];
$claveLogin=$_REQUEST['txtPassword'];
$idRolUsuario=$_REQUEST['txtTipoUsuario'];


//convertir un archivo de imagen a binario y caracteres
$FotoUsuario = addslashes(file_get_contents($_FILES['txtFoto']['tmp_name']));
$nombreFotoUsuario=$_FILES['txtFoto']['name'];

/*
echo 'Foto '.$FotoUsuario;
echo 'Nombre Foto '.$nombreFotoUsuario;
*/

//CONEXION DE BASE DE DATOS
$nombreServidor="localhost:3306";
$nombreUsuarioServidor="root";
$claveServidor="";
$nombreBDServidor="mark3tievnd";


try {
    $conn=new PDO("mysql:host=".$nombreServidor.";dbname=".
    $nombreBDServidor,$nombreUsuarioServidor,$claveServidor);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


    $instruccionesSQL=$conn->prepare("call mark3tievnd.sp_crearCuenta(:nomUsuario, :ApellidoPUsuario, :ApellidoMUsuario,
    :EmailUsuario, :TelUsuario, :FotoUsuario, :NomFotoUsuario, :Nomlogin, :Clavelog, :idrolusuario)");
    $instruccionesSQL->bindParam(':nomUsuario',$nombreUsuario);
    $instruccionesSQL->bindParam(':ApellidoPUsuario',$apellidoPUsuario);
    $instruccionesSQL->bindParam(':ApellidoMUsuario',$apellidoMUsuario);
    $instruccionesSQL->bindParam(':EmailUsuario',$emailUsuario);
    $instruccionesSQL->bindParam(':TelUsuario',$telUsuario);
    $instruccionesSQL->bindParam(':FotoUsuario',$fotoUsuario);
    $instruccionesSQL->bindParam(':NomFotoUsuario',$nombreFotoUsuario);
    $instruccionesSQL->bindParam(':Nomlogin',$nombreLogin);
    $instruccionesSQL->bindParam(':Clavelog',$claveLogin);
    $instruccionesSQL->bindParam(':idrolusuario',$idRolUsuario);

    
    //se ejecuta el procedimiento de la BD
    $instruccionesSQL->execute();
    echo 'Se creo correctamente la cuenta';
} catch (PDOException $e) {
    echo'No se pudo crear cuenta'. $e->getMessage();
}
    
    ?>