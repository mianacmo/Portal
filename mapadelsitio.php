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
						
						<h3 id="titular_seccion">Mapa de Sitio</h3>
						<img src="images/8_MapaDeSitio.png" class="img-responsive"/>
							
						
				</div>
				<div class="col-lg-9 col-sm-8 div_white" >
									</br>																			
									<h1 id="titular_subseccion"></h1>	
									<a style="display:none;" href="" id="iralink" target="_blank">link</a>
									<div class="row div_derecho">
											<div class="col-sm-12  div_contenido">
														
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
	<script type="text/javascript" src="DataTables/datatables.js"></script>
	<script src="lightslider-master/src/js/lightslider.js"></script> 
		

	 <script>
			document.title = "Mapa de Sitio";
			cargar_mapa();
			function cargar_mapa()
				{

					 	var parametros={selectfuncion:"cargar_mapa"};
						$.ajax({
								data:  parametros,
								url:   'admin/functionsweb.php',
								type:  'post',
								beforeSend: function () {
										$("#resultado").html("Procesando, espere por favor...");
								},
								success:  function (response) {

										$(".div_contenido").html(response);

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
				function irAlLink(url)
				{
						if (url==3)
						{
							location.href="./" + $("#menu_memoria").attr("href");
						}
						else
						{
						location.href=url;
						}
				}
    </script>
	<script src="js/functions.js"></script>
  </body>
</html>

