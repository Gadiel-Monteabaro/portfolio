<?php
$pg = "sobre-mi";
?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sobre Mi</title>

    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="shortcut icon" href="./images/Imagenes/favicon.ico" type="image/x-icon">

</head>

<body id="sobremi" class="d-flex flex-column h-100">

    <!--Barra de Navegacion-->
    <header>
        <?php include_once("menu.php"); ?>
    </header>

    <!--contenido main-->
    <main>
        <div class="container">
            <div class="row pb-sm-4">
                <!--columna de texto-->
                <div class="col-sm-5 col-12 mt-4">
                    <h1 class="mt-sm-4 mb-4 pb-sm-4">Gadiel Silva Monteabaro</h1>
                    <p class="pb-sm-5 mb-4 ">Soy estudiante de
                        Ingenieria
                        Industrial y de Desarrollo Web FullStack en DePc.
                    </p>
                    <a href="./contacto.php" class="btn btn-rojo ">Enviar Mensaje</a>
                </div>
                <!--Columna de la img-->
                <div class="col-sm-3 col-12 mt-4 offset-2  offset-md-auto img-container">
                    <!--offset, me permite mover un elemento dentro de un contenedor-->
                    <img src="./images/Imagenes/perfil.jpg" alt="imagen de perfil" class="img-fluid perfil-img mt-3">
                </div>
            </div>
        </div>

        <section id="tecnologias" class="color-gradiente pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="my-sm-5 my-5 text-white">Stack tecnológico</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 col-6 text-center ">
                        <div class="estilo px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>Javascript</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="https://img.stackshare.io/service/1209/javascript.jpeg">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="estilo px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>PHP</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="https://img.stackshare.io/service/991/hwUcGZ41_400x400.jpg">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="estilo px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>HTML5</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="https://img.stackshare.io/service/2538/kEpgHiC9.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="estilo px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>React.js</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="https://img.stackshare.io/service/1020/OYIaJ1KK.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="estilo px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>jQuery</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="https://img.stackshare.io/service/1021/lxEKmMnB_400x400.jpg">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="estilo px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>Bootstrap</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="https://img.stackshare.io/service/1101/C9QJ7V3X.png">
                        </div>
                    </div>
                </div>
                <div class="row mt-sm-4 mt-0">
                    <div class="col-sm-2 col-6 text-center">
                        <div class="estilo px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>Laravel</h3>
                            <img class="img-fluid d-block mx-auto" width="90" src="https://depcsuite.com/wp-content/uploads/2019/08/220px-Laravel.svg_.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="estilo px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>MySQL</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="https://img.stackshare.io/service/1615/mariadb-logo-400x400.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="estilo px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>CSS</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="https://img.stackshare.io/service/6727/css.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="estilo px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>Git</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="https://img.stackshare.io/service/1046/git.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="estilo px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>Apache</h3>
                            <img class="img-fluid d-block mx-auto" width="110" src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/db/Apache_Software_Foundation_Logo_%282016%29.svg/1200px-Apache_Software_Foundation_Logo_%282016%29.svg.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="estilo px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>Mercadopago</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="https://img.stackshare.io/service/12698/gUjuxmmd_400x400.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="experiencia" class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="py-5">
                        <i class="fa-solid fa-briefcase"></i>
                        Experiencia laboral
                    </h2>
                </div>
            </div>
            <div class="row shadow">
                <div class="col-12">
                    <div class="row colum mb-2">
                        <div class="col-2 d-none d-sm-block">
                            <img src="./images/Imagenes/seguridad.jpg" alt="casco de seguridad" title="Security guard" class="img-fluid">
                        </div>
                        <div class="col-sm-10 col-12 p-3">
                            <h3>Security Guard</h3>
                            <h4>WASP</h4>
                            <h5>jun 2015 - agos 2016</h5>
                            <p>Seguridad de Eventos - Custodios Personales - Investigaciones. Custodios Personales.
                                Seguridad
                                Para Eventos. Investigaciones</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row colum mb-2">
                        <div class="col-2 d-none d-sm-block">
                            <img src="./images/Imagenes/jmudanza.png" alt="Camion de mudanza" title="Mudanza" class="img-fluid">
                        </div>
                        <div class="col-sm-10 col-12">
                            <h3>Mudanzas</h3>
                            <h4>Carelli</h4>
                            <h5>sep 2018 - 2022 ...</h5>
                            <p>Manualmente, empacar, recoger, mover, cargar y descargar camiones, y entrega de muebles,
                                artículos de arte y otros artículos para el hogar y muebles / equipos de oficina de
                                acuerdo con las normas y procedimientos establecidos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row colum mb-2">
                        <div class="col-2 d-none d-sm-block">
                            <img src="./images/Imagenes/logistica.png" alt="logistica" title="logistica" class="img-fluid">
                        </div>
                        <div class="col-sm-10 col-12">
                            <h3>Logistica</h3>
                            <h4>USO-logistica</h4>
                            <h5>ene 2017 - jun 2017</h5>
                            <p>Transporte de distribucion, producción, almacenaje, transporte, distribución y venta.
                                Instalacion de cajeros automaticos.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="formacion" class="container my-5">
            <div class="row">
                <div class="col-12 py-5">
                    <h2>
                        <i class="fa-solid fa-building-columns"></i>
                        Formación acádémica
                    </h2>
                </div>
            </div>
            <div class="row shadow">
                <div class="col-sm-6 col-12 mb-2 colum">
                    <div class="row">
                        <div class="col-2 my-auto py-3 d-none d-sm-block">
                            <img src="./images/Imagenes/Plataforma5.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="col-sm-10 col-12 p-3">
                            <h3>Curso Introductorio</h3>
                            <h4>Plataforma 5</h4>
                            <h5>2022</h5>
                            <p>HTML, CSS, Javascript</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-12 mb-2 colum">
                    <div class="row">
                        <div class="col-2 my-auto py-3 d-none d-sm-block">
                            <img src="./images/Imagenes/seguridad.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="col-sm-10 col-12 p-3">
                            <h3>Capacitacion de ordenamiento publico</h3>
                            <h4>Security guard</h4>
                            <h5>2015</h5>
                            <p>Atencion al publico, control de tareas y area de trabajo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="cursos" class="container">
            <div class="row">
                <div class="col-12 py-5">
                    <h2>
                        <i class="fa-solid fa-building-columns"></i>
                        Cursos de desarrollo profesional
                    </h2>
                </div>
            </div>
            <div class="row shadow">
                <div class="col-sm-6 col-12 mb-2 colum">
                    <div class="row">
                        <div class="col-2 my-auto py-3 d-none d-sm-block">
                            <img src="./images/Imagenes/sin-logo.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-sm-10 col-12 p-3">
                            <h3>Web developer</h3>
                            <h4>DePc</h4>
                            <h5>2022...</h5>
                            <p>Desarrollo web fullstack (en curso)</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-12 mb-2 colum">
                    <div class="row">
                        <div class="col-2 my-auto py-3 d-none d-sm-block">
                            <img src="./images/Imagenes/sin-logo.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-sm-10 col-12 p-3">
                            <h3>Web developer</h3>
                            <h4>DePc</h4>
                            <h5>2022...</h5>
                            <p>Desarrollo web fullstack (en curso)</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-12 mb-2 colum">
                    <div class="row">
                        <div class="col-2 my-auto py-3 d-none d-sm-block">
                            <img src="./images/Imagenes/sin-logo.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-sm-10 col-12 p-3">
                            <h3>Web developer</h3>
                            <h4>DePc</h4>
                            <h5>2022...</h5>
                            <p>Desarrollo web fullstack (en curso)</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="idiomas">
            <div class="container my-5">
                <div class="row py-5">
                    <div class="col-12 col-sm-6  pb-3 pb-sm-0">
                        <div class="row mr-sm-1 bg-white tarjeta shadow me-sm-1">
                            <div class="col-4 text-center card estilo">
                                <i class="fas fa-comment-alt"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h2>IDIOMAS</h2>
                                <ul>
                                    <li>ESPAÑOL - Nativo</li>
                                    <li>INGLÉS - Intermediate B2</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 ">
                        <div class="row ml-sm-2 bg-white tarjeta ms-sm-1">
                            <div class="col-4 text-center card estilo">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h2>HOBBIES</h2>
                                <ul>
                                    <li>Videos Juegos</li>
                                    <li>Paddel</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!--contenido footer-->
    <footer class="container mt-5 pb-3">
        <div class="row">
            <div class="col-sm-3 col-12 text-center text-sm-start">
                <a href="" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                <a href="" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-sm-3 col-12 text-center text-sm-start">
                Sponsor <a href="">DePC Suite</a>
            </div>
            <div class="col-sm-3 col-12 text-center text-sm-start">
                <a href="">silvagadiel96@gmail.com</a>
            </div>
        </div>
        <div class="btn-whatsapp">
            <a href="https://api.whatsapp.com/send?phone=541162423341" title="whatsapp">
                <i class="fa-brands fa-whatsapp"></i>
            </a>
        </div>
    </footer>

</body>

</html>