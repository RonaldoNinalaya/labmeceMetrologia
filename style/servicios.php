<?php

  header("Content-Type: text/css; charset: UTF-8");
?>


*{
    font-family: var(--font-popins);
}
/* portada serivico */
.portada__servicio {
    position: relative;
    margin-top: 90px;
    width: 100%;
    height: 420px;
    background-image: linear-gradient(111deg, rgba(0, 0, 0, 0.37) 0%, rgba(71, 71, 71, 0.637) 47%, rgba(88, 88, 88, 0.664) 100%), url(../img/portada.jpg);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    margin-bottom: 1.2rem;

}

.portada__servicio h2 {
    user-select: none;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #fff;
    font-weight: 800;
    font-size: 80px;
    text-align: center;
    text-transform: uppercase;
}

/* --------------------------- */
.content__servicios {
    width: 80%;
    max-width: 1200px;
    margin: auto;
    overflow: hidden;
    margin-top: 45px;
    margin-bottom: 45px;

}

.container__verification {
    width: 100%;
    display: flex;
    flex-direction: column;
    gap: 2rem;
}

.servicio__title {
    font-size: 16px;
    font-weight: 700;
    text-transform: uppercase;
}

.verification__calibracion {
    position: relative;
    display: flex;
    flex-wrap: wrap;
    gap: 2rem;
}

.calibracion {
    width: 140px;
    align-items: center;
    text-align: center;

}

.calibracion__img {
    width: 80px;
    margin-bottom: 1rem;
}

.cta__calibracion {
    width: 100%;
    text-transform: uppercase;
    font-size: 15px;
    color: #000;
    font-weight: bold;
    background-color: #ff9938;
    color: #000;
    border: 1px solid #000;
    border-radius: 12px;
    padding: .5rem 0;
    user-select: none;
    cursor: pointer;

}

/* contenedor de alquier de equipo y mantenimiento */

.container__alquiler,
.container__mantenimiento {
    width: 100%;
    margin-top: 2.5rem;
    margin-bottom: 2.5rem;
}

.alquiler__paragrafo,
.mantenimineto__paragrafo {
    margin-top: 1.2rem;
    margin-bottom: 1.2rem;
    font-size: 15px;
}

.cta__alquiler,
.cta__mantenimiento {
    display: inline-block;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 16px;
    padding: 10px 20px;
    font-weight: bold;
    border-radius: 12px;
    border: 1px solid #000;
    color: #000;
    background-color: #ff9938;
    transition: background-color .2s;
}

.cta__alquiler:hover,
.cta__mantenimiento:hover {
    background-color: #F8D809;

}


/* contenedor de carrucel */

.container__carrusel~.servicio__title {
    width: 75vw;
    height: auto;
    margin: auto;
    overflow: hidden;
}


.container__carrusel .carrusel__track {
    display: flex;
    margin-top: 1.5rem;
    animation: scroll 40s linear infinite;
    -webkit-animation: scroll 10s linear infinite;
    width: calc(150px * 12);
}

.container__carrusel .carrusel {
    width: 150px;
    margin: 0 15px;
}

.container__carrusel .carrusel img {
    width: 100%;
}

@keyframes scroll {
    0% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }

    100% {
        -webkit-transform: translateX(calc(-200px * 4));
        transform: translateX(calc(-200px * 4));
    }
}

@media screen and (max-width: 650px) {
    .portada__servicio {
        height: 260px;


        
    
    
    }
    .portada__servicio h2 {
       font-size: 35px;
    }

    .calibracion {
        width: 100px;
        margin: 0 auto;

    }

    .calibracion__img {
        width: 100%;
    }

    .cta__calibracion {
        font-size: 12px;
    }

    .alquiler__paragrafo,
    .mantenimineto__paragrafo {
        font-size: 13px;
    }

    .cta__alquiler,
    .cta__mantenimiento {
        font-size: 12px;
    }
}

/* contenedor de modal */

.modal,
.modal__temperatura,
.modal__longitud,
.modal__masa,
.modal__fuerza,
.modal__otrasMagnitudes{
    position: fixed;
    z-index: 1000;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #111111bd;
    display: flex;
    opacity: 0;
    pointer-events: none;
    transition: opacity .6s;
    --transform: translateY(-100vh);
    --transition: transform .5s;
}

.modal--visible{
    opacity: 1;
    pointer-events: unset;
    --transform: translateY(0);
    transition: opacity .6s;
}
.modal__container{
    display: flex;
    justify-content: space-between;
    padding: 2rem;
    margin: auto;
    width: 90%;
    max-width: 980px;
    max-height: 90%;
    background-color: #fff;
    transform: var(--transform);
    transition: var(--transition)
}
.modal__title{
    font-size: 25px;
    font-weight: bold;
    margin-bottom: 2rem;
    text-transform: uppercase;

}
.items{
    display: flex;
    flex-direction: column;
    gap: .5rem;
}
.modal__list{
    width: 45%;
    padding: 0 2rem;
}
.modal__container img{
    width: 45%;
}
.modal__close{
    position: absolute;
    top: -15px;
    right: -15px;
    width: 35px;
    height: 35px;
    color: #000;
    font-size: 22px;
    font-weight: bold;
    text-align: center;
    border-radius: 50%;
    text-decoration: none;
    background-color: #f87e0b;
    cursor: pointer;
}

@media screen and (max-width:620px){
    .modal__container{
        flex-direction: column;
    }
    .modal__list{
        width: 100%;
        margin-bottom: 1.2rem;
    }
    .modal__title{
        text-align: center;
        
    }
    .items{
        display: grid;
        text-align: left;
        gap:.5rem;
        grid-template-columns: 1fr 1fr; 
    }
    .list__modal{
        font-size: 14px;
    }

    .modal__container img{
        margin: auto;
    }
}

@media screen and (max-width:450px){
    .modal__container{
        flex-direction: column;
    }
    .modal__list{
        width: 100%;
        
    }
    .modal__title{
        font-size: 18px;
        text-align: center;
        
    }
    .items{
        display: grid;
        text-align: left;
        grid-template-columns: 1fr; 
    }
    .list__modal{
        font-size: 12px;
    }

    .modal__container img{
        margin: auto;
    }
    .portada__servicio h2 {
       font-size: 40px;
    }
}