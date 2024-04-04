
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--fuente de letra Open Sans-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <!--icon web-->
  <link rel="icon" type="image/ico" href="<?php echo BASE_URL;?>icon/icono.ico">
  <title>Labmec Metrologia XXI</title>
  <!--Fuente de iconos de booststrap-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!--Estilos css -->
  <link rel="stylesheet" href="<?php echo BASE_URL;?>style/header.css">
  <link rel="stylesheet" href="<?php echo BASE_URL;?>style/servicios.css">
  <link rel="stylesheet" href="<?php echo BASE_URL;?>style/nosotros.css">
  <link rel="stylesheet" href="<?php echo BASE_URL;?>style/mantenimiento.css">
  <link rel="stylesheet" href="<?php echo BASE_URL;?>style/alquiler.css">
  <!-- <link rel="stylesheet" href="<?php echo BASE_URL;?>style/circutor/producto__circutor.css"> -->
  <link rel="stylesheet" href="<?php echo BASE_URL;?>style/footer.css">
  <link rel="stylesheet" href="<?php echo BASE_URL;?>style/contact.css">
  <!-- <link rel="stylesheet" href="<?php echo BASE_URL;?>style/circutor/redes.css"> -->
  <link rel="stylesheet" href="<?php echo BASE_URL;?>style/whatsapp.css">
  <!-- <link rel="stylesheet" href="<?php echo BASE_URL;?>style/circutor/analizadores-redes.css"> -->
  <link rel="stylesheet" href="<?php echo BASE_URL;?>style/circutor/medida-y-control.css">
  <link rel="stylesheet" href="<?php echo BASE_URL;?>style/producto.css">
  <link rel="stylesheet" href="<?php echo BASE_URL;?>style/index.css">
</head>

<body>

  <header>
    <a href="<?php echo BASE_URL;?>index.php"><img class="logo-menu" src="<?php echo BASE_URL;?>img/logo.png" alt="logo-Labmec"></a>
    <button id="abrir" class="btn-hambuguer"><i class="bi bi-list"></i></button>
    <nav id="item-list" class="nav-container">
      <button id="cerrar" class="btn-cerrar"><i class="bi bi-x-lg"></i></button>
      <ul class="nav-items">
        <li class="nav-lists"><a class="active" href="<?php echo BASE_URL;?>index.php">Inicio</a></li>
        <li class="nav-lists"><a class="list--producto">Productos <img class="arrow_open" src="<?php echo BASE_URL;?>icon/arrow_open.svg" alt="arrow open"></a>


          <ul class="sub_nav__item--producto">
            <li class="list__sub--producto "><a class="sub__title--producto" href="#">circutor <img class="arrow_open" src="<?php echo BASE_URL;?>icon/right-arrow.svg" alt="arrow open"></a>
              <ul class="sub_nav__item--circutor">
                <li><a href="<?php echo BASE_URL;?>producto-circutor-medida-y-control.php">Medida y control</a></li>
                <li><a href="">Protección y control</a></li>
                <li><a href="">Compensación reactiva</a></li>
              </ul>
            </li>

            <li class="list__sub--producto"><a class="sub__title--producto" href="#">kyoritsu</a></li>
            <li class="list__sub--producto"><a class="sub__title--producto" href="#">sonel</a></li>
            <li class="list__sub--producto"><a class="sub__title--producto" href="#">victor</a></li>
          </ul>
        </li>
        <li class="nav-lists"><a href="<?php echo BASE_URL;?>servicios.php">Servicios</a></li>
        <li class="nav-lists"><a href="<?php echo BASE_URL;?>nosotros.php">Nosotros</a></li>
        <li class="nav-lists"><a href="<?php echo BASE_URL;?>contacto.php">Contacto</a></li>
      </ul>
    </nav>
  </header>
  
<script>BASE_URL = "<?php echo BASE_URL;?>"
</script>
  <script src="<?php echo BASE_URL;?>js/header.js"></script>