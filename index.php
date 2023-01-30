<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scanner</title>

    <!-- INSTASCAN JS -->
    <script src="plugins/instascan.js/instascan.min.js"></script>

    <!-- JQUERY -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <script src="plugins/bootstrap/js/bootstrap.bundle.js"></script>

    <!-- ESTILOS CSS -->
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>

    <div class="container">
        <div class="container-fluid">
            <div class="row text-center">
                <h3>INSTASCAN SCANNER QR </h3>

            </div>
            <div class="row">
                <ul id="seleccionarCamara">
                </ul>
            </div>

        </div>
    </div>
    <div class="row div-center">
        <div class="col-12">
            <div class="contenedor-video">
                <video id="preview"></video>
            </div>

        </div>
    </div>
    <div class="container ">
        <div class="row div-center">
            <div class="col-12">
                <button class="btn btn-success btn-sm" id="abrirCamara">Ver cámaras</button>
                <button class="btn btn-danger btn-sm d-none" id="cerrarCamara">Cerrar cámaras</button>
            </div>
        </div>
    </div>

    <!-- AUDIO SIMULACIÓN SCANNER -->
    <audio id="sonido" src="audio/Beep_Short_02_Sound_Effect_Mp3_103.mp3">
    </audio>
</body>

<script src="js/app.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>

</html>