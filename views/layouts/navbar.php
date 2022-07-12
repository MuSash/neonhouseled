<header >
		
		<nav class="style-navbar container-lg ">
			<div class="logonav">
				<a href="<?=URL?>main" aria-label="Inicio"><img  width="150" height="100" alt="logo veramendis" src="..."></a>
			</div>
			<div class="mx-auto div-container ">
				<ul class="d-flex ul">
					<li class="li my-auto mx-auto"><a href="<?php echo constant('URL') ?>main" class="style-a-2" aria-label="inicio">Inicio</a>
					</li>
					<li class="li my-auto mx-auto"><a href="<?php echo constant('URL') ?>promociones" class="style-a" aria-label="promociones">Promociones</a>
					</li>
					
					<li class="li my-auto mx-auto"><a href="<?php echo constant('URL')?>menu?cat=1&subcat=1" class="style-a-2" aria-label="menu">Menú</a>
					</li>
					<li class="li my-auto mx-auto"><a href="<?php echo constant('URL') ?>contacto" class="style-a-2" aria-label="contacto">Contacto</a>
					</li>
					
					<li class="li my-auto mx-auto"><a href="<?php echo constant('URL') ?>reserva" class="style-a-2" aria-label="reserva">Reserva</a>
					</li>
					<li class="li my-auto mx-auto"><a href="<?php echo constant('URL')?>login" class="style-a" aria-label="sign up" target="_blank">Iniciar Sesion</a>
					</li>
				</ul>
			</div>
			<div class="contmenu active d-lg-none d-flex" id="menu">
				<span class="close " id="close">
				<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="dark" class="bi bi-x-circle bg-white m-1 rounded-circle " viewBox="0 0 16 16">
					<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
					<path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
				</svg>
				</span>
			    <ul class="ul">
					<li class="li"><a href="<?php echo constant('URL') ?>main" class="style-a-2">Inicio</a>
					</li>
					<li class="li"><a href="<?php echo constant('URL') ?>promociones" class="style-a" >Promociones</a>
					</li>
					<li class="li"><a href="<?php echo constant('URL')?>menu?cat=1&subcat=1" class="style-a-2">Menú</a>
					</li>
					<li class="li"><a href="<?php echo constant('URL') ?>contacto" class="style-a-2">Contacto</a>
					</li>
					<li class="li"><a href="<?php echo constant('URL') ?>reserva"  class="style-a-2">Reserva</a>
					</li>
					<li class="li"><a href="<?php echo constant('URL')?>login" class="style-a">Iniciar Sesion</a>
					</li>						      
			    </ul>

			</div>
			<div class="menu-btn">
				<label>
				<img src="<?=URL?>public/img/iconmenu.svg" width="50" height="50" id="iconmenu" alt="iconmenu">
			
				</label>
			</div>
			<div class="my-1 d-flex  mx-3 delivery">
				<p class="style-delivery">
					DELIVERY
					<br>960-483-570
				</p>
			</div>
		</nav>
	</header>


