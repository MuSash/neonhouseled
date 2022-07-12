
<?php

if(isset($_GET["cat"]) &&  isset($_GET["subcat"]  )) {
        
    $cat = $_GET["cat"];
    $subcat = $_GET["subcat"];
    
       
}else{
    $cat = 1;
    $subcat = 1;
}

$modelpro = $this->cargarModelo("ModeloProductos");
$productos = $modelpro->allProductos($cat,$subcat);
echo json_encode( $productos );

?>