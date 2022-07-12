<?php 
require_once 'controllers/categoriadash.php';
$cat=new Categoriadash();
$categorias=$cat->obtenerCategorias();

  if (isset($_POST['publicar'])) {
      $datos = array(
        'nombre'       => $_POST['nombre'],
      );
      $cat->guardarCategoria($datos);
    }

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="public/css/dashboard.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">
	<title>Categorias</title>
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
        <div class="btn-group d-flex align-items-center px-3">
        
            <p class="m-0 mr-4 username"style="width:100px"><a href="<?=URL?>cerrar">Cerrar sesion</a></p>
            
           <span id="disparador-menu" class="ps-2 d-lg-none">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
            <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
            </svg>

            </span>
        </div>
      </header>
      <div class="p-4 p-lg-5  main__container">
        <div class="row m-0 mb-5"><h2>Categorias</h2></div>
          <div class="row">
            <div class="pt-4 col-12 col-xl-12 last__publications">
              <!-- Insertar -->
              <?php
                if (isset($_SESSION['mensaje'])) {
                  echo "<div class='alert alert-primary' role='alert'>".$_SESSION['mensaje']."</div>";
                }
                $_SESSION['mensaje']=null;
              ?>
              <form action="<?=URL?>categoriadash" method="POST" name="publicarForm" id="publicarForm" enctype="multipart/form-data">
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="inputEmail4">Nombre de categoria</label>
                    <input required type="text" class="form-control" id="nombre" name="nombre" placeholder="">
                  </div>
                </div>

                <br>
                <button type="submit" name="publicar" id="publicar" class="btn btn-primary">Guardar</button>
              </form>
            </div>
          <!-- Fin Insertar -->
          </div>
          <div class="row">
            <div class="pt-4 col-12 col-xl-12 last__publications">
              <h3 class="table--title">Categorias</h3>
              <table class="table display responsive nowrap" width="100%" id="table">
                <thead class="t-head">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <?php                    
                    if (!empty($categorias)) {
                        foreach ($categorias as $r) {
                          echo "<tr>";
                            echo "<td>".$r['id']."</td>";
                            echo "<td>".$r['nombre']."</td>";
                            echo "<td><a href='".URL."editcat?id=".$r['id']."'".">Editar</a> | <a href='".URL."elicat?id=".$r['id']."'>Eliminar</a></td>";
                          echo "</tr>";
                        }
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script>
       
            <script>
            $(document).ready(function() {
           $('#table').DataTable({
            responsive: true,
              "language": {
                "lengthMenu": "Mostrar _MENU_ Páginas",
                "zeroRecords": "No se encontró el producto buscado",
                "info": "Mostrando la página  _PAGE_ de _PAGES_",
                "infoEmpty": "No records available",
                "infoFiltered": "(filtrado de _MAX_ registros totales)",
                "search": "Buscar"
                }
             });

           
            } );
            
        document.getElementById("disparador-menu").addEventListener("click",function(){
            document.getElementById("side-nav").classList.toggle("apareceDash")
        });
    
        </script>
        <script>
            const urlactual = window.location.href;

              let platillo = document.getElementById("platillo");
              let categoria = document.getElementById("categoria");
              let subcategoria = document.getElementById("subcategoria");

              if(urlactual === 'https://veramendischicken.com/dashboard'){
                platillo.classList.add("active");
              }else if( urlactual === 'https://veramendischicken.com/categoriadash'){
                platillo.classList.remove('active');
                subcategoria.classList.remove('active');
                categoria.classList.add('active');
              }else if(urlactual=== 'https://veramendischicken.com/subcategoria'){
                platillo.classList.remove('active');
                subcategoria.classList.add('active');
                categoria.classList.remove('active');
              }
              

          </script>

</body>
</html>
