<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="¡Descubre los mejores precios! - Jueves de Veramendi’s - Parrilla familiar.">
    <meta name="kkeywods" content = "Familia, peruana, sazón peruana, Veramendi’s Chicken, veramendis, restaurante, promociones, carta, pollo a la brasa, parrillas, chifa, mejores precios, familiar, veramendiz, polleria, Veramedi’s Chicken, veramendis, chicken, veramendischicken, veramendis chicken, veramendi'schicken">
    <title>Veramendi’s - Promociones</title>
    <link rel="stylesheet" href="<?=URL?>public/css/main.css">
    <link rel="stylesheet" href="<?=URL?>public/css/owl.carousel.min.css">
    <link rel ="canonical" href="https://veramendischicken.com/"/>
    <?php require_once("views/layouts/enlaces.php") ?>
    <style>
    .imagen{
      border-radius:30px;
      height: 500px;
    }
    body{
    width: 100%;
    /* height: 82vh; */
    /* display: flex; */
    /* align-items: center; */
    /* text-align: center; */
    background: center fixed url("https://i.pinimg.com/originals/25/48/bf/2548bf6970f74d0d9594e17b72bc2037.gif");
    background-size: cover;
}
    /* imagen a 500px */
    /* .imagen img{ */
      /* object-fit:cover; */
    /* } */
    
    .h1-promociones{
    color: #ffff;
    font-size: 40px;
    margin-bottom: 50px;
    }
    .imagen{
      border-radius:30px;
      height: 300px;
    }
    @media (min-width:500px) {
      .h1-promociones{
        font-size: 70px;
      }
      .imagen{
      border-radius:30px;
      height: 500px;
    }
     

    }    
    </style>
</head>
<body>



<?php	require_once("views/layouts/navbar.php");?>
<div class="container text-white  w-75 text-center py-5">
      <h1 class="h1-promociones">Conoce nuestras Promociones</h1>
<div class="d-flex my-5">
  <a class="w-50 btn  border-bottom text-white " id="btn-1">JUEVES DE VERAMENDIS</a>
  <a class="w-50 btn text-white" id="btn-2">PROMOS DE VERANO</a>
</div>

<div class="contenedor_imagen">
  <figure class="imagen  overflow-hidden " id="imagen1">
    <img class="w-100 h-100"src="<?=URL?>public/img/Jueves de veramendis.webp" alt="Familia, peruana, sazón peruana, Veramendi’s Chicken, veramendis, restaurante, promociones, carta, pollo a la brasa, parrillas, chifa, mejores precios, familiar, veramendiz, polleria, Veramedi’s Chicken, veramendis, chicken, veramendischicken, veramendis chicken, veramendi'schicken">
  </figure>
  <figure class="imagen  overflow-hidden d-none" id="imagen2">
    <img class="w-100 h-100" src="<?=URL?>public/img/verano.webp" alt="Familia, peruana, sazón peruana, Veramendi’s Chicken, veramendis, restaurante, promociones, carta, pollo a la brasa, parrillas, chifa, mejores precios, familiar, veramendiz, polleria, Veramedi’s Chicken, veramendis, chicken, veramendischicken, veramendis chicken, veramendi'schicken">
  </figure>
</div>
</div>


  
    <?php require_once("views/layouts/footer.php"); ?>
    <script>
      let btn1=document.getElementById("btn-1")
      let btn2=document.getElementById("btn-2")
      let img1=document.getElementById("imagen1")
      let img2=document.getElementById("imagen2")

      btn1.addEventListener("click",function(){
        img1.classList.remove("d-none")
        img1.classList.add("d-block")
        img2.classList.add("d-none")
        btn2.classList.remove("border-bottom")
        // btn2.classList.remove("text-white")
        // btn2.classList.add("text-white")
        btn1.classList.add("border-bottom")
        btn1.classList.add("text-dark")
        // btn1.classList.remove("text-white")
        
      })

      btn2.addEventListener("click",function(){
        img2.classList.remove("d-none")
        img2.classList.add("d-block")
        img1.classList.add("d-none")
        btn1.classList.remove("border-bottom")
        // btn1.classList.remove("text-dark")
        // btn1.classList.add("text-white")
        btn2.classList.add("border-bottom")
        btn2.classList.add("text-dark")
        // btn2.classList.remove("text-white")
      })

    </script>
</body>

</html>    




	

