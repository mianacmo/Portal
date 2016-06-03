<?php	
	include("header.php");
	include("nav.php");
?>
    <div class="container">
			<?php 
				include("menu-slider.php");
			?>
		<br/>
		<div class="row" style="margin-right: 0px;margin-left: 0px;" id="subir">
				<div class="col-lg-3 col-sm-4 col-izquierda" >
						<h3 id="titular_seccion">Contáctenos</h3>
						<img src="images/contactenos.png" class="img-responsive"/>
							
						
				</div>
				<div class="col-lg-9 col-sm-8 div_white" >
									<div class="menu-interno">
											<a href="<?php echo $host?>index">Inicio</a> <span>></span> <a href="<?php echo $host?>contactenos">Contáctenos</a>													
									</div>																		
									<h1 id="titular_subseccion"></h1>			
										<div class="row">		
												<div class="col-sm-6">
															<div class="row">		
																<div class="col-xs-12" style="margin-bottom:15px;">
																		<div class="row">		
																				<div class="col-xs-9">
																						<p class="items-contactenos contactenos-telefono"></p>
																				</div>
																				<div class="col-xs-3 contactenos-img">
																						<img class="img-responsive" src="images/iconos_telefono.jpg" />
																				</div>
																		</div>
																</div>
																<div class="col-xs-12" style="margin-bottom:15px;">
																		<div class="row">		
																				<div class="col-xs-9">
																						<p class="items-contactenos contactenos-fax"></p>
																				</div>
																				<div class="col-xs-3 contactenos-img">
																						<img class="img-responsive" src="images/iconos_fax.jpg" />
																				</div>
																		</div>
																</div>
																<div class="col-xs-12" style="margin-bottom:15px;">
																		<div class="row">		
																				<div class="col-xs-9">
																						<p class="items-contactenos contactenos-horario"></p>
																				</div>
																				<div class="col-xs-3 contactenos-img">
																						<img class="img-responsive" src="images/iconos_atencion.jpg" />
																				</div>
																		</div>
																</div>
															</div>
												</div>
												<div class="col-sm-6">
															<div class="row">		
																<div class="col-xs-12" style="margin-bottom:15px;">
																		<div class="row">		
																				<div class="col-xs-9">
																						<p class="items-contactenos contactenos-correo"></p>
																				</div>
																				<div class="col-xs-3 contactenos-img">
																						<img class="img-responsive" src="images/iconos_correo.jpg" />
																				</div>
																		</div>
																</div>
																<div class="col-xs-12" style="margin-bottom:15px;">
																		<div class="row">		
																				<div class="col-xs-9">
																						<p class="items-contactenos contactenos-sugerencia"></p>
																				</div>
																				<div class="col-xs-3 contactenos-img">
																						<img class="img-responsive" src="images/iconos_sugerencias.jpg" />
																				</div>
																		</div>
																</div>
																<div class="col-xs-12" style="margin-bottom:15px;">
																		<div class="row">		
																				<div class="col-xs-9">
																						<p class="items-contactenos contactenos-denuncia"></p>
																				</div>
																				<div class="col-xs-3 contactenos-img">
																						<img class="img-responsive" src="images/iconos_sugerencias.jpg" />
																				</div>
																		</div>
																</div>
															</div>
												</div>
												<div class="col-sm-12 imagen_noticia">
													
											</div>
										</div>

						<div class="separador_div_derecho"> </div>
						<div class="subir-link"><a href="<?php echo "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>#subir">Subir <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span></a></div>
				</div>
		</div>
		<br/>
		<?php
				include("footer.php");
		?>						
	</div>
			
			
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="lightslider-master/src/js/lightslider.js"></script> 
	 <script>
			document.title = "Contáctenos";
			cargarSeccionContenido(0,0);
			function cargarSeccionContenido(id,id2)
				{
					  
					 	  var parametros={selectfuncion:"cargar_seccion_contenido_id",valor:id,valor2:id2,valor3:"10"};
					  $.ajax({
								data:  parametros,
								url:   'admin/functionsweb.php',
								type:  'post',
								beforeSend: function () {
										$("#resultado").html("Procesando, espere por favor...");
								},
								success:  function (response) {
												$.each(JSON.parse(response), function(index, values) {																	
															$("#titular_subseccion").html(values[0]);
															var items=values[1];
															items=items.split("___");
															$(".contactenos-telefono").html("<strong>Teléfono:</strong><br>" +items[0]);
															$(".contactenos-fax").html("<strong>Fax:</strong><br>" +items[1]);
															$(".contactenos-horario").html("<strong>Horario de atención:</strong><br>" +items[2]);
															$(".contactenos-correo").html("<strong>Correo electrónico:</strong><br>" +items[3]);
															$(".contactenos-sugerencia").html("<strong>Sugerencias, Quejas y Reclamos:</strong><br>" +items[4]);
															$(".contactenos-denuncia").html("<strong>Denuncias:</strong><br>" +items[5]);
															if (values[2]=="images/secciones/contactenos_")
															{
																$(".imagen_noticia").html('');
															}
															else
															{
																$(".imagen_noticia").html('<img src="'+values[2]+'" class="img-responsive"/>');
															}
														})
								}
						});	
			}
							
		cargar();

			function cargar() {
					  
						var parametros={selectfuncion:"listar_slider"};
					  $.ajax({
								data:  parametros,
								url:   'admin/functionsweb.php',
								type:  'post',
								beforeSend: function () {
										$("#resultado").html("Procesando, espere por favor...");
								},
								success:  function (response) {
										var datos=response.split("##");
										var tiempo=parseInt(datos[1]) + 2000;
										margin=(50 - parseInt(datos[2])*5) + "%";
										$("#image-gallery").html(datos[0]);
										
										$('#image-gallery').lightSlider({
											adaptiveHeight:true,
											item:1,
											loop:true,
											auto:true,
											speed:2000,
											pause:tiempo,
											pager:false
											
										});				
								}
						});	
			}
			listar_footer();			
			function listar_footer()
			{
						$.getJSON("admin/listarTextos.php", function(data) {         
								
								var datos=data.split("##");
								var linea1=datos[0];
								var linea2=datos[1];
								var linea3=datos[2];
								$("#footer_1").html(linea1);
								$("#footer_2").html(linea2);
								$("#footer_3").html(linea3);
								
						}); 
					 
						  
				  }
				
    </script>
	<script src="js/functions.js"></script>
  </body>
</html>

