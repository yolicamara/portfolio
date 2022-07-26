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
    <link rel="stylesheet" href="css/fontawesome/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/fontawesome-free-6.1.1-web/css/brands.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="images/yoli.png" />
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="inicio" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once "menu.php"; ?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 mx-auto text-center cohete">
                <a href="proyectos.html"><img src="images/cohete.svg" alt="cohete"></a>
            </div>
            <div class="col-12 col-sm-6  offset-sm-3 text-center">
                <div class="my-3 mx-10">
                    <p class="sistemas">Bienvenid@ a mi sitio web sobre desarrollo en sistemas.</p>
                </div>
            </div>
            <div class="col-12 text-center pt-3 pb-5 p-3">
                <a href="proyectos.html" class="btn shadow">Conoce mis proyectos</a>
            </div>
        </div>
    </main>
    <footer class="container mt-4 mb-3">
        <div class="btn-whatsapp">
            <i class="fa-brands fa-whatsapp"></i>
        </div>
        <div class="row">
            <div class="col-12 col-sm-3 text-center text sm-start">
                <a href="" target=" _blank" title="Github"><i class="fa-brands fa-github"></i></a>
                <a href="" target="_blank" title="Linkedin"><i class="fa-brands fa-linkedin"></i></a>
            </div>
            <div class="col-12 col-sm-3 text-center text pt-2 p-sm-0 sp">
                Sponsor <a href="https://depcsuite.com" class="uu">DePc Suite</a>
            </div>
            <div class="col-12 col-sm-3 text-center text pt-2 p-sm-0">
                <a href="mailto:info@yolicamara2@hotmail.com" class="uu">info@yolicamara2@hotmail.com</a>
            </div>
        </div>
    </footer>
</body>

</html>