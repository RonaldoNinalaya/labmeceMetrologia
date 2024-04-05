<?php

  header("Content-Type: text/css; charset: UTF-8");
?>

:root{
    --color-primary : #F78221;
    --color--border: #b4b4b4;
}
.contendor__circutor{
   
    width: 95%;
    max-width: 1200px;
    max-height:100%;
    margin: 120px auto ;
}

.item__circutor li a{
    color: #494949;
    text-decoration: none;
    font-size: 14px;
}

.item__circutor li {
  margin-top: 8px;
}
.item__circutor{
    list-style: none;
    display: flex;
    flex-direction: column;
    

}
.wrapper__circutor{
    /* position: fixed;
    top: 120px;
    left: 50px; */
    width: 100%;
    display: flex;
    flex-direction: column;
    padding: 12px;

}
.wrapper__circutor > h2{
    margin-bottom: 12px;
    color: #F78221;
}

.item__circutor li a:hover{
    color: var(--color-primary);
}
/* Modificador de enlance active  */

.item__circutor li a.selected{
    color: var(--color-primary);
}

.content__item__circutor{
    /* width: 100%; */
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1.2rem;
    
} 

.circutor__items{
    grid-row: 1/-5;
    grid-column: 1/2;
}

.productos__circutor{
   
    text-align: center;
    padding: 12px;
    border: 1px solid var(--color--border);
    /* margin: auto; */
}

.productos__circutor .img__circutor{
    width: 100%;
}


@media screen and (max-width: 890px){
    .content__item__circutor{
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-template-rows: auto;
        gap: 1.2rem;
    } 

    .circutor__items{
        grid-row: 1/6;
        grid-column: 1/2;
    }
}

@media screen and (max-width: 700px){
    .content__item__circutor{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: auto;
        gap: 1.2rem;
        /* padding: 25px; */
    } 

    .circutor__items{
        grid-row: 1/6;
        grid-column: span 2;
        align-self: self-start;
    }
    .productos__circutor{
        /* width: 100%; */
        /* max-width: 230px; */
        max-width: 250px ;
        
    }
}

@media screen and (max-width: 540px){
    .content__item__circutor{
        width: 100%;
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        /* grid-template-rows: auto; */
        /* gap: 1.2rem; */
        /* padding: 25px; */
    } 

    .circutor__items{
       
        grid-column: span 1;
       
    }

    .productos__circutor{
        max-width: 100%;
        
    }
    
   
    
}