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
    <header class="container px-0">
        <nav class="navbar navbar-expand-md ">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mb-2 mb-mt-2">
                        <li class="nav-item  px-3"> <!--antes lo tenia on pe-3 y quedaba bien
                             en la compu pero se rompia en el celu-->
                            <a class="nav-link px-4 py-1" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link px-4 py-1" href="sobre-mi.php">Sobre mí</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link px-4 py-1" href="proyectos.php">Proyectos</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link active px-4 py-1" href="contacto.php">Contacto</a>
                        </li>
                    </ul>
                </div>
                <div class="d-inline">
                    <a href="" class="btn btn-rojo">Descargar mi CV <i class="fas fa-download"></i></a>
                </div>
            </div>
        </nav>
    </header>
    
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


             <!-- https://getbootstrap.com/docs/5.1/examples/sticky-footer-navbar/-->

            </div>

        </div>
        


    </main>
    <footer class="container mb-3">
        <div class="row my-5">
            <div class="col-12 col-sm-3 text-center text-sm-start my-sm-5">
                <a href="https://github.com/AbagnaleFlorencia?tab=repositories" target="_blank" title="Github" class="mr-3"><i class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com/in/florencia-abagnale-bb656296/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>

            </div>
            <div class="col-12 col-sm-3 text-center text-sm-start my-sm-5">
                <span>Sponsor</span> <a href="https://depcsuite.com/" target="_blank">DePC Suite</a>
            </div>
            <div class="col-12 col-sm-3 text-center text-sm-start my-sm-5">
                <a href="to:abagnaleflorenciag@gmail.com">abagnaleflorenciag@gmail.com.ar</a>
            </div>
    
        </div>
        <div class="whatsapp">
            <a href="+54 9 351 704-9959"></a> <i class="fab fa-whatsapp pb-4 pt-3 px-3"></i>
        </div>
        


    </footer>
    
</body>
<script src="css/bootstrap/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
</html>