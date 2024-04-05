<?php

  header("Content-Type: text/css; charset: UTF-8");
?>


.portada-mantenimiento{
    position: relative;
    margin-top: 90px;
    width: 100%;
    height: 420px;
    background-image: linear-gradient(111deg, rgba(0, 0, 0, 0.37) 0%, rgba(71, 71, 71, 0.637) 47%, rgba(88, 88, 88, 0.664) 100%),url(../img/portada.jpg);
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover
  
  }

  .portada-mantenimiento h2{
    user-select: none;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #fff;
    font-weight: 800;
    font-size: 50px;
    text-align: center;
    text-transform: uppercase;
  }

/* contendor de matenimiento */
.content__mantenimiento{
    width: 80%;
    max-width: 1200px;
    max-height: 100%;
    margin: auto;
    overflow: hidden;
    margin-top: 45px;
    margin-bottom: 45px;
}
.container__matenimiento{
    height: auto;
    display: flex;
    justify-content: space-between;

}
.items__mantenimiento{
    width: 45%;
}
.items__mantenimiento .items{
    display: flex;
    flex-direction: column;
    gap: 1rem;
    margin-bottom: 1.2rem;
}
.mantenimiento__title{
    font-size: 25px;
    font-weight: bold;
    text-transform: uppercase;
    margin-bottom: 1.2rem;
}

.figure__mantenimiento{
    width: 40%;
    height: 560px;
}

.figure__mantenimiento img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    
}



@media screen and (max-width:640px){
    .portada-mantenimiento h2{
       font-size: 35px;
      }
    .container__matenimiento{
        width: 100%;
        flex-direction: column-reverse;
    }
    .items__mantenimiento{
        width: 100%;
        margin-top: 2rem;
    }
    .mantenimiento__title{
        font-size: 18px;
    }
    .list__matenimiento{
        font-size: 14px;
    }

    .figure__mantenimiento{
        width: 100%;
    }
    .figure__mantenimiento img{
        width: 100%;
        object-fit: cover;
    }
    
}