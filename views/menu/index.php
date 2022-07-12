<!doctype html>
<html lang="en">
  <head>
    <title>Veramendi’s - Menu</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Conoce nuestra carta de pollo a la brasa, parrilla, chifa y más, no te lo pierdas.">
    <meta name="keywords" content="pollo a la brasa, parrilladas, chifas, almuerzos, meriendas, cenas">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel ="canonical" href="https://veramendischicken.com/"/>
    <?php require_once("views/layouts/enlaces.php") ?>
    <link rel="stylesheet" type="text/css" href="public/css/menur.css">
  <style>
      .subcat{
          cursor: pointer;
      }
  </style>
  </head>
  
  <?php	require_once("views/layouts/navbar.php");?>
  <div class="contenedor-full">
  <div class="container text-center text-white mb-5">
          <h1 class="my-5">¿Qué se te antoja hoy?</h1>
          <div class="menu">
              <ul class="d-flex m-auto text-center menu-ul-principal    ">


                  <?php 
                  $categorias = $modelcat->allcategorias();
                  $aux;
                  foreach($categorias as $cat):

                        if(isset($_GET["cat"])){
                            $aux =$_GET["cat"];
                        }else{
                            $aux = 1;
                        }
                        if($aux == $cat->id){
                            if($cat->id == 1){
                                ?> 
                            
                             <li class="w-25 h2  " > <a  class ="text-white border-bottom border-2 nav-link  m-auto" href="?cat=<?=$cat->id?>&subcat=1" > <?=$cat->nombre?> </a></li>
                             <?php 
                            }elseif ($cat->id == 2) {
                                ?> 
                            
                                <li class="w-25 h2  " > <a  class ="text-white border-bottom border-2 nav-link  m-auto" href="?cat=<?=$cat->id?>&subcat=3" > <?=$cat->nombre?> </a></li>
                                <?php 
                            }elseif ($cat->id == 3) {
                                ?> 
                            
                                <li class="w-25 h2  " > <a  class ="text-white border-bottom border-2 nav-link  m-auto" href="?cat=<?=$cat->id?>&subcat=10" > <?=$cat->nombre?> </a></li>
                                <?php 
                            }elseif ($cat->id == 4) {
                                ?> 
                            
                                <li class="w-25 h2  " > <a  class ="text-white border-bottom border-2  nav-link  m-auto" href="?cat=<?=$cat->id?>&subcat=12" > <?=$cat->nombre?> </a></li>
                                <?php 
                            }

                           

                        }else{
                           
                                if($cat->id == 1){
                                    ?> 
                                
                                 <li class="w-25 h2  " > <a  class ="text-white  nav-link  m-auto" href="?cat=<?=$cat->id?>&subcat=1" > <?=$cat->nombre?> </a></li>
                                 <?php 
                                }elseif ($cat->id == 2) {
                                    ?> 
                                
                                    <li class="w-25 h2  " > <a  class ="text-white  nav-link  m-auto" href="?cat=<?=$cat->id?>&subcat=3" > <?=$cat->nombre?> </a></li>
                                    <?php 
                                }elseif ($cat->id == 3) {
                                    ?> 
                                
                                    <li class="w-25 h2  " > <a  class ="text-white nav-link  m-auto" href="?cat=<?=$cat->id?>&subcat=10" > <?=$cat->nombre?> </a></li>
                                    <?php 
                                }elseif ($cat->id == 4) {
                                    ?> 
                                
                                    <li class="w-25 h2 " > <a  class ="text-white nav-link  m-auto" href="?cat=<?=$cat->id?>&subcat=12" > <?=$cat->nombre?> </a></li>
                                    <?php 
                                }
                        }
                        endforeach;?>
              </ul>
          </div>
          <div class="sub-categoria-menu border mb-4">
            <ul class="d-flex m-auto d-flex justify-content-between p-0  text-dark d-none" id="menu-pc">
                  <!-- <li class="w-50  m-0 bg-white  h2 ">Clásicos</li>
                  <li class="w-50 h2 text-white">Combos</li> -->
                  <?php
                         if (isset($_GET["cat"])) {
                            // asignar w1 y w2 a dos variables
                            $aux = $_GET["cat"];
                           
                        }else{
                            $aux = 1;
                        }
                        
                        $subcategorias = $modelsubcat->allSubcategorias($aux);
                        foreach($subcategorias as $subcat):?>
                        <li> <ul class="d-none d-md-block ul-sub-cat">
                             <li class="w-25 h2 " >
                             <form action="#">

                                    <button type="submit" class="btn-enviar-pc"><?=$subcat->nombre?> </button>
                             </form>
                            </li>
                       </ul>
                        </li>
                    <?php endforeach;?>
            </ul>
             <form action="#" id="form" class=" d-flex" >              
                        <select  id="select-sub-menu" class="w-100  p-2   border-0 text-center h4 m-0 w-75 d-lg-none" name="select" >
                                    <option value="">Elija su Plato</option>
                                    <?php foreach($subcategorias as $subcat):?>
                                      
                                    <option value="<?= $aux?><?=$subcat->id?>">
                                        <?=$subcat->nombre?>
                                        </option>
                                        
                                    <?php endforeach;?>

                       </select>
                       <button type="submit" class="btn  w-25  rounded-0 color-btn d-lg-none" id="consultar">Consultar</button>
  
            </form>
            <div class="subcategorias-pc d-none d-lg-block">
                <ul class="d-flex p-0 m-0 " id="ul-pc">
                            <?php
                                $aux2=0;
                                foreach($subcategorias as $subcat):
                                    if($aux2==0){ ?>   
                                        <a data-id="<?= $aux?><?=$subcat->id?>" class="subcat w-50 bg-white text-dark  nav-link " href="javascript:;">
                                                <?=$subcat->nombre?>
                                        </a> 
                                    <?php
                                        $aux2=1;
                                        }else{ ?>
                                        <a data-id="<?= $aux?><?=$subcat->id?>" class="subcat w-50  text-white  nav-link "  href="javascript:;">
                                                <?=$subcat->nombre?>
                                        </a>
                                    <?php
                                            }
                                    endforeach;?>
                </ul>  
            </div>

                           
      </div> 


      <div class="row" id="productos">
         
          <?php
            if(isset($_GET["cat"]) &&  isset($_GET["subcat"]  )) {
        
                $cat = $_GET["cat"];
                $subcat = $_GET["subcat"];
                $modelpro = $this->cargarModelo("ModeloProductos");
                $productos = $modelpro->allProductos($cat,$subcat);
                if(sizeof($productos)){
                    foreach ($productos as $producto) {
                        ?>
                      <div class="col-12 col-md-4"> 
  
                         <div class="card m-2 ">
                                  <img src="<?=URL?>imagenes/<?php echo $producto->imagen ?>" alt="<?php echo $producto->descripcion ?>" width="100%" height ="100%">
                                  <div class="info text-start p-3">
                                      <p class="h2">S/.<span><?php echo $producto->precio ?><span class="cero" style="
    font-size: 19px;
">.00</span></span></p>
                                      <p class="p-0 m-0 nono"><?php echo $producto->nombre ?></p>
                                      <small class="p-0 "><?php echo $producto->descripcion ?></small>
                                  
                                  </div>
                                  <a href="https://api.whatsapp.com/send?phone=51960483570&text=Hola,%20quisiera%20solicitar%20un%20pedido%20de%20un%20<?php echo $producto->nombre ?>%20,%20<?php echo $producto->descripcion ?>%20con%20un%20precio%20de:%20<?php echo $producto->precio ?>%20soles.">
                                    
                                  <button class="btn btn-success w-75 mx-auto my-4 ">
                                      
                                      <span>
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                      <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                                      </svg>
                                      </span>
                                      Se me antoja!
                                  </button>
                                  </a>
                                 
                           </div>
                      </div>
                          
                          
                         <?php 
                    
                  
                  
                  }
                }else{
                    ?>
                    <small class="py-5">Aún no se suben platillos en esta categoría, por favor consulte otra.</small>
                <?php
                }
                  


            }
            
          ?>

     
     
      </div>
  </div>
  <div class="ejemplo" id="ejemplo"></div>
  </div> 
      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

      <script>
         
            $(document).ready(function () {
               
                $("form").submit(function(e){
                    e.preventDefault();
                    // divPadre.innerHTML='';
                    
                    if ($("#select-sub-menu").val() == "") {
                        alert("Debe elegir un plato primero");
                    } else {         
                        let divPadre = document.createElement("div");
                        divPadre.className="row container m-auto text-center py-5 ";
                        let categoria = $("#select-sub-menu").val()[0];
                        let subcategoria=$("#select-sub-menu").val()[1];
                        if($("#select-sub-menu").val().length>1){
                                    
                                    subcategoria=parseInt(subcategoria+$("#select-sub-menu").val()[2]);
                                   //   console.log(subcategoria);
                               }
                               $.get("<?php echo constant('URL')?>productos", {cat : categoria, subcat : subcategoria}, function(respuesta){
                    //   $("#ejemplo").text(respuesta);
                      console.log('respuesta :>> ', respuesta);
                        respuesta = $.parseJSON(respuesta);
                        // console.log(respuesta);
                        if (respuesta.length>=1) {
                            for (let index = 0; index < respuesta.length; index++) {
                            const element = respuesta[index];
                            console.log(element)
                            let div = document.createElement("div");
                            
                        div.className ="col-12 col-md-4";
                        div.innerHTML =`
                        
                        <div class="card m-2">
                                <img src="<?=URL?>imagenes/${element.imagen}" alt="${element.descripcion}"  width="100%" height ="100%">
                                <div class="info text-start p-3">
                                    <p class="h2">S/.<span>${element.precio}</span></p>
                                    <p class="p-0 m-0 nono">${element.nombre}</p>
                                    <small class="p-0 ">${element.descripcion}</small>
                                
                                </div>
                                <a href="https://api.whatsapp.com/send?phone=51979895362&text=Hola,%20quisiera%20solicitar%20un%20pedido%20de%20un%20${element.nombre}%20que%20contiene%20${element.descripcion}%20con%20un%20precio%20de:%20${element.precio}%20soles.">
                                <button class="btn btn-success w-75 mx-auto my-4 ">
                                    
                                    <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                                    </svg>
                                    </span>
                                    Se me antoja!
                                </button>
                                </a>
                               
                         </div>
                        
                        
                        
                        `;
                         
                       divPadre.append(div);
                        };
                        } else {
                          divPadre.innerHTML = "Aún no tenemos este palto disponible"; 
                          divPadre.className = " text-center py-5" ; 
                        }

                        
                        $("#productos").html(divPadre);
                       
                  });          
                        
                    }

                });

            let subcat = document.getElementById("ul-pc");
            subcat.addEventListener('click', (e)=>{
                cambioSbPc(e);
            });

            function cambioSbPc(e){
               
                if(e.target.classList.contains('subcat')){
                    let subcategoriasarray = document.getElementsByClassName("subcat");
                      for (let index = 0; index < subcategoriasarray.length; index++) {
                          const element = subcategoriasarray[index];
                          
                            element.classList.remove("bg-white");
                            element.classList.add("text-white");
                            element.classList.remove("text-dark");
                          
                      }
                    // e.target.parentElement.parentElement.remove();
                    let subcate = e.target;
                    subcate.classList.add("bg-white");
                    subcate.classList.remove("text-white");
                    subcate.classList.add("text-dark");
                
                    console.log('subcate :>> ', subcate);
                    
                    // productoID = producto.querySelector('button').id;
                    let divPadre = document.createElement("div");
                        divPadre.className="row container m-auto text-center py-5 ";
                       
                        let categoria = subcate.getAttribute("data-id")[0];
                        let subcategoria=subcate.getAttribute("data-id")[1];
                        if(subcate.textContent.length>1){
                                    
                                    subcategoria=parseInt(subcategoria+subcate.getAttribute("data-id")[2]);
                                   //   console.log(subcategoria);
                               }
                         console.log(categoria, subcategoria)
                         $.get("<?php echo constant('URL')?>productos", {cat : categoria, subcat : subcategoria}, function(respuesta){
                    //   $("#ejemplo").text(respuesta);
                      console.log('respuesta :>> ', respuesta);
                        respuesta = $.parseJSON(respuesta);
                        // console.log(respuesta);
                        if (respuesta.length>=1) {
                            for (let index = 0; index < respuesta.length; index++) {
                            const element = respuesta[index];
                            console.log(element)
                            let div = document.createElement("div");
                            
                        div.className ="col-12 col-md-4";
                        div.innerHTML =`
                        
                        <div class="card m-2">
                                <img src="<?=URL?>imagenes/${element.imagen}" alt="${element.descripcion}"  width="100%" height ="100%">
                                <div class="info text-start p-3">
                                    <p class="h2">S/.<span>${element.precio}</span></p>
                                    <p class="p-0 m-0 nono">${element.nombre}</p>
                                    <small class="p-0 ">${element.descripcion}</small>
                                
                                </div>
                                <a href="https://api.whatsapp.com/send?phone=51979895362&text=Hola,%20quisiera%20solicitar%20un%20pedido%20de%20un%20${element.nombre}%20que%20contiene%20${element.descripcion}%20con%20un%20precio%20de:%20${element.precio}%20soles.">
                                <button class="btn btn-success w-75 mx-auto my-4 ">
                                    
                                    <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                                    </svg>
                                    </span>
                                    Se me antoja!
                                </button>
                                </a>
                               
                         </div>
                        
                        
                        
                        `;
                         
                       divPadre.append(div);
                        };
                        } else {
                          divPadre.innerHTML = "Aún no tenemos este palto disponible"; 
                          divPadre.className = " text-center py-5" ; 
                        }

                        
                        $("#productos").html(divPadre);
                       
                  });          
                        // platillos($("#select-sub-menu"),categoria,subcategoria,divPadre)  
            
        }
            }     

                // function platillos(dato,categoria,subcategoria,divPadre){
                    
                   
                //             // console.log($("#select-sub-menu").val().length)
                //             if(subcategoria>= 2){

                //             }else{
                //                 if(dato.val().length>1){
                                    
                //                     subcategoria=parseInt(subcategoria+dato.val()[2]);
                //                    //   console.log(subcategoria);
                //                }
                //             }
                            
                            

                //     // let divPadre = document.createElement("div");
                //     // divPadre.className="row container m-auto text-center py-5 ";
                    
                //     // console.log('data cat:>> ',data);
                //     // console.log('data subcat:>> ', subcategoria);
                //     $.get("<?php echo constant('URL')?>productos", {cat : categoria, subcat : subcategoria}, function(respuesta){
                //     //   $("#ejemplo").text(respuesta);
                //       console.log('respuesta :>> ', respuesta);
                //         respuesta = $.parseJSON(respuesta);
                //         // console.log(respuesta);
                //         if (respuesta.length>=1) {
                //             for (let index = 0; index < respuesta.length; index++) {
                //             const element = respuesta[index];
                //             console.log(element)
                //             let div = document.createElement("div");
                            
                //         div.className ="col-12 col-md-4";
                //         div.innerHTML =`
                        
                //         <div class="card m-2">
                //                 <img src="<?=URL?>imagenes/${element.imagen}" alt="">
                //                 <div class="info text-start p-3">
                //                     <p class="h2">S/.<span>${element.precio}</span></p>
                //                     <p class="p-0 m-0 nono">${element.nombre}</p>
                //                     <small class="p-0 ">${element.descripcion}</small>
                                
                //                 </div>
                //                 <a href="https://api.whatsapp.com/send?phone=51979895362&text=Hola,%20quisiera%20solicitar%20un%20pedido%20de%20un%20${element.nombre}%20que%20contiene%20${element.descripcion}%20con%20un%20precio%20de:%20${element.precio}%20soles.">
                //                 <button class="btn btn-success w-75 mx-auto my-4 ">
                                    
                //                     <span>
                //                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                //                     <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                //                     </svg>
                //                     </span>
                //                     Se me antoja!
                //                 </button>
                //                 </a>
                               
                //          </div>
                        
                        
                        
                //         `;
                         
                //        divPadre.append(div);
                //         };
                //         } else {
                //           divPadre.innerHTML = "Aún no tenemos este palto disponible"; 
                //           divPadre.className = " text-center py-5" ; 
                //         }

                        
                //         $("#productos").html(divPadre);
                       
                //   });          
                // }

            });
     </script>
       <?php require_once("views/layouts/footer.php"); ?>
    </body>

    </html>