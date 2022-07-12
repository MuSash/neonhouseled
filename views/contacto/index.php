<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=URL?>public/css/contacto.css">
    <title>Veramendi’s - Contacto</title>
    <meta name="description" content="Conoce nuestra carta de pollo a la brasa, parrilla, chifa y más…">
    <meta name="keywords" content="pollo a la brasa, parrilladas, chifas, almuerzos, meriendas, cenas, veramendis, veramendi's, chicken, Familia, peruana, sazón peruana, Veramendi’s Chicken, veramendis, restaurante, promociones, carta, pollo a la brasa, parrillas, chifa, mejores precios, familiar, veramendiz, polleria, Veramedi’s Chicken, veramendis, chicken, veramendischicken, veramendis chicken, veramendi'schicken">
    <link rel ="canonical" href="https://veramendischicken.com/"/>
    <?php require_once("views/layouts/enlaces.php") ?>
</head>

<body>
    <?php require_once("views/layouts/navbar.php") ?>
        <h1 class="d-none" >Contacto - Veramendis</h1>
    <section class="container text-white">
        <h2 class="titulo ">¡Visítanos!</h2>
        <p class="direccion ">Av.Néstor Gambetta Mz.A lte 4 al costado  del grifo Petro Perú</p>
        <div class ="d-flex justify-content-center">
        <figure class="overflow-hidden mapa">
            <a href="https://www.google.com/maps/place/POLLERIA+Y+CHIFA+VERAMENDI/@-11.8394691,-77.1144235,17.25z/data=!4m5!3m4!1s0x9105d5a987112f23:0x1c0a2ff8eabeda2a!8m2!3d-11.8394541!4d-77.1125051" aria-label="ubicacion de la polleria" target="_blank" >
                <img src="<?= URL?>public/img/contacto/localizacion.webp" alt="ubicacion en el mapaFamilia, peruana, sazón peruana, Veramendi’s Chicken, veramendis, restaurante, promociones, carta, pollo a la brasa, parrillas, chifa, mejores precios, familiar, veramendiz, polleria, Veramedi’s Chicken, veramendis, chicken, veramendischicken, veramendis chicken, veramendi'schicken" class="img-mapa w-100">
            </a>
            
        </figure>
        </div>
        <h2 class="titulo-modify titulo">!Síguenos  en nuestras redes¡</h2>
        <div class="card2">
            <figure class="card-1">
                <a href="https://www.facebook.com/Veramendis-Chicken-111716233585168/" target="_blank"><img class="zoom" src="<?=URL?>public/img/contacto/facebook.svg" alt="logo de facebook" width= "70" height ="70"></a>
                <figcaption>Veramendi`s Chicken</figcaption>
            </figure>
            <figure class="card-2">
            <a href="https://instagram.com/veramendischicken?utm_medium=copy_link" target="_blank">    <img class="zoom" src="<?=URL?>public/img/contacto/instagram.svg" alt="logo de instagram" width= "70" height ="70"></a>
                <figcaption>veramendis-chicken</figcaption>
            </figure>
            <figure class="card-3">
            <a href="https://vm.tiktok.com/ZMLMqHrjS/" target="_blank">    <img class="zoom"  src="<?=URL?>public/img/contacto/tiktok.svg" alt="logo de tiktok" width= "70" height ="70"></a>
                <figcaption>veramendispolleria</figcaption>
            </figure>
        </div>
    </section>
    <?php require_once("views/layouts/footer.php") ?>
</body>

</html>