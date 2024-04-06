<?php
// include('config.php');
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header("location: contacto.php");
}




$nombre_contacto = $_POST["nombre"];
$correo_contacto = $_POST["email"];
$telefono_contacto = $_POST["telefono"];
$mensaje_contacto = $_POST["mensaje"];

//Remitente
$para = "oscarbujaio@gmail.com";
$asunto = "Labmec Metrologia XXI";

//MENSAJE PARA EL RECEPTOR
$mensaje = "NOMBRE: " . $nombre_contacto . "\n";
$mensaje .= "CORREO ELECTRONICO: " . $correo_contacto . "\n";
$mensaje .= "TELEFONO: " . $telefono_contacto . "\n";
$mensaje .= "MENSAJE: " . $mensaje_contacto . "\n";

//ENCABEZADO
$cabeceras = 'From: ' . $correo_contacto . "\r\n" .
    'Reply-To:' . $correo_contacto . "\r\n" .
    'X-Mailer: PHP/' . phpversion();


echo var_dump($nombre_contacto);
echo '</br>';
echo var_dump($correo_contacto);
echo '</br>';
echo var_dump($telefono_contacto);
echo '</br>';
echo var_dump($mensaje_contacto);
echo '</br>';
echo var_dump($mensaje);

echo '</br>';

$email = @mail($para, $asunto, $mensaje, $cabeceras);


header('location:contacto.php');


// exit();
