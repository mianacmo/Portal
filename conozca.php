<?php
	$es_conozca=$_GET["id"];
	
	include("header.php");
	include("nav.php");
?>
    <div class="container">
			<?php 
				include("menu-slider.php");
			?>
		<br/>
		<div class="row" style="margin-right: 0px;margin-left: 0px;" id="subir">
				<div class="col-lg-3 col-sm-4" >
						<h3 id="titular_seccion">Conozca COFIDE</h3>
						<div id="menu_secciones">												
								
						</div>
						
				</div>
				<div class="col-lg-9 col-sm-8 div_white" >
									<div class="menu-interno">
											<a href="<?php echo $host?>index">Inicio</a> <span>></span> <a href="<?php echo $host?>conozca">Conozca COFIDE</a>													
									</div>

									<h1 id="titular_subseccion"></h1>			
									<div class="row div_derecho">
											<div class="col-sm-12  div_contenido">
													
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

			<?php
					if($es_conozca>0)
					{
			?>
							listar_menu_secciones();
								function listar_menu_secciones()
									{								
											   var  parametros={selectfuncion:"listar_menu_secciones",valor:"2"};
												$.ajax({
												data:  parametros,
												url:   'admin/functionsweb.php',
												type:  'post',
												beforeSend: function () {
														$("#resultado").html("Procesando, espere por favor...");
												},
												success:  function (response) {
													
																$("#menu_secciones").html(response);
																cargarSeccionContenido(0,0);
																$("#menu_id_<?php echo $es_conozca;?>").click();
																$("#menu_id_<?php echo $es_conozca;?>").addClass("active");
													}
												});	
									}
					
					<?php
					}
					else
					{
					?>
								
								listar_menu_secciones();
								function listar_menu_secciones()
									{								
											   var  parametros={selectfuncion:"listar_menu_secciones",valor:"2"};
												$.ajax({
												data:  parametros,
												url:   'admin/functionsweb.php',
												type:  'post',
												beforeSend: function () {
														$("#resultado").html("Procesando, espere por favor...");
												},
												success:  function (response) {
													
																$("#menu_secciones").html(response);
																cargarSeccionContenido(0,0);
																$("#menu_id_14").click();
																$("#menu_id_14").addClass("active");
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
				  
				  
				function cargarSeccionContenido(id,id2)
				{
					  
					  var parametros={selectfuncion:"cargar_seccion_contenido_id",valor:id,valor2:id2,valor3:"2"};
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
															
															$(".menu-interno").html('<a href="<?php echo $host?>vista_previa/index.html">Inicio</a> <span>></span> <a href="<?php echo $host?>conozca">Conozca COFIDE</a> <span>></span> <a href="<?php echo $host?>conozcacofide/'+values[3]+'">'+values[0]+'</a>');
															document.title = values[0];
															$(".div_contenido").html(values[1]);
															if (values[2]=="images/secciones/conozca_")
															{
																$(".imagen_noticia").html('');
															}
															else
															{
																$(".imagen_noticia").html('<img src="'+values[2]+'" class="img-responsive"/>');
															}
															$(".btn-menu-seccion").removeClass("active");
															$("#menu_id_"+id).addClass("active");
														})
								}
						});	
			}
    </script>
	<script src="js/functions.js"></script>
  </body>
</html>
