<section id="fh5co-contact" data-section="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate">Comuniquese Con Nosotros</h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 subtext to-animate">
							<h3>No dude en comunicarse con nosotros, complacidamente atenderemos todas sus dudas.</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row row-bottom-padded-md">
				<div class="col-md-6 to-animate">
					<h3>Informacion de Contacto</h3>
					<ul class="fh5co-contact-info">
						<li class="fh5co-contact-address ">
							<i class="icon-home"></i>
							Carrera 12 No. 8-51 B Centro, <br>Frente al Parque Principal. Puerto Gaitan Meta
						</li>
						<li><i class="icon-phone"></i> (317) 400-3198</li>
						<li><i class="icon-envelope"></i>gerencia@gruposanar.com.co</li>
						<li><i class="icon-envelope"></i>administrativo@gruposanar.com.co</li>
						<li><i class="icon-envelope"></i>atencionalcliente@gruposanar.com.co</li>
						<li><i class="icon-globe"></i> <a style="color:#FC002E;" href="index.php">www.gruposanar.com.co</a></li>
					</ul>
				</div>

				<div class="col-md-6 to-animate">
					<a name="contacto"><h3>Contactenos</h3></a>
					<form action="mail/mail.php" method="post">
					<div class="form-group ">
						<label for="name" class="sr-only">Nombre</label>
						<input id="name" name="nombre" class="form-control" placeholder="Nombre" type="text">
					</div>
					<div class="form-group ">
						<label for="email" class="sr-only">Correo</label>
						<input id="email" name="correo" class="form-control" placeholder="Correo" type="email">
					</div>
					<div class="form-group ">
						<label for="phone" class="sr-only">Telefono</label>
						<input id="phone" name="telefono" class="form-control" placeholder="Telefono" type="text">
					</div>
					<div class="form-group ">
						<label for="message" class="sr-only">Mensaje</label>
						<textarea name="mensaje" id="message" cols="30" rows="5" class="form-control" placeholder="Mensaje"></textarea>
					</div>

					<div class="form-group ">
						<input class="btn btn-primary btn-lg" value="Enviar Mensaje" type="submit">
					</div>
					
					<!-- Errores -->
					<?php 

			            if (isset($_GET["error1"])){

			                  echo "<div  class='error'>
			                          <strong>Error!</strong> Ocurrio un Problema y No se envio su Mensaje.
			                        </div>
			                        ";
			               }

			            elseif (isset($_GET["error2"])){
 
			                  echo "<div class='error'>
			                          <strong>Exelente!</strong> Su Mensaje ha sido Enviado Correctamente.
			                        </div>
			                        ";
			               }
			            ?> 
					</form>
				</div>
				</div>

			</div>
		</div>
		<div id="map" class="to-animate">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d994.6314004286685!2d-72.07987371194706!3d4.311841737112327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e14854b979809d5%3A0x643a01b18223b1de!2sGrupo+Preferencial+Sanar!5e0!3m2!1ses!2sco!4v1530225329427"  frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</section>
