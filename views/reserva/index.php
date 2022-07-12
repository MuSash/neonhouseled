<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="¡Asegura tu experiencia en Veramendi’s! Ingresa aquí o llama al  998541889 o al 960483570, no te pierdas la oportunidad">
    <meta name="keywords" content="pollo a la brasa, parrilladas, chifas, almuerzos, meriendas, cenas, Familia, peruana, sazón peruana, Veramedi’s Chicken, veramendis, chicken, veramendischicken, veramendis chicken">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel ="canonical" href="https://veramendischicken.com/"/>
    <link rel="stylesheet" href="<?=URL?>public/css/reserva.css">
      <title>Veramendi's - Reserva</title>
    <?php require_once("views/layouts/enlaces.php") ?>
</head>

<body>
    <h1 class="d-none" >Reserva - Veramendis</h1>
    <?php require_once("views/layouts/navbar.php") ?>

   <div class="container d-flex justify-content-center">
       <div class="col-11 col-lg-8 bg-white rounded my-5">
     
       <form class="m-5" id="reserva-form">
     <div>    
       <label for="nombre" class="form-label">Nombres y Apellidos:</label>
    <input type="text" class="form-control" id="nombre"  required>
  </div>
  <!-- <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Direcci贸n:</label>
    <input type="text" class="form-control" id="direccion">
  </div> -->
  <div class="mb-3">
    <label for="dni" class="form-label">DNI:</label>
    <input type="text" class="form-control" id="dni" required>
  </div>
  <div class="mb-3">
    <label for="descripcion" class="form-label">Descripcion de la reserva:</label>
    <textarea class="form-control"  id="descripcion" style="height: 100px" required></textarea>
    <div class="form-text"> Ejemplo: 1/4 de pollo con mayonesa sin ensalada.</div>
  </div>
  <div class="d-flex justify-content-center">
    <button type="submit" class="btn-reserva btn w-100">Reservar</button>
  </div>
</form>
     
   </div>
   </div>
    <?php require_once("views/layouts/footer.php") ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
      $("#reserva-form").submit(function(e){
        e.preventDefault();
        let nombre = $("#nombre").val();
        // let direccion = $("#direccion").val();
        let dni = $("#dni").val();
        let descripcion = $("#descripcion").val();
        let enlace = document.createElement("a");
        let href= "https://api.whatsapp.com/send?phone=51960483570&text=Hola,%20mi nombre es%20"+nombre+"%20con%20dni:%20"+dni+" ,%20quisiera%20solicitar%20un%20una%20reserva%20con%20los%20siguientes%20detalles:%20" + descripcion+"%20";
        enlace.href = href;
        enlace.click();
      })

    </script>
</body>

</html>