<?php

  header("Content-Type: text/css; charset: UTF-8");
?>

:root{
    --color-primary : #F4811D;
    --color-secondary : #F8D80A;
}
.container__media_control{
    width: 100%;
    max-width: 1200px;
    max-height: 100%;
    margin: 120px auto 60px;
    /* margin-top: 120px; */

}
.title--media-control{
    font-size: 24px;
    text-align: center;
    
}

.wrapper__medida-control{
    display: grid;
    grid-template-columns: repeat(5, 200px);
    margin-top: 12px;
    gap: 1.2rem;
}

.group__circutor{
    width: 200px;
    display: flex;
    flex-direction: column;
    text-align: center;
    justify-content: flex-end;
    border: 1px solid #a3a3a3;
}

.img__circutor{
    width: 100%;
    padding: 12px;


}
.title__circutor{
    margin-bottom: 12px;
    word-wrap: break-word; 
    overflow-wrap: break-word;
}

.cta__redes{
    display: inline-block;
    padding: 8px 0;
    color: black;
    text-decoration: none;
    text-transform: uppercase;
    background-color: var(--color-primary);
    font-weight: 700;

}

.cta__redes:hover{
    background-color: var(--color-secondary);
    color: azure;

}

@media screen and (max-width:1100px){
    .wrapper__medida-control{
        display: grid;
        grid-template-columns: repeat(4, 200px);
        margin-top: 12px;
        gap: 1.2rem;
    }
    
}

@media screen and (max-width:900px){
    .wrapper__medida-control{
        display: grid;
        grid-template-columns: repeat(2, 280px);
        margin-top: 12px;
        gap: 1.2rem;
    }
    .group__circutor{
        width: 280px;
  
        
    }
    
}

@media screen and (max-width:650px){
    .wrapper__medida-control{
        display: grid;
        grid-template-columns: 1fr ;
        margin-top: 12px;
        gap: 1.2rem;
    }
    .group__circutor{
        width: 350px;
       
        
    }
    .title--media-control{
        font-size: 24px;
        text-align: center;
        padding: 0 12px;
    }
    
}