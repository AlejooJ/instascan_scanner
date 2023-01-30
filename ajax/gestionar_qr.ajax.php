<?php
if (isset($_REQUEST['gestionarQR']) && $_REQUEST['gestionarQR'] == 'ok') {
    $codigo = $_REQUEST['codigo'];
    var_dump($codigo);
};