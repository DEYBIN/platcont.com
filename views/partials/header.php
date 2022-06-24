		<!-- Header Contanto -->
		<div class="container">
			<div class="row no-gutters py-2 border-bottom align-items-center">
				<div class="col-6">
					<a href="tel://960-782-946" class="text-light mr-2 text-decoration-none"><span class="icon-comments-o mr-1 align-middle"></span>960-782-946</a>
				</div>
				<div class="col-6 text-right text-decoration-none">
					<a href="#" class="mr-3 text-light facebook">
						<span class="icon-facebook"></span>
					</a>
					<a href="#" class="mr-3 text-light twitter">
						<span class="icon-twitter"></span>
					</a>
					<a href="#" class="text-light youtube">
						<span class="icon-youtube-play"></span>
					</a>
					<?php
						$navOne='<li class="dropdown-sis" id="Secondary_Navbar-Account">
			        				<a class="dropdown-toggle-sis">
			            				<i class="icon-users"></i>
			            				<span class="ico-users">Cuenta</span>
			                        	<b class="caret"></b>
			                        </a>

				                    <ul class="dropdown-menu-sis">
				                         <li>
			                    			<a href="/login">Entrar</a>
			                			</li>

			                            <li>
			                    			<a href="/contacto">Registrarse</a>
			                			</li>                            
			                            <li>
			                    				<a href="/login">Recuperar la Contraseña</a>
			                			</li>
			                        </ul>
			            		</li>';
			            $navTwo='<li class="dropdown-sis">
		        				<a class="dropdown-toggle-sis">
		            				<i class="icon-users"></i><span class="user-info">Administrar Cuenta</span><b class="caret"></b>
		            			</a>
		                    	<ul class="dropdown-menu-sis">
		                            <li>
		                    			<a href="/change">Editar Detalles de la Cuenta</a>
									</li>                            
		                            <li>
		                    			<a href="/change">Cambiar Contraseña</a>
		                			</li>
		                            <li>
		                    			<a href="">Ajustes de Seguridad</a>
		                			</li>
		                            <li>
		                    			<a href="">E-Mails Recibidos</a>
		                			</li>
		                            
		                			</li>
		                            <li>
		                    			<a href="information/logout">Salir</a>
		                			</li>
		                        </ul>
		            		</li>';
						session_start();
						if (empty($_SESSION['_webState']) || $_SESSION['_webState']==0) {
						echo $navOne;
						}else if (!empty($_SESSION['_webState']) && $_SESSION['_webState']==1) {
						echo  $navTwo;
						}else{
						echo $navOne;
						}
					 ?>
					
				</div>
				
			</div>
		</div>
		<!--  -->
		<!-- Header Menu -->
		<nav class="navbar navbar-expand-lg navbar-dark">
			<div class="container">
				<a class="navbar-brand" href="/" style="padding: 0">
					<img alt="Brand" src="public/img/logo.png" width="65px">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="/">Inicio</a>
						</li>
						<!-- <li class="nav-item">
							<a class="nav-link" href="#">Nosotros</a>
						</li> -->
						<li class="nav-item">
							<a class="nav-link" href="platcont">¿Por qué Platcont?</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="precios">Precios</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contacto">Contáctanos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="https://app.platcont.com/login">Aplicacion Web</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!--  -->