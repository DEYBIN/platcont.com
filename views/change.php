<?php 
require "information/seguridad.php";

$metaDescription = "Tenemos un plan para cada tipo de empresa";
require_once("./views/partials/head.php") 
?>
	<!-- Header -->
	<header class="text-light bg-primary mb-5">
		<!-- Header Contacto/Menu  -->
		<?php require_once("./views/partials/header.php") ?>
		<!--  -->
	</header>
	<!--  -->
	
	<!-- Titulo Pagina -->
	<div class="container mb-5">
		<div class="row justify-content-center">
			<div class="col-12 col-md-10 col-lg-7">
				<h1 class="text-capitalize font-weight-bold text-center text-primary">ÁREA DEL CLIENTE
				</h1>
			</div>
		</div>
	</div>
	<!--  -->

	<!-- PRECIOS -->
	<?php require_once('./views/partials/change.php') ?>
	<!--  -->

	

<?php require_once("./views/partials/footer.php") ?>