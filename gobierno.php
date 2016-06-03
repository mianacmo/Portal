<?php
	$es_gobierno=$_GET["id"];
	
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
						<h3 id="titular_seccion">Gobierno Corporativo</h3>
						<img src="images/03_GobiernosCorporativo.png" class="img-responsive"/>
							
						
				</div>
				<div class="col-lg-9 col-sm-8 div_white" >
									<div class="menu-interno">
											<a href="<?php echo $host?>index">Inicio</a> <span>></span> <a href="<?php echo $host?>gobierno">Gobierno Corporativo</a>													
									</div>
					<?php 
							if($es_gobierno>0)
							{
							?>									
									
									<h1 id="titular_subseccion"></h1>			
									<div class="row div_derecho">
											<div class="col-sm-12  div_contenido">
													
											</div>
											<div class="col-sm-12 imagen_noticia">
													
											</div>
									</div>
									
							<?php
							}
							else
							{
					?>									
									<h1 id="titular_subseccion">Gobierno Corporativo</h1>			
									<div class=" div_derecho">
											
									</div>
									
									
						<?php
							}
						?>
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
			document.title = "Gobierno Corporativo";
			<?php
					if($es_gobierno>0)
					{
			?>
							
						cargarSeccionContenido(<?php echo $es_gobierno;?>,0);
						function cargarSeccionContenido(id,id2)
							{
								  
									  var parametros={selectfuncion:"cargar_seccion_contenido_id",valor:id,valor2:id2,valor3:"21"};
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
																		$(".menu-interno").html('<a href="<?php echo $host?>vista_previa/index.html">Inicio</a> <span>></span> <a href="<?php echo $host?>gobierno">Gobierno Corporativo</a> <span>></span> <a href="<?php echo $host?>gobierno-corporativo/'+values[3]+'">'+values[0]+'</a>');
																		document.title = values[0];
																		$(".div_contenido").html(values[1]);
																		if (values[2]=="images/secciones/politica_")
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
					
					<?php
					}
					else
					{
					?>
								cargar_menu_gobierno();
								function cargar_menu_gobierno()
									{
									console.log("hola");
										var parametros={selectfuncion:"cargar_menu_gobierno",valor:"4"};
										$.ajax({
										data:  parametros,
										url:   'admin/functionsweb.php',
										type:  'post',
										beforeSend: function () {
												$("#resultado").html("Procesando, espere por favor...");
										},
										success:  function (response) {
											console.log(response);
														
																
																$(".div_derecho").html(response);
																
															
											}
										});	
									}
					
					<?php
					}
					?>
							
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
