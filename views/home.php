<?php
$metaDescription = "Platcont - Sistema de gestión empresarial, que permite integrar todos los procesos internos de tu organización";
require_once("./views/partials/head.php") 
?>
	<!-- Header -->
	<header class="header text-light">
		<!-- Header Contacto/Menu  -->
		<?php require_once("./views/partials/header.php") ?>
		<!--  -->
		<!-- Header Contenido -->
		<div class="container" style="height: 45%">
			<div class="row align-items-center h-100">
				<div class="col-12 col-md-8">
					<h1 class="display-4 font-weight-bold mb-3">Platcont</h1>
					<p class="mb-4">PLATCONT es más que un software. De la mano con un servicio permanente de soporte, aseguramos el éxito de tu proyecto y  te acompañamos en tu crecimiento</p>
					<a href="/contacto" class="btn btn-success" role="button">Contactar Ahora</a>
				</div>
			</div>
		</div>
	</header>
	<!--  -->
	
	<!-- ¿QUÉ ES PLATCONT? -->
	<div class="container" style="margin-top: -27vh">
		<div class="row justify-content-md-center mb-5">
			<div class="col-12 col-md-8 text-center">
				<h2 class="font-weight-bold text-primary">¿QUÉ ES PLATCONT?</h2>
				<p>PLATCONT es un sistema de gestión empresarial, que permite integrar todos los procesos internos de tu organización, haciéndolas más eficientes. Al implementar PLATCONT, lograrás en corto tiempo tener el total control de tu negocio, contando con información exacta, precisa y a tiempo; lo que facilitará una mejor toma de decisiones.</p>
			</div>
		</div>
		<div class="row justify-content-md-center">
			<div class="col-12 col-sm-6 col-md-4 text-center mb-5 atributo">
				<span class="icon-users display-4 atributo--icon"></span>
				<h5 class="font-weight-bold atributo--title">Soporte personalizado</h5>
				<p>Atención permanente para ayudarlos desde el primer día.</p>
			</div>
			<div class="col-12 col-sm-6 col-md-4 text-center mb-5 atributo">
				<span class="icon-cogs display-4 atributo--icon"></span>
				<h5 class="font-weight-bold atributo--title">Flexible</h5>
				<p>Desarrollamos mejoras o nuevos módulos integrándolas con el sistema.</p>
			</div>
			<div class="col-12 col-sm-6 col-md-4 text-center mb-5 atributo">
				<span class="icon-laptop display-4 atributo--icon"></span>
				<h5 class="font-weight-bold atributo--title">Rápida implementación</h5>
				<p>En pocas semanas contarás con Platcont funcionando en tu empresa.</p>
			</div>
			<div class="col-12 col-sm-6 col-md-4 text-center mb-5 atributo">
				<span class="icon-paper-plane display-4 atributo--icon"></span>
				<h5 class="font-weight-bold atributo--title">Fácil de usar</h5>
				<p>Gracias a su interfaz amigable, no requiere de experiencia en uso de otros sistemas empresariales.</p>
			</div>
		</div>
	</div>
	<!--  -->
	
	<!-- VIDEO -->
	<div class="container-fluid mb-5">
		<div class="row justify-content-end align-items-center border-top border-bottom">
			<div class="col-12 col-md-6 col-lg-5 py-5">
				<h2 class="font-weight-bold text-primary">PRINCIPALES BENEFICIOS DE IMPLEMENTAR PLATCONT</h2>
				<p>Permite compartir la información entre todas las áreas de tu empresa, y de forma segura.</p>

				<p>Agiliza los procesos administrativos, reduciendo tiempo y costo.</p>

				<p>Contiene herramientas que permiten hacer un seguimiento exacto de tus inventarios, activos, procesos productivos, o cualquier elemento crítico en tu negocio.</p>

				<p>Brinda herramientas que permiten controlar los gastos cuidando el cumplimiento de los presupuestos, así como tus cobranzas cuidando el flujo de caja.</p>

				<p>Recoge buenas prácticas de otras empresas de tu rubro, y de otros sectores.</p>

				<p>Automatiza la generación de informes contables como balances y estados financieros sin trabajo adicional, y sin errores.</p>

				<a href="/platcont" class="btn btn-outline-success" role="button">Aprende más</a>
			</div>
			<div class="col-12 col-md-6 col-lg-6 align-self-stretch sectionVideo">
				<div class="row h-100 align-items-center">
					<div class="col-11 pl-5 py-5">
						<div style="position:relative;height:0;padding-bottom:56.21%"><iframe src="https://www.youtube.com/embed/M4ZoCHID9GI?ecver=2" style="position:absolute;width:100%;height:100%;left:0" width="641" height="360" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--  -->
	
	<!-- PRECIOS -->
	<?php require_once('./views/partials/precios.php') ?>
	<!--  -->

	<!-- Contáctanos -->
	<div class="container pt-5 border-top">
		<div class="row align-items-center">
			<div class="col-12 col-sm-6 col-lg-8 mb-5">
				<h3 class="font-weight-bold h2 text-right">Comience hacer crecer su negocio ahora</h3>
				<h3 class="font-weight-bold text-right">¿NECESITAS MÁS INFORMACIÓN?</h3>
			</div>
			<div class="col-12 col-sm-6 col-lg-4 mb-5">
				<a href="/platcont" class="btn btn-lg btn-success mr-3" role="button">Aprende Más</a>
				<a href="/contacto" class="btn btn-lg btn-outline-success" role="button">Contactar</a>
			</div>
		</div>
	</div>
	<!--  -->

<?php require_once("./views/partials/footer.php") ?>