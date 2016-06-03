<?php
	$es_noticia=$_GET["id"];
	
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
						<h3 id="titular_seccion">Noticias y Novedades</h3>
						<img src="images/noticias.png" class="img-responsive"/>
							
						
				</div>
				<div class="col-lg-9 col-sm-8 div_white" >
									<div class="menu-interno">
											<a href="<?php echo $host?>index">Inicio</a> <span>></span> <a href="<?php echo $host?>noticias">noticias y novedades</a>													
									</div>
					<?php 
							if($es_noticia>0)
							{
							?>									
									<div id="imprimeme" style="display:none;">
											<h3 class="titular_subseccion">Noticias y Novedades</h3>	
											<!--
											<div class="row div_derecho" id="" style="display:inline-flex">
												
													<div class="col-sm-8  div_contenido" style="width:70%;margin-right:3%;">
															
													</div>
													<div class="col-sm-4 " style="margin-left:3%;width:24%">
															<img src="" id="imagen_noticia_2" class="img-responsive" style="width:100%;height:auto;"/>
													</div>

											</div>
											-->
											<div class="row div_derecho" id="" >
												
													<div class="col-sm-8  div_contenido" style="font-size:12px;text-transform:justify;">
															
													</div>
													<div class="col-sm-4 " style="">
															<img src="" id="imagen_noticia_2" class="img-responsive" style="width:100%;height:auto;"/>
													</div>

											</div>
								</div>
									<h1 class="titular_subseccion"></h1>	
									
									
									<div class="row div_derecho" id="">
											<div class="col-sm-12">
													<div class="WEB_CONTE_barraHerramietas_f1_c1">
														<div class="WEB_iconoImpresionSuperior" title="Imprimir" onclick="imprimir();"></div>
														<div class="WEB_iconoFavoritos" class="" id="addFavoriteIcon" title="Agregar a favoritos" onclick="addToFavorites()"></div>
													</div>
													<p></p>
											</div>
											</br>
											<div class="col-sm-8  div_contenido">
													
											</div>
											<div class="col-sm-4 ">
													<img src="" id="imagen_noticia" class="img-responsive"/>
											</div>

									</div>
									
							<?php
							}
							else
							{
					?>		
								<div id="imprimeme" style="display:none;">
									<h3 class="titular_subseccion"></h3>	
									
									<div class=" div_derecho_2" style="margin-top:10px;">
											
									</div>
								</div>	
						
									
									<div class="col-sm-12">
													<div class="WEB_CONTE_barraHerramietas_f1_c1" style="margin-bottom: 22px;">
														<div class="WEB_iconoImpresionSuperior" title="Imprimir" onclick="imprimir();"></div>
														<div class="WEB_iconoFavoritos" class="" id="addFavoriteIcon" title="Agregar a favoritos" onclick="addToFavorites()"></div>
													</div>
													
									</div>
									<div class="separador_div_derecho" style="margin-top: 35px;"> </div>
									<div class="col-sm-6">
										<p class="visualizando"></p>
									</div>
									<div class="col-sm-6" align="right">
										<p class="COM_paginador" style="text-align:right !important;"></p>
									</div>
									<div class=" div_derecho" style="margin-top:40px;">
											
									</div>
									<div class="col-sm-6">
										<p class="visualizando"></p>
									</div>
									<div class="col-sm-6" align="right">
										<p class="COM_paginador" style="text-align:right !important;"></p>
									</div>
						<?php
							}
						?>
						</br></br>
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
					if($es_noticia>0)
					{
			?>
							cargar_noticia_id();
							function cargar_noticia_id()
								{
									var parametros={selectfuncion:"cargar_noticia_id",valor:"<?php echo $es_noticia;?>"};
									$.ajax({
									data:  parametros,
									url:   'admin/functionsweb.php',
									type:  'post',
									beforeSend: function () {
											$("#resultado").html("Procesando, espere por favor...");
									},
									success:  function (response) {
													$.each(JSON.parse(response), function(index, values) {	
															document.title = values[0];
															$(".titular_subseccion").html(values[0]);
															$(".div_contenido").html(values[1]);
															$("#imagen_noticia").attr("src",values[2]);
															$("#imagen_noticia_2").attr("src","http://infomaca.com.ar/" + values[2]);
															$(".div_contenido").append("<p>Fuente: " + values[3] + "</p>");
															$(".div_contenido").append("<p>Fecha Hora: " + values[4] + "</p>");
														})
										}
									});	
								}
					
					<?php
					}
					else
					{
					?>
								var page=0;
								var pages=4;
								cargar_noticias_noticias();
								function cargar_noticias_noticias()
									{
									console.log("hola");
										var parametros={selectfuncion:"cargar_noticias_noticias",page:page,pages:pages};
										$.ajax({
										data:  parametros,
										url:   'admin/functionsweb.php',
										type:  'post',
										beforeSend: function () {
												$(".div_derecho").html("");
																$(".div_derecho_2").html("");
										},
										success:  function (response) {
											
														var cantidad;
														$.each(JSON.parse(response), function(index, values) {		
																if (index==0)
																{
																
																	$(".visualizando").html("VISUALIZANDO RESULTADOS "+(page+1)+" - "+(page+pages)+"  DE ("+values[2]+")");
																	cantidad=values[2];
																	
																}
																document.title = "Noticias";
																$(".div_derecho").append(values[0]);
																$(".div_derecho_2").append(values[1]);
																
															})
															var i=0;
															if (i==page)
															{
																var paginas="<span> PÁGINA </span> <a class='paginacion_actual' href='#' onclick='irAPaginacion("+i+");return false;' >" + (i + 1) + "</a>";
															}
															else
															{
																var paginas="<span> PÁGINA </span> <a href='#' onclick='irAPaginacion("+i+");return false;' >" + (i + 1) + "</a>";
															}
															for (i=1;i<(cantidad/pages);i++)
															{
																if ((i*pages)==page)
																{
																	paginas=paginas + "<span> - </span><a class='paginacion_actual' href='#' onclick='irAPaginacion("+i+");return false;' >" + (i+1) + "</a>";
																}
																else
																{
																	paginas=paginas + "<span> - </span><a href='#' onclick='irAPaginacion("+i+");return false;' >" + (i+1) + "</a>";
																}
																
															}
															$(".COM_paginador").html(paginas);
											}
										});	
									}
									
									function irAPaginacion(num)
									{
										page=pages*num;
										cargar_noticias_noticias();
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
				function addToFavorites()
	{
		
		var url = window.location;
		var titulo = window.title;
	 

			if (window.sidebar) { 
				// Mozilla Firefox Bookmark
				window.sidebar.addPanel(titulo, url,"");
			} 
			else if( window.external ) { // IE Favorite
				if(window.ActiveXObject) {
				//ie
				window.external.AddFavorite( url, titulo);
				} 
				else {//chrome
				  alert('Presiona Crtl+D para Agregar a Marcadores');
				}
			} 
			else if(window.opera && window.print) { // Opera
			  return true; 
			}
			else { //safri
			 alert('Presiona Crtl+D para Agregar a Marcadores'); }
	}
    </script>

	<script src="js/functions.js"></script>
  </body>
</html>
