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
</head>

<body>

    <div class="content">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-12">
                    <div>
                        <ul id="seleccionarCamara">
                        </ul>
                    </div>
                    <div class="contenedor-video">
                        <video id="preview"></video>
                    </div>

                </div>
            </div>
        </div>

        <button class="btn btn-success btn-sm" id="abrirCamara">abrir camara</button>
        <button class="btn btn-danger btn-sm" id="cerrarCamara">Cerrar camara</button>

        <!-- AUDIO SIMULACIÓN SCANNER -->
        <audio id="sonido" src="audio/Beep_Short_02_Sound_Effect_Mp3_103.mp3">
        </audio>

</body>

<script src="app.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>


</html>