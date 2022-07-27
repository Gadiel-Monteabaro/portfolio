<?php
$pg = "contacto";

if ($_POST) {

    $nombre = $_POST["txtNombre"];
    $correo = $_POST["txtCorreo"];
    $telefono = $_POST["txtTelefono"];
    $mensaje = $_POST["txtMensaje"];

    if ($nombre != '' && $correo != '' && $telefono != '' && $mensaje != '') {

        // Varios destinatarios
        $para = "silvamonteabaro○96@gmail.com";
        $titulo = 'Recibiste un mensaje desde tu Web';

        // mensaje
        $cuerpo = "
    Nombre: $nombre <br>
    Correo: $correo <br>
    Telefono: $telefono <br>
    Mensaje: $mensaje
    ";

        // Para enviar un correo HTML, debe establecerse la cabecera Content-type
        $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
        $cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

        // Cabeceras adicionales
        $cabeceras .= 'To: silvamonteabaro○96@gmail.com' . "\r\n";
        $cabeceras .= 'From: contacto@silvagadiel.com.ar' . "\r\n";

        // Enviarlo
        //mail($para, $titulo, $cuerpo, $cabeceras);
        header("Location: confirmacion-envio.php");
    }
}

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
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-12">
                <p>Te invito a que te contactes enviándome un mensaje o bien por whatsapp.</p>
            </div>

            <!--Formulario-->
            <div class="col-sm-6 col-12">
                <form action="" method="POST">
                    <div class="pb-3">
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control shadow" required>
                    </div>
                    <div class="pb-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo" class="form-control shadow" required>
                    </div>
                    <div class="pb-3">
                        <input type="number" name="txtTelefono" id="txtTelefono" placeholder="Telefono/Whatsapp" class="form-control shadow" required>
                    </div>
                    <div class="pb-3">
                        <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe aqui tu mensaje" class="form-control shadow" required></textarea>
                    </div>
                    <div class="me-auto text-right">
                        <button type="summit" mame="Enviar" class="btn px-4">ENVIAR</button>
                    </div>
                </form>
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