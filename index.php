
<head>
    <title>Expotecnia2024</title>
    <meta charset="UTF-8">
</head>

<?php 
require_once "security.php";
require "vendor/autoload.php";
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv -> load();
require "includes/conexion.php";
require "template/header.php";
?>

<body>
    <main class="container">
        <!--CAROUSEL-->
        <div class="row" style="height: 500px;">
            <div class="col">
                <div id="sesion" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/2.svg" class="w-100" style="object-fit: cover; height:100%">
                        </div>
                        <div class="carousel-item">
                            <img src="img/Expotecnia.jfif" class="w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="img/itdb LOGIN.webp" class="w-100">
                        </div>
                    </div>

                    <!--CONTROLES DE IMAGENES -->
                    <button class="carousel-control-next"
                        type="button"
                        data-bs-target="#sesion"
                        data-bs-slide="next"
                    >
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Siguiente</span>
                    </button>

                    <button class="carousel-control-prev"
                        type="button"
                        data-bs-target="#sesion"
                        data-bs-slide="prev"
                    >
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>

                    <!--INDICADORES -->
                    <div class="carousel-indicators">
                        <button
                            type="button"
                            data-bs-target="#sesion"
                            data-bs-slide-to="0"
                            class="active"
                            aria-current="slide #1"
                        >
                        </button>

                        <button
                            type="button"
                            data-bs-target="#sesion"
                            data-bs-slide-to="1"
                            class="active"
                            aria-current="slide #2"
                        >
                        </button>

                        <button
                            type="button"
                            data-bs-target="#sesion"
                            data-bs-slide-to="2"
                            class="active"
                            aria-current="slide #3"
                        >
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!--SUBTITULO 1-->
        <div class="row py-5">
            <div class="col">
                <div class="border-bottom">
                    <h1 class="text-center">Nuestro Proyecto</h1>
                </div>
            </div>
        </div>

        <!--CARTAS-->

        <!--CARTA 1-->
        <div class="row">
            <div class = "col- col-sm- col-lg-4">
                <div class = "card">
                    <img class="card-img-top" src="img/5.jpeg" width="400" height="400" alt="">
                    <div class="card-body">
                        <h3 class="card-little">¿Qué es la ExpoTecnia?</h3>
                    <h5><p class="text-justify" class="card-text">
                        Es el espacio que plasma el ingenio, la tecnología y la creatividad desde preescolar hasta bachillerato.
                        Este evento se caracteriza por la exposición de los diferentes trabajos y proyectos que realizan los niños 
                        y jóvenes en artes manuales, montajes interactivos de diferentes ramas científico-técnologicas: 
                        diseño gráfico, metal,  mecánica, automotriz, informática, electricidad, electrónica y otras.
                    </p></h5>
                        <a target="_blank" href="https://institutotecnicodonbosco.edu.pa/actividades#expotecnia" class="btn btn-sm btn-primary">Más información</a>
                    </div>
                </div>
            </div>

        <!--CARTA 2-->
            <div class = "col- col-sm- col-lg-4">
                <div class = "card">
                    <img class="card-img-top" src="img/6.jpeg" width="400" height="400" alt="">
                    <div class="card-body">
                        <h3 class="card-little">¿Cuál es su proposito?</h3>
                        <h5><p class="text-justify" class="card-text">Tiene como propósito brindar un espacio dirigido a potenciar el desarrollo de competencias: técnicas, genéricas, lingüísticas 
                        para el desarrollo de maestros y alumnos. Este evento se caracteriza por la exposición de los diferentes trabajos y proyectos que realizan los niños y 
                        jóvenes en artes manuales, montajes interactivos de diferentes ramas científico-técnologicas: diseño gráfico, 
                        metal,  mecánica, automotriz, informática, electricidad, electrónica y otras.</p></5>
                        <a target="_blank" href="https://institutotecnicodonbosco.edu.pa/actividades#expotecnia" class="btn btn-sm btn-primary">Más información</a>
                    </div>
                </div>
            </div>
            
        <!--CARTA 3-->
            <div class = "col- col-sm- col-lg-4">
                <div class = "card">
                    <img class="card-img-top" src="img/7.jpeg" alt="">
                    <div class="card-body">
                        <h3 class="card-little">Proyecto hecho por:</h3>
                        <p class="card-text"> 
                            <h5><ul>
                                <li>María Sánchez</li>
                                <li>Andrés Bustamante</li>
                                <li>Gabriel Parra</li>
                                <li>Arturo Pitti</li>
                            </h5></ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
   
        <!--SUBTITULO 2-->
        <div class="row py-5">
                <div class="col">
                    <div class="border-bottom">
                        <h1 class="text-center">Ficha Técnica</h1>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <!--¿CUAL ES NUESTRO OBJETVO? -->
    <!--IMAGEN 1-->
    <!--TEXTO 1-->

    <div id="objetivo" class="container mt-4">
        <div class="row">
            <div class="col- col-sm- col-lg-6">
                <figure class="figure">
                    <img src="img/8.jpeg" width="600" height="600" class="figure-img img-fluid rounded mb-3" alt="">
                    <figcaption class="figure-caption text-end"></figcaption>
                </figure>
            </div>

            <div class="col- col-sm- col-lg-6">
                <div class="card border-0 p-0 mb-3" stylesheet="width: 300px;">
                    <div class="card-body">
                        <h3 class="card-">¿Cuál es nuestro objetivo?</h3>
                        <h5><p class="text-justify" class="card-text">
                        Crear un inventario digital el cual se encargue de la administración de 
                        los dispositivos electrónicos que se usan dentro de Bosco Lab.
                        De esta manera saber si se está utilizando en ese momento, quien lo esta
                        utilizando y a la hora que se activa y se desactiva el aparato.
                        </h5></p>
                    </div>
                </div>
            </div>
        </div>    
    </div>

    <!--PLANTEAMIENTO DEL PROBLEMA -->
    <!--TEXTO 2-->
    <!--IMAGEN 2-->

    <div id="problema" class="container mt-4">
        <div class="row">
            <div class="col- col-sm- col-lg-6">
                <div class="card border-0 p-0 mb-3" stylesheet="width: 300px;">
                    <div class="card-body">
                        <h3 class="card-">Planteamiento del Problema</h3>
                        <h5><p class="text-justify" class="card-text">
                            Cada vez que se da uso de los dispositivos electrónicos, tales como las laptops
                            las tabletas y las computadoras, los profesoras anexan de forma manual todos
                            todos los aparatos que se utilizan en ese momento (El IP del aparato, que vend-
                            ría siendo el número único de identificación de cada aparato, también otros pun-
                            tos importantes tales como, ¿Quién lo está utilizando?, ¿Cuándo se está utiliz-
                            ando y cuando no?). Estos son puntos importantes, ya que permite saber toda
                            la información de ese dispositivo, en caso tal de que desaparezca tenemos un 
                            forma clara y viable de localizarlo, como saber la persona que lo estaba manip-
                            ulando, cuando dejó de usar el dispositivo y donde lo guardo.
                        </h5></p>
                    </div>
                </div>
            </div>
       
            <div class="col- col-sm- col-lg-6">
                <figure class="figure">
                    <img src="img/9.jpeg" class="figure-img img-fluid rounded mb-3" alt="">
                    <figcaption class="figure-caption text-end"></figcaption>
                </figure>
            </div>
        </div>
    </div>

    <!--¿PORQUE SE HACE ESTE PROYECTO?-->
    <!--IMAGEN 3-->
    <!--TEXTO 3-->

    <div id="proyecto" class="container mt-4">
        <div class="row">
            <div class="col- col-sm- col-lg-6">
                <figure class="figure">
                    <img src="img/10.jpeg" class="figure-img img-fluid rounded mb-3" alt="">
                    <figcaption class="figure-caption text-end"></figcaption>
                </figure>
            </div>
            
            <div class="col- col-sm- col-lg-6">
                <div class="card border-0 p-0 mb-3" stylesheet="width: 300px;">
                    <div class="card-body">
                        <h3 class="card-">¿Por qué se hace este proyecto?</h3>
                        <h5><p class="text-justify" class="card-text">
                            El proyecto se hace con la visión de ayudar al taller Bosco Lab con un método
                            confiable para la administración de los aparatos que se utilizan dentro de 
                            estasinstalaciones, ya que es de vital importancia prescindir de una base de datos
                            para poder almacenar información de los aparatos que se utilizan en esta área.
                            Pueden ser computadoras, laptops, tablets, etc. Y así poder tener una mejor
                            organización de los dispositivos que se utilizan dentro de este taller. Un ejemplo
                            de la esquematización de este proyecto es el MEREB que como bien sabe este
                            necesita de una base de datos para guardar toda la información que se ingresa
                            cómo calificaciones, asignaciones y mensajes de los profesores o directores.
                        </h5></p>
                    </div>
                </div>
            </div>
        </div>    
    </div>

    <!--PIE DE PAGINA-->
    <footer class="bg-dark">
        <div class="border-top container">
            <div class="col-auto px-5 py-4">
                <h4 class="lead py-3">Digital System DataBase.com</h4>
                <a class="telefono"class="px-3" target="_blank" href="https://institutotecnicodonbosco.edu.pa/formulario-contacto" class="btn btn-link">Telefono</a>
                <a class="correo" class="px-3" target="_blank"href="https://institutotecnicodonbosco.edu.pa/formulario-contacto" class="btn btn-link">Correo</a>
            </div>
        </div>
    </footer>
</body>