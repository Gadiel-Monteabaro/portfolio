<?php
$pg = "contacto";
?>

<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contacto</title>

    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="shortcut icon" href="./images/Imagenes/favicon.ico" type="image/x-icon">
</head>

<body id="contacto" class="d-flex flex-column h-100">
    <!--Barra de Navegacion-->
    <header>
        <?php include_once("menu.php"); ?>
    </header>

    <!--Contenido principal area Contacto-->
    <main class="container">
        <div class="row">
            <div class="col-12 mt-3 mb-5">
                <h1>Gracias por contactarte,</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-12">
                <p>Te estare respondiendo a la brevedad.</p>
            </div>
        </div>
    </main>

    <!--Contenido Footer-->
    <footer class="container mt-auto pb-4">
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
</body>

</html>