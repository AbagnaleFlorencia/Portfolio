<?php 
   ini_set('display_errors', 1);
   ini_set('display_startup_errors', 1);
   error_reporting(E_ALL);

   $nombre= $_POST['txtNombre'];
    $mail= $_POST['txtCorreo'];
    $telefono= $_POST['txtTelefono'];
    $mensaje= $_POST['txtMensaje'];

    $header= "Enviado desde la pagina de PORTFOLIO";
    $header= "From: $mail";

    $mensajeCompleto= "Este mensaje fue enviado por: " . $nombre. "\nTeléfono de contacto: " . $telefono. "\nCorreo: $mail" . "\nMensaje: " .$mensaje;

    $para= "abagnaleflorenciag@gmail.com";
    $asunto= "CONSULTA WEB";
    mail ($para,$asunto, $mensajeCompleto, $header);
    echo "<script>alert('correo enviado exitosamente')</script>";
    //echo "<script> setTimeout(\"location.href='index.php'\")</script>";

 

?>