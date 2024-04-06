<?php 

include('template/header.php');
include('template/whatsapp-nube.php');
?>

<main class="contendor__circutor">
    <div class="content__item__circutor">
        <article class="circutor__items">
            <div class="wrapper__circutor">
                <h2 class="title__circutor">
                    Medida y control
                </h2>
                <ul class="item__circutor">
                    <li class="list__circutor"><a class="link-red" href="<?php echo $url_base;?>analizadores-de-redes-fijos"> Analizadores de redes fijos</a></li>
                    <li class="list__circutor"><a class="link-transformador" href="<?php echo $url_base;?>transformadores-de-corriente-y-shunts">Transformadores de corriente y shunts</a></li>
                    <li class="list__circutor"><a class="link-automatizacion"href="<?php echo $url_base;?>automatizacion-y-control">Automatización y control </a></li>
                    <li class="list__circutor"><a class="link-analizador" href="<?php echo $url_base;?>analizadores-de-redes-portatiles">Analizadores de redes portátiles</a></li>
                </ul>
            </div>
        </article>
    </div>

</main>


<template id="template">
    <section id="card__product" class="productos__circutor">
        <a class="btn__product" href="<?php $url_base;?>/producto-circutor-media-y-control/"><img class="img__circutor" src="" alt=""></a>
        <p class="title"></p>
    </section>
</template>

<script src="js/producto.js"></script>

<?php include './template/footer.php' ?>
