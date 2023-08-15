<?php
$paracorreo ="samher@gmail.com";
$titulo ="Test correo";
$mensaje="Hola mundo";
$tucorreo="From:hernandezamely2004@gmail.com";

if(mail($paracorreo,$titulo,$mensaje,$tucorreo)){
    echo"correo enviado";
}else{
    echo"error";
}
?>