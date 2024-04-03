<?php 
include('config.php');
include('./template/header.php');
include('./template/whatsapp-nube.php');
?>

<main class="contendor__circutor">
    <div class="content__item__circutor">
        <article class="circutor__items">
            <div class="wrapper__circutor">
                <h2 class="title__circutor">
                    Medida y control
                </h2>
                <ul class="item__circutor">
                    <li class="list__circutor"><a class="link-red " href="">Analizadores de redes fijos</a></li>
                    <li class="list__circutor"><a class="link-transformador" href="">Transformadores de corriente y shunts</a></li>
                    <li class="list__circutor"><a class="link-automatizacion" href="">Automatización y control </a></li>
                    <li class="list__circutor"><a class="link-analizador" href="">Analizadores de redes portátiles</a></li>
                </ul>
            </div>
        </article>
    </div>

</main>


<template id="template">
    <section id="card__product" class="productos__circutor">
        <a class="btn__product" href=""><img class="img__circutor" src="" alt=""></a>
        <p class="title"></p>
    </section>
</template>

<script src="./js/producto.js"></script>

<?php include './template/footer.php' ?>
