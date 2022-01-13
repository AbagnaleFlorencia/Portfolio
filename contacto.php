<?php 
    $pg="contacto";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/fontawesome-free-5.15.4-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">

</head>
<body id="contacto">
    <?php include_once "header.php"; ?>
    
    <main class="container">
        <div class="row">
            <div class="col-12 pt-4 pb-4"> 
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col12 col-sm-6">
                <p>Te invito a que me contactes envindome un mensaje o bien por whatsapp</p>
                <div class="col-3 me-20px mb-3">
                    <img src="images/WhatsApp Image 2021-12-25 at 19.28.34.jpeg" alt="codigo-wtsap" class="codigo-wtsap rounded">
    
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <form action="" method="POST">
                    <div class="pb-3">
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control shadow"> 
                    </div>
                    <div class="pb-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo" class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Teléfono/Whatsapp" class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe aquí el mensaje" class="form-control shadow"></textarea>
                    </div>
                    <div class="pb-3 float-end float-sm-start"> <!--float end posiciona el boton a la deeca para vista de celular
                    y float-sm-start lo posiciona a la izquierda para computadoras en adelante-->
                        <button type="submit" id="btnEnviar" name="btnEnviar" class="btn btn-blanco px-4">ENVIAR</button>
                    </div>
                    
                </form>
                


             

            </div>

        </div>
        


    </main>
    <?php include_once "footer.php"; ?>
    
</body>
<script src="css/bootstrap/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
</html>