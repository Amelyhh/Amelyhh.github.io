<?php
//Datos que se reciben del formulario
$email=$_GET['txtEmail'];

//CONEXION DE BASE DE DATOS
$nombreServidor="localhost:3306";
$nombreUsuarioServidor="root";
$claveServidor="";
$nombreBDServidor="mark3tievnd";

try {
    $conn = new PDO("mysql:host=" . $nombreServidor . ";dbname=" . $nombreBDServidor, $nombreUsuarioServidor, $claveServidor);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //se construye la instrucion de SQL en este ejemplo es el procedimiento almacenado
    $instrucionSQL = $conn->prepare("call baseform.sp_passwordReset(':emailUsuario')");
    $instrucionSQL->bindParam(':emailUsuario', $email);

    //se ejecuta el procedimiento de la BD
    $instrucionSQL->execute();
    $datosConsulta = $instrucionSQL->setFetchMode(PDO::FETCH_ASSOC);
    $datosConsulta = $instrucionSQL->fetchAll();

    //Se crea un arreglo (Matriz) para los datos de la consulta
    echo '<br>Contraseña: ' . $datosConsulta[0]['claveLogin'];
    
    //Se guardan en las variables los datos que viene de la consulta
    $contraseniaU = $datosConsulta[0]['claveLogin'];
    echo '<br>';
    echo 'Procura guardar tus contraseñas en un lugar que recuerdes.';
    
} catch (\PDOException $e) {
    echo 'Error de Conexion a la hora de conectar al Servidor ' . $e->getMessage();
}
?>