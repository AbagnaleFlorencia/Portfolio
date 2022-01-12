<?php 
    $pg="proyectos";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Proyectos</title>
    <link rel="stylesheet" href="css/fontawesome/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/fontawesome-free-5.15.4-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body id="proyectos">
    <?php include_once "header.php"; ?>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-4 pb-4">
                <h1>Mis Proyectos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <p>Los siguientes son algunos de los trabajos que he realizado:</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-4 div-proyectos">
                <div class="m-1 border bg-white shadow">
                    <div>
                        <img src="images/abmclientes.png" alt="ABM Clientes" class="img-fluid"> 
                            
                    </div>
                   
                    <div class="col-12 my-1">
                        <h2 class="ps-3 py-3">AMB CLIENTES</h2>
                    </div>
                        <div class="py-2 px-2">
                            <p class="text-justify">
                                Alta, baja, modificación de un egistro de clientes empleando: HTML, CSS, PHP, Bootstrap y Json.
                            </p>

                        </div>
                        <div class="row">
                            <div class="col-6 ps-4 pb-2">
                                <a href="#######" class="btn btn-rojo">Ver online</a> <!--PONER MI PROPIO ENLACE DEL PROYECTO-->
    
                            </div>
                            <div class="col-6 p-0 text-center">
                                <a href="https://github.com" class="btn btn-link">Código fuente</a>
    
                            </div>
                        </div>
                      
                </div>

            </div>
            <div class="col-12 col-sm-4"> <!--offset-1 me permite dejar una posicion entre las columnas-->
                <div class="m-1 bg-white border shadow">
                    <div class="col-12 p-0">
                        <img src="images/abmventas.png" alt="ABM Ventas" class="img-fluid">

                    </div>
                    
                    <div class="my-1">
                        <h2 class="ps-3 py-3">SISTEMA DE GESTIÓN DE VENTAS</h2>
                    </div>
                    
                    <div class="py-2 px-2">
                        <p class="text-justify">Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC,
                            Bootstrap, Js, Alax, jQuery y MySQL de base de datos.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-6 ps-4 pb-2">
                            <a href="#######" class="btn btn-rojo">Ver online</a> <!--PONER MI PROPIO ENLACE DEL PROYECTO-->

                        </div>
                        <div class="col-6 p-0 text-center">
                            <a href="https://github.com" class="btn btn-link">Código fuente</a>

                        </div>
                    </div>

                </div>

            </div>
            <div class="col-12 col-sm-4">
                <div class="m-1 border bg-white shadow">
                    <div class="col-12 p-0">
                        <img src="images/proyecto-integrador.png" alt="Proyecto Integrador" class="img-fluid">

                    </div>
                   
                    <div class="my-1">
                        <h2 class="ps-3 py-3">PROYECTO INEGRADOR</h2>
                    </div>
                    <div class="py-2 px-2">
                        <p class="text-justify">
                            Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuey, AJAX, HTML, CSS, con
                            panel admnistrador, gestor de usuarios, modulo de permisos y funcionalidades afines.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-6 ps-4 pb-2">
                            <a href="#######" class="btn btn-rojo">Ver online</a> <!--PONER MI PROPIO ENLACE DEL PROYECTO-->

                        </div>
                        <div class="col-6 p-0 text-center">
                            <a href="https://github.com" class="btn btn-link">Código fuente</a>

                        </div>
                    </div>
                </div>
                

            </div>

        </div>
        
   

    </main>
    <footer class="container my-5">
        <div class="row">
            <div class="col-12 col-sm-3 text-center text-sm-start">
                <a href="https://github.com/AbagnaleFlorencia?tab=repositories" target="_blank" title="Github" class="mr-3"><i class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com/in/florencia-abagnale-bb656296/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>

            </div>
            <div class="col-12 col-sm-3 text-center text-sm-start">
              <span> Sponsor </span> <a href="https://depcsuite.com/" target="_blank">DePC Suite</a>
            </div>
            <div class="col-12 col-sm-3 text-center text-sm-start">
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