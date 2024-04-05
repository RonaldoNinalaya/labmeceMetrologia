<?php

  header("Content-Type: text/css; charset: UTF-8");
?>


*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: var(--font-popins)
}

.portada-nosotros{
  position: relative;
  margin-top: 90px;
  width: 100%;
  height: 420px;
  background-image: linear-gradient(111deg, rgba(0, 0, 0, 0.37) 0%, rgba(71, 71, 71, 0.637) 47%, rgba(88, 88, 88, 0.664) 100%),url(../img/portada.jpg);
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover

}
.portada-nosotros h2{
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
.content-nosotros{
  width: 90%;
  max-width: 1200px;
  min-height: auto;
  margin: auto;
  padding: 0 2rem;
}
.content{
  margin: 40px 20px;
}

.content-somos h1{
  text-align: center;
  font-size: 35px;
  margin-bottom: 1.5rem;
}
.content-somos p{
  font-size: 14px;
}

/* contendor de objetivos  */
.content-objetivo{
  display: grid;
  align-items: center;
  grid-template-columns: repeat(2, 1fr);
  grid-template-rows: repeat(2, 1fr);
  gap: 1rem;
}

.container-mision{
  grid-column: 1/2;
  grid-row: 1/2;
}
.container-vision{
  grid-column: 1/2;
  grid-row: 2/3;
}
.figure{
  grid-row: span 2;
}

.content-objetivo h2{
  margin-bottom: 1rem;
  font-size: 25px;
  text-transform: uppercase;
}

.content-objetivo p{
  font-size: 14px;
  line-height: 1.2;
}

/*contenedor de imagen*/
.figure{
  width:100%; 
  justify-content: center;
}
.figure .figure__img--nosotros{
  width: 100%;
  padding: 1.2rem;
}
 




/* Especializaciones */
.content-especializacion{
  width: 90%;
  max-width: 1200px;
  min-height: auto;
  margin:  25px auto;
}
.title-especialidad{
  text-align: center;
  font-size: 35px;
  margin-bottom: 25px;
}
.icon-especializacione{
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  gap: 1rem;
  justify-content: center;
  align-items: center;
}
.icon-especializacione .especializacion{
  display: flex;
  flex-direction: column;
  width: 240px;
  align-items: center;
  padding: 0;
}
.circle-container{
  display: flex;
  display: inline-block;
  border-radius: 50%;
  padding: 1rem;
  background-color: #F58118;
  margin-bottom: 12px;
}
.circle-container .icon-svg{
  align-items: center;
} 




@media screen and (max-width:780px){
  .content-objetivo{
    display: grid;
    grid-template-columns: repeat(1, 1fr);
    gap: 1rem;
  }
  
  .especializacion{
    margin: auto;
    width: 1800px;
  }

  .esp-margin{
    margin-bottom: 2rem;
  }
}

@media screen and (max-width:450px){
  .content-nosotros{
    width: 100%;
  }
  .portada-nosotros{
    position: relative;
    width: 100%;
    height: 250px;
    background-image: linear-gradient(111deg, rgba(0, 0, 0, 0.37) 0%, rgba(71, 71, 71, 0.637) 47%, rgba(88, 88, 88, 0.664) 100%),url(../img/portada.jpg);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover
  
  }

  .portada-nosotros h2{
    user-select: none;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #fff;
    font-weight: 800;
    font-size: 40px;
    text-align: center;
    text-transform: uppercase;
  }

  .content-objetivo{
    display: grid;
    grid-template-columns: repeat(1, 1fr);
    gap: 1rem;
  }


  .content-somos h1{
    font-size: 25px;

  }
  

  .content-somos p{
    font-size: 12px;
  }


  .container-space h2 {
    font-size: 15px;
    text-align: center;
  }

  .container-space p{
    font-size: 12px;
  }
  .content-especializacion{
    min-height: 100vh;
  }

 
  


}


