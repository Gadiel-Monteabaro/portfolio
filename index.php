<?php
$pg = "inicio";
?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Inicio</title>

    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="shortcut icon" href="./images/Imagenes/favicon.ico" type="image/x-icon">

</head>

<body id="inicio" class="d-flex flex-column h-100">

    <!--Barra de Navegacion-->
    <header>
        <?php include_once("menu.php"); ?>
    </header>

    <!--Contenido principal-->
    <main class="container">
        <div class="row">
            <div class="col-12 mt-4 text-center div-cohete">
                <a href="./proyectos.php">
                    <img src="./images/Imagenes/cohete.svg" alt="cohete" class="cohete">
                </a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-sm-6 my-4 mt-sm-5 text-center mb-3">
                <div class="input-home">
                    <p class="p-1">Bienvenid@ a mi sitio web.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <a href="./proyectos.php" class="btn shadow">Conoce mis proyectos</a>
            </div>
        </div>
    </main>

    <!--Contenido Footer-->
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