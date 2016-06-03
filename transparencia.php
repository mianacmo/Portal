<?php
	$es_relacion=$_GET["id"];
	
	include("header.php");
	include("nav.php");
?>
    <div class="container">
			<?php 
				include("menu-slider.php");
			?>
		<br/>
		<div class="row" style="margin-right: 0px;margin-left: 0px;" id="subir">

				<div class="col-lg-12 div_white" >
									<div class="menu-interno">
											<a href="<?php echo $host?>index">Inicio</a> <span>></span> <a href="<?php echo $host?>transparencias">Transparencia</a>													
									</div>

									<h1 id="titular_subseccion"></h1>			
									<div class="row div_derecho">
											<div class="col-sm-12 div_primeras_lineas" style="margin-bottom:20px;">
													
											</div>
											<div class="col-sm-12 " style="text-align:center;">
													
													<a class="btn btn-primary collapse1" role="button" data-toggle="collapse" href="#collapse1" aria-expanded="false" aria-controls="collapse1">
														 Portal de Transparencia Estándar
													</a>
													<a class="btn btn-primary collapse1" id="collapse_2" role="button" data-toggle="collapse" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
														 Información Complementaria
													</a>
													<a class="btn btn-primary collapse1" role="button" data-toggle="collapse" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
														 Acceso a la Información
													</a>
											</div>
											<div class="col-sm-12  ">
														</br>
														<div class="collapse" id="collapse1">
														  <div class="well well_transparente collapse_portal">
															
														  </div>
														</div>
														<div class="collapse in" id="collapse2">
														  <div class="well well_transparente collapse_informacion_complementaria">
														
														  </div>
														</div>
														<div class="collapse" id="collapse3">
														  <div class="well well_transparente collapse_acceso">
														
														  </div>
														</div>
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
document.title = "Transparencia";
			<?php
					if($es_relacion>0)
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
								
								cargarSeccionContenido(60,0);
								cargarSeccionContenido(59,0);
								cargarSeccionContenido(58,0);
								

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
				  
				  
				
			
			$(".collapse1").click(function(){
						$(".collapse").removeClass("in");

						if ($(this).attr("aria-controls")=="collapse2")
						{
							cargarInformacionComplementaria();
						}
			});
			

			
			function cargarInformacionComplementaria()
			{
					var parametros={selectfuncion:"cargar_menu_transparencias",valor:"7"};
								  $.ajax({
											data:  parametros,
											url:   'admin/functionsweb.php',
											type:  'post',
											beforeSend: function () {
													$("#resultado").html("Procesando, espere por favor...");
											},
											success:  function (response) {
															console.log("hola");
															console.log(response);
															$(".collapse_informacion_complementaria").html(response);			
											}
									});	
						
			}
			
			function cargarSeccionMenuTransparencia(id1,id2,title)
			{			
					var parametros={selectfuncion:"cargarSeccionMenuTransparencia",valor:"7",valor1:id1,valor2:id2};
								  $.ajax({
											data:  parametros,
											url:   'admin/functionsweb.php',
											type:  'post',
											beforeSend: function () {
													$(".collapse_informacion_complementaria").html("<div class='row'><div class='col-sm-8'><h3>"+title+"</h3></div><div class='col-sm-4' align='right'><a role='button' data-toggle='collapse' href='#' onclick='cargarInformacionComplementaria();return false;' style='    margin-top: 20px;margin-bottom: 10px; display: block;' class='collapse1 menu-interno' aria-controls='collapse2'><span style='    color: #337ab7;'><<</span>VOLVER</a></h3></div></div> ");
											},
											success:  function (response) {
															console.log(response);
															$(".collapse_informacion_complementaria").append(response);			
											}
									});	
			}
			
			function cargarSeccionContenido(id,id2)
				{
								var contenido="";
								  var parametros={selectfuncion:"cargar_seccion_contenido_id",valor:id,valor2:id2,valor3:"8"};
								  $.ajax({
											data:  parametros,
											url:   'admin/functionsweb.php',
											type:  'post',
											beforeSend: function () {
													$("#resultado").html("Procesando, espere por favor...");
											},
											success:  function (response) {
															$.each(JSON.parse(response), function(index, values) {		
																	if (id==60)
																	{$(".div_primeras_lineas").html(values[1]);}
																	else if (id==59)
																	{$(".collapse_portal").html(values[1]);}
																	else if (id==58)
																	{$(".collapse_acceso").html(values[1]);}
																
																	contenido=values[1];
																		
																	})
											}
									});	
									console.log(contenido + "?");
					return contenido;
			}
			
			$(window).load(function(){
				$("#collapse_2").click();
				$("#collapse_2").addClass("active");
			})
    </script>
	<script src="js/functions.js"></script>
  </body>
</html>
