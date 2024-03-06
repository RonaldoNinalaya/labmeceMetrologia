<?php
if ($_SERVER["REQUEST_METOHD"] == 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $phone = $_POST['telefono'];
    $mensaje = $_POST['msj'];


    $destinatario = 'oscarbujaico@gmail.com';
    $asunto = 'Solicitud de contacto desde Labmec Metrologia';

    //creamos el mensaje

    $miMensaje = 'De:' . $nombre . 'El mensaje' . $mensaje . '\n';
    $miMensaje .= 'Mi telefono: ' . $phone;


    mail($destinatario, $asunto, $miMensaje);

    header('location: ' . $_SERVER['PHP_SELF']);

    exit;
}
