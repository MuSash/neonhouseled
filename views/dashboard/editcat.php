  <?php
  require_once 'controllers/editcat.php';
  $pub = new Editcat();

  if(isset($_GET['id'])){
   $categoria=$pub->obtenerCategoria($_GET['id']);  
 } 

  if (isset($_POST['actualizar'])) {
      $datos = array(
        'id'=>$_POST['id'],
        'nombre'=> $_POST['nombre']
      );
      $pub->actualizarCategoria($datos);
      header("Location:".URL."categoria");
  } else {

  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="public/css/dashboard.css">
  <title>Categoria</title>
</head>
<body>

<div class="container-fluid dashboard">
  <div class="row">
    <?php require_once 'navbar.php'; ?>
    <div id="main" class="p-0 container-fluid main">
      <header class="pr-3 pl-3 pr-md-3 pl-md-3 pr-lg-5 pl-lg-5 d-flex justify-content-end align-items-center header">
        <div class="w-100 text-sm-left text-md-center">
          <h1 class="m-0 d-none side__nav--title"><?php echo "VERAMENDIS"; ?></h1>
        </div>
        <div class="btn-group container__user">
          <button type="button" class="p-0 d-flex align-items-center position-relative container__user--btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <p class="m-0 mr-4 username" width="100">Usuario</p>
            <span class="arrow--left" ></span>
              <i class="fas fa-angle-down username--arrow" id="dropdownMenuButton"></i>
            </span>
          </button>
        </div>
      </header>
      <div class="p-4 p-lg-5  main__container">
        <div class="row m-0 mb-5"><h2>Categoria</h2></div>
          <div class="row">
            <div class="pt-4 col-12 col-xl-12 last__publications">
              <!-- Insertar -->
              <?php
                if (isset($_SESSION['mensaje'])) {
                  echo "<div class='alert alert-primary' role='alert'>".$_SESSION['mensaje']."</div>";
                }
                $_SESSION['mensaje']=null;

                foreach($categoria as $p){
                	$nombre=$p["nombre"];
                }
              ?>
              <form action="<?=URL?>editcat?id=<?php echo $_GET['id']?>" method="POST" name="publicarForm" id="publicarForm" enctype="multipart/form-data">
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="inputEmail4">Nombre de Categoria</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="" value="<?php echo $nombre; ?>">
                  </div>
                </div>
                <input type="hidden" name="id" id="id" value="<?php echo $_GET['id'] ?>">
                    
                <br>
                <button type="submit" name="actualizar" id="actualizar" class="btn btn-primary">actualizar</button>
              </form>
            </div>
          <!-- Fin Insertar -->
          </div>
        </div>
      </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
