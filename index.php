<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <!-- <script type="text/javascript" src="instascan.min.js"></script> -->

    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">




</head>

<body>
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>

    <div class="content">
        <div class="container-fluid">
            <!-- ===================== 
              AGREGAR FILAS Y COLUMNAS PARA EL DESARROLLO 
            ========================= -->
            <div class="row ">
                <div class="col-12">
                    <div>
                        <ul id="seleccionarCamara">
                        </ul>
                    </div>
                    <div class="contenedor-video">
                        <video id="preview"></video>
                    </div>
                    <!-- step="any" minlength="8" maxlength="23" -->
                </div>
            </div><!-- row -->
        </div>

        <button class="btn btn-success btn-sm" id="abrirCamara">abrir camara</button>
        <button class="btn btn-danger btn-sm" id="cerrarCamara">Cerrar camara</button>


        <audio id="sonido" src="Beep_Short_02_Sound_Effect_Mp3_103.mp3">
        </audio>





</body>

<script src="app.js"></script>

</html>