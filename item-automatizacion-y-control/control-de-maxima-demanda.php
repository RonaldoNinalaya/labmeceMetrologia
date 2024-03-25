<?php 
include("../config.php");
include('../template/header.php');
include('../template/whatsapp-nube.php'); 
?>


<main class="container__media_control">
    <h2 class="title--media-control">Centralizador de maxima demanda</h2>
    <div id="producto--energetico" class="wrapper__medida-control">
    </div>

</main>


<script src="<?php echo BASE_URL;?>js/circutor/Automatizacion-y-control/control-demanda.js" type="module"></script>



<?php include('../template/footer.php') ?>