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
						
						<h3 id="titular_seccion">Búsqueda</h3>
						<img src="images/7_transparencia2.jpg" class="img-responsive"/>
							
						
				</div>
				<div class="col-lg-9 col-sm-8 div_white" >
									</br>																			
									<h1 id="titular_subseccion">Resultado de la Búsqueda</h1>			
									<div class="row div_derecho">
											<div class="col-sm-12  div_contenido">
														<table id="example" class="display table table-hover" cellspacing="0" width="100%">
															<thead style="display:none;">
																<tr>
																	<th>Name</th>

																</tr>
															</thead>

															<tbody id="contenido_tabla">
																
																
															</tbody>
														</table>
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
			
			cargar_busqueda();
			function cargar_busqueda()
				{
						
						var q="<?php echo $_GET["q"];?>";
						if (q=="")
						{
								q="cofide";
						}
					 	var parametros={selectfuncion:"cargar_busqueda",valor:q};
						$.ajax({
								data:  parametros,
								url:   'admin/functionsweb.php',
								type:  'post',
								beforeSend: function () {
										$("#resultado").html("Procesando, espere por favor...");
								},
								success:  function (response) {

														document.title = "Búsqueda";
														$("#contenido_tabla").html(response);
														$('#example').DataTable( {
																"order": [[ 0, "desc" ]]
															} );
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

