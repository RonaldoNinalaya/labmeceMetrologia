<?php

  header("Content-Type: text/css; charset: UTF-8");
?>

*{
  margin:0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}


:root{
  --font-poppins : "Poppins", sans-serif;
}
header{
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 90px;
  background-color: #fff;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: .8rem 2rem;
  box-shadow: -1px 9px 8px -7px rgba(0,0,0,0.78);
  z-index: 1000;
}

header .logo-menu{
  max-width: 210px;
}


.nav-container{
  z-index: 100;
}

.nav-items{
  list-style-type: none;
  display: flex;
  gap: 1rem;
}

.nav-items .nav-lists a{
  position: relative;
  color: #000;
  text-decoration: none;
  font-size: 16px;
  color: #434444;
  font-weight: 400;
}

.nav-items .nav-lists a::after{
  position: absolute;
  content: "";
  border-bottom: 3px solid #ff861b;
  bottom: 0;
  left: 0;
  width: 0%;
  transition: all .2s ease-in;
  margin-bottom :-5px;
}

 .nav-items .nav-lists a:hover::after{
  width: 100%;
}  
.btn-hambuguer, 
  .btn-cerrar{
    display: none;
}

.list--producto{
  cursor: pointer;
}

/* sub menu de productos */

.sub_nav__item--producto{
  position: absolute;
  display: none;
  top: 59px;
  background-color: #ffffff;
  width: 150px;
  max-height: 100vh;
  padding: .2rem 0;
  transition:.2s;
}


.sub_nav__item--producto .list__sub--producto{
  list-style: none;
  width: 100%;
}

.sub_nav__item--producto .list__sub--producto a{
  width: 100%;
  display: block;
  font-size: 16px;
  padding: .5rem;
  color: #434444;

}

/* .nav-items .nav-lists:hover > .sub_nav__item--producto{
  display: block;
} */
.list__sub--producto .arrow_open{
  display: inline-block;
  transform: translateX(50px);
}
.sub_nav__item--circutor{
  width: 210px;
  max-height: 100vh;
  display: none;
  position: absolute;
  top: 0;
  left: 150px;
  background-color: #fff;
  padding: .2rem 0;
}
.sub_nav__item--circutor li{
  list-style: none;
}
.sub_nav__item--circutor li a{
  width: 100%;
  display: block;
  padding: .2px .4px;
}

.sub_nav__item--producto .list__sub--producto:hover > .sub_nav__item--circutor {
  display: block;
}

@media screen and (max-width:720px){
  .btn-hambuguer,
  .btn-cerrar{
    color: #ff861b;
    display: block;
    border: none;
    font-size:1.8rem;
    background-color: transparent;
    cursor: pointer;
    
  }
  
  header .logo-menu{
  max-width: 165px;
  }


  .nav-container{
    width: 100%;
    visibility: hidden;
    display: flex;
    flex-direction: column;
    align-items: start;
    gap: 1.5rem;
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    background-color: #fff;
    padding: 2rem;
  }

  .nav-container.visible{
    opacity: 1;
    visibility: visible;
  }
  .nav-items{
    flex-direction: column;
    align-items: flex-start;
  }

  /* contenedor de nav producto */

  .sub_nav__item--producto{
    position: relative;
    max-height: 100vh;
    display: none;
    top: 0;
    left: 0;
    text-align: left;
    width: 100%;
    padding: 0;
  }
  .sub_nav__item--producto .list__sub--producto{
    list-style: none;
  }
  
  .sub_nav__item--producto .list__sub--producto a{
    display: block;
    font-size: 16px;
    margin: 8px 0;
    color: #434444;
  }
  
  /* .nav-items .nav-lists:hover > .sub_nav__item--producto{
    display: none;
  }  */
  
  .list__sub--producto .arrow_open{
    display: inline-block;
    transform: translateX(10px);
  }
   .sub_nav__item--circutor{
    width: 210px;
    max-height: 100vh;
    /* display: none; */
    position:relative;
    top: 0;
    left: 0px;
    padding: .2rem 0;
    background-color: #fff;
  }
  /*
  .sub_nav__item--circutor li a{
    width: 100%;
    display: block;
    padding: .2px .4px;
  }
  
  .sub_nav__item--producto .list__sub--producto:hover > .sub_nav__item--circutor {
    display: block;
  }  */
}


