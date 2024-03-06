<?php include('./template/header.php') ?>

<div class="portada__servicio">
    <h2>Nuestros Servicios</h2>
</div>
<section id="calibracion" class="content__servicios">
    <article class="container__verification">
        <h3 class="servicio__title">
            calibracion de verificación
        </h3>
        <div class="verification__calibracion">
            <div class="calibracion electricidad">
                <img class="calibracion__img" src="./img/img-servicios/electricidad.png" alt="calibracion electricidad">
                <button id="btn__electricidad" class="cta__calibracion">electricidad</button>
            </div>
            <div class="calibracion temperatura">
                <img class="calibracion__img" src="./img/img-servicios/temperatura.png" alt="calibracion electricidad">
                <button id="btn__temperatura" class="cta__calibracion">temperatura</button>
            </div>

            <div class="calibracion longitud">
                <img class="calibracion__img" src="./img/img-servicios/longitud.png" alt="calibracion electricidad">
                <button id="btn__longitud" class="cta__calibracion">longitud</button>
            </div>

            <div class="calibracion masa">
                <img class="calibracion__img" src="./img/img-servicios/masa.png" alt="calibracion electricidad">
                <button id="btn__masa" class="cta__calibracion">masa</button>
            </div>

            <div class="calibracion fuerza">
                <img class="calibracion__img" src="./img/img-servicios/fuerza.png" alt="calibracion electricidad">
                <button id="btn__fuerza" class="cta__calibracion">fuerza</button>
            </div>

            <div class="calibracion otrasMagnitudes">
                <img class="calibracion__img" src="./img/img-servicios/otrasMagnitudes.png" alt="calibracion electricidad">
                <button id="btn__otrasMagnitudes" class="cta__calibracion">Otras Magnitudes</button>
            </div>
        </div>
    </article>


    <div id="modal" class="modal">  
        <div class="modal__container">
            <div class="modal__list">
                <h4 class="modal__title">Electricidad</h4>
                <ul class="items">
                    <li class="list__modal">Multímetros</li>
                    <li class="list__modal">Calibrador de procesos</li>
                    <li class="list__modal">Calibradores</li>
                    <li class="list__modal">Registrador de tensión</li>
                    <li class="list__modal">Voltímetro digital</li>
                    <li class="list__modal">Pinza multimétrica</li>
                    <li class="list__modal">Pinza miliamperimétrica</li>
                    <li class="list__modal">Pinza amperimétrica</li>
                    <li class="list__modal">Pinza de corriente de fuga</li>
                    <li class="list__modal">Megóhmetros</li>
                    <li class="list__modal">Ohmímetros digitales</li>
                    <li class="list__modal">Amperímetro digital</li>
                </ul>
            </div>
            <img src="./img/img-calibracion/Electrico.png" alt="calibracion electricidad">
            <a  id="btn__cerrar" class="modal__close">x</a>
        </div>
    </div>

    <div class="modal__temperatura ">  
        <div class="modal__container">
            <div class="modal__list">
                <h4 class="modal__title">Temperatura</h4>
                <ul class="items">
                    <li class="list__modal">Termómetros digitales</li>
                    <li class="list__modal">Termómetros analógicos</li>
                    <li class="list__modal">Cámaras termográficas</li>
                    <li class="list__modal">Incubadoras</li>
                    <li class="list__modal">Cámaras de fermentación</li>
                    <li class="list__modal">Termohigrómetros</li>
                    <li class="list__modal">Termómetros de vidrio</li>
                </ul>
            </div>
            <img src="./img/img-calibracion/temperatura.jpeg" alt="calibracion electricidad">
            <a id="btn__cerrar--temperatura" class="modal__close">x</a>
        </div>
    </div>

    <div class="modal__longitud">  
        <div class="modal__container">
            <div class="modal__list">
                <h4 class="modal__title">Longitud</h4>
                <ul class="items">
                    <li class="list__modal">Pie de rey (Calibradores, vernier)</li>
                    <li class="list__modal">Flexómetros (cintas métricas)</li>
                    <li class="list__modal">Cinta métricas con plomada</li>
                    <li class="list__modal">Medidores de espesor</li>
                    <li class="list__modal">Medidores de soldadura</li>
                    <li class="list__modal">Galgas</li>
                    <li class="list__modal">Micrómetros de interiores y exteriores</li>
                    <li class="list__modal">Distanciómetros</li>
                    <li class="list__modal">Niveles</li>
                </ul>
            </div>
            <img src="./img/img-calibracion/longitud.jpg" alt="calibracion electricidad">
            <a  id="btn__cerrar--longitud" class="modal__close">x</a>
        </div>
    </div>

    <div class="modal__masa">  
        <div class="modal__container">
            <div class="modal__list">
                <h4 class="modal__title">Masa</h4>
                <ul class="items">
                    <li class="list__modal">Juego de pesas</li>
                    <li class="list__modal">Balanzas mecánicas</li>
                    <li class="list__modal">Balanzas electrónicas</li>
                    <li class="list__modal">Balanzas industriales</li>
                    <li class="list__modal">Balanzas analíticas</li>
                    <li class="list__modal">Balanzas colgantes</li>
                    <li class="list__modal">Tolvas</li>
                    <li class="list__modal">Ensacadoras</li>
            </div>
            <img src="./img/img-calibracion/masa.jpeg" alt="calibracion electricidad">
            <a  id="btn__cerrar--masa" class="modal__close">x</a>
        </div>
    </div>

    <div class="modal__fuerza">  
        <div class="modal__container">
            <div class="modal__list">
                <h4 class="modal__title">Fuerza y Presión</h4>
                <ul class="items">
                    <li class="list__modal">Dinamómetros</li>
                    <li class="list__modal">Torquímetors</li>
                    <li class="list__modal">Multiplicadores de torque</li>
                    <li class="list__modal">Dinamómetros</li>
                    <li class="list__modal">Llaves dinamométricas</li>
                    <li class="list__modal">Equipos de elevación</li>
                    <li class="list__modal">Manómetros digitales</li>
                    <li class="list__modal">Manómetros analógicos</li>
                    <li class="list__modal">Manómetros diferenciales</li>
                    <li class="list__modal">Vacuómetros</li>
                    <li class="list__modal">Manovacuómetros</li>
                    <li class="list__modal">Presostatos</li>
                    <li class="list__modal">Transmisores de presión</li>
                    <li class="list__modal">Controladores de presión</li>
                    
            </div>
            <img src="./img/img-calibracion/fuerza.jpeg" alt="calibracion electricidad">
            <a  id="btn__cerrar--fuerza" class="modal__close">x</a>
        </div>
    </div>

    <div class="modal__otrasMagnitudes">  
        <div class="modal__container">
            <div class="modal__list">
                <h4 class="modal__title">Otras magnitudes</h4>
                <ul class="items">
                    <li class="list__modal">Explosímetros</li>
                    <li class="list__modal">Medidor de Caudal</li>
                    <li class="list__modal">Tacómetro</li>
                    <li class="list__modal">Luxómetros</li>
                    <li class="list__modal">Cronómetros</li>
                    <li class="list__modal">Anemómetros</li>
                    <li class="list__modal">Sonómetros</li>
                    <li class="list__modal">Alineador de poleas</li>
                    <li class="list__modal">Penetrómetro</li>
                    <li class="list__modal">Grupo electrógeno</li>
                    <li class="list__modal">Reveladores de tensión</li>
                    <li class="list__modal">Fasímetro</li>
                    <li class="list__modal">Y entre otros</li>
                    
            </div>
            <img src="./img/img-calibracion/otras-magnitudes.jpg" alt="calibracion electricidad">
            <a id="btn__cerrar--otrasMag" class="modal__close">x</a>
        </div>
    </div>

    <!-- interactividad con java de servicio  -->
    <script src="./js/servicio.js"></script>

    <article class="container__alquiler">
        <h4 class="servicio__title">alquier de equipos</h4>
        <p class="alquiler__paragrafo">
            Brindamos <strong class="alquiler__paragrafo alquiler__paragrafo--inportant">servicios de alquiler de Medición con Certificadfo de Calibración y accesoria en general.</strong> Para ello, contamos una linial de productos.
        </p>

        <a href="./alquiler.php" class="cta__alquiler" href="">Ingrese aqui</a>
    </article>


    <article class="container__mantenimiento">
        <h4 class="servicio__title">mantenimiento de preventivo y correctivo</h4>
        <p class="mantenimineto__paragrafo">
            Descubre la excelencia en nuestro servicio de mantenimiento para instrumentos de medición. Desde correcciones inmediatas con nuestro mantenimiento correctivo hasta garantizar un rendimiento óptimo a lo largo del tiempo con nuestro mantenimiento preventivo, ofrecemos soluciones precisas y confiables. Experimenta mediciones de calidad con nuestro enfoque integral de cuidado. ¡Únete a nosotros para una experiencia inigualable en el mundo de la medición!!
        </p>

        <a class="cta__mantenimiento" href="./servicio-mantenimiento.php">Ingrese aqui</a>
    </article>

    <div class="container__carrusel">

        <h4 class="servicio__title">Nuestros principales clientes</h4>

        <div class="carrusel__track">
            <div class="carrusel">
                <img src="./img/img-carrusel/sonel-logotipo.png" alt="MARCA SONEL - LOGOTIPO">
            </div>
            <div class="carrusel">
                <img src="./img/img-carrusel/circutor-logotipo.png" alt="MARCA CIRCUTOR - LOGOTIPO">
            </div>
            <div class="carrusel">
                <img src="./img/img-carrusel/kyoritsu-logotipo.jpg" alt="MARCA KYORITSU - LOGOTIPO">
            </div>
            <div class="carrusel">
                <img src="./img/img-carrusel/victor-logotipo.jpg" alt="MARCA VICTOR - LOGOTIPO">
            </div>
            <div class="carrusel">
                <img src="./img/img-carrusel/Fluke-logotipo.png" alt="MARCA FLUKE - LOGOTIPO">
            </div>

            <div class="carrusel">
                <img src="./img/img-carrusel/circutor-logotipo.png" alt="MARCA CIRCUTOR - LOGOTIPO">
            </div>
            <div class="carrusel">
                <img src="./img/img-carrusel/kyoritsu-logotipo.jpg" alt="MARCA KYORITSU - LOGOTIPO">
            </div>
            <div class="carrusel">
                <img src="./img/img-carrusel/victor-logotipo.jpg" alt="MARCA VICTOR - LOGOTIPO">
            </div>
            <div class="carrusel">
                <img src="./img/img-carrusel/Fluke-logotipo.png" alt="MARCA FLUKE - LOGOTIPO">
            </div>
            <div class="carrusel">
                <img src="./img/img-carrusel/sonel-logotipo.png" alt="MARCA SONEL - LOGOTIPO">
            </div>
            <div class="carrusel">
                <img src="./img/img-carrusel/sonel-logotipo.png" alt="MARCA SONEL - LOGOTIPO">
            </div>
            <div class="carrusel">
                <img src="./img/img-carrusel/sonel-logotipo.png" alt="MARCA SONEL - LOGOTIPO">
            </div>
        </div>

    </div>

</section>


<?php include('./template/footer.php') ?>