<?php 
include("../config.php");
include('../template/header.php');
include('../template/whatsapp-nube.php'); 
?>




<main class="container__media_control">
    <h2 class="title--media-control">Gestor energético</h2>
    <div id="producto--energetico" class="wrapper__medida-control">
    </div>

</main>


<script src="<?php echo BASE_URL;?>js/circutor/Automatizacion-y-control/gestor-energetico.js" type="module"></script>



<?php include('../template/footer.php') ?>