<?php

	require_once("views/layouts/enlaces.php");
	require_once("views/layouts/navbar.php");
?>

<link rel="stylesheet" href="<?=URL?>public/css/error.css">
<section class="error404">
	<div class="centro">
		<h1>ERROR 404</h1>
		<h3>Página No Encontrada</h3>
		<a href="<?php echo constant('URL') ?>main">
			<button type="button" class="btn btn-dark">Regresar a Inicio</button>
		</a>

	</div>
</section>

<?php require_once("views/layouts/footer.php");?>