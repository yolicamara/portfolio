<?php
$pg = "contacto";


$nombre = $_POST["txtNombre"];
$correo = $_POST["txtCorreo"];
$telefono = $_POST["txtCorreo"];
$mensaje = $_POST["txtMensaje"];

//varios destinatarios
$para = "yolicamara2@hotmail.com";
$titulo = 'Recibiste un mensaje desde tu web';

//mensaje
$cuerpo = "
Nombre: $nombre <br>
Correo: $correo <br>
Telefono: $telefono <br>
Mensaje: $mensaje
";

//para enviar un correo HTML,debeestablecerse la cabecera content-type
$cabeceras = 'MIME-Version 1.0'. "\r\n";
$cabeceras .='Content-type: text/html; charset=UTF-8' . "\r\n";


//cabeceras adicionales
$cabeceras .= 'To: yolicamara2@hotmail.com' . "\r\n";
$cabeceras .= 'From: contacto@yolandacamara.com.ar' ."\r\n";


//enviarlo
//mail($paraa $titulo $cuerpo, $cabeceras);
header("Location:confirmacion-envio.php");

?>
<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/fontawesome-free-6.1.1-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="images/yoli.png" />
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="contacto" class="d-flex flex-column h-100">

    <header class="container">
     <?php include_once "menu.php";?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-5">
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row">

            <div class="col-12 col-sm-6">
                <p>Te invito a que te contactes enviándome un mensaje o bien por whatsapp.</p>
            </div>

            <div class="col-12 col-sm-6">
                <form action="" method="POST">
                    <div class="pb-3">
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre"
                            class="form-control shadow">

                    </div>
                    <div class="pb-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo"
                            class="form-control shadow">

                    </div>
                    <div class="pb-3">
                        <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Teléfono/whatsapp"
                            class="form-control shadow">

                    </div>
                    <div class="pb-3">
                        <textarea name="txtMensaje" id="txtMensaje" class="form-control shadow"
                            placeholder="Escribe aqui tu Mensaje"></textarea>
                    </div>
                    <div>
                        <button type="submit" id="btnEnviar" name="btnEnviar" class="btn px-4">ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer class="container mt-auto pb-4">
        <div class="btn-whatsapp">
            <i class="fa-brands fa-whatsapp"></i>
        </div>

        <div class="row">
            <div class="col-3">
                <a href="" target="_blank" title="Github"></a><i class="fa-brands fa-github"></i>
                <a href="" target="_blank" title="Linkedin"><i class="fa-brands fa-linkedin"></i></a>

            </div>
            <div class="col-3 sp">
                Sponsor <a href="https://depcsuite.com" class="uu">DePC Suite</a>
            </div>
            <div class="col-3">
                <a href="mailto:info@yolicamara2@hotmail.com" class="uu">info@yolicamara2@hotmail.com</a>
            </div>

        </div>

    </footer>

</body>

</html>