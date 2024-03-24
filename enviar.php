<?php
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $phone = $_POST['telefono'];
    $mensaje = $_POST['msj'];


    $destinatario = 'oscarbujaico@gmail.com';
    $asunto = 'Solicitud de contacto desde Labmec Metrologia';

    //creamos el mensaje

    $miMensaje = 'De: ' . $nombre . "\n";
    $miMensaje .= 'Correo: ' . $email . "\n";
    $miMensaje .= 'Mi teléfono: ' . $phone . "\n\n";
    $miMensaje .= 'Mensaje: ' . $mensaje;

    //envio el correo

    $headers = 'From: ' . $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    mail($destinatario, $asunto, $miMensaje, $headers);

    header('location: ' . $_SERVER['PHP_SELF']);
    exit;
    
}

?>