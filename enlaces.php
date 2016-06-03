<?php
	$es_enlace=$_GET["id"];
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
						<h3 id="titular_seccion">  </h3>
						<a id="enlaces_nacionales" data-nombre_seccion="Entidades Nacionales" data-nombre_subseccion="Entidades Nacionales" class="btn btn-default btn-menu-seccion active" role="button" onclick="cargarEntidadesWeb(1);" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
						 Entidades Nacionales 
						</a>
							
						<a id="enlaces_internacionales" data-nombre_seccion="Entidades Internacionales" data-nombre_subseccion="Entidades Internacionales"  class="btn btn-default btn-menu-seccion" role="button" onclick="cargarEntidadesWeb(2);" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
						 Entidades Internacionales 
						</a>
							
						
				</div>
				<div class="col-lg-9 col-sm-8 div_white" >
						<div class="menu-interno">
								<a href="<?php echo $host?>vista_previa/index.html">Inicio</a> <span>></span> <a href="<?php echo $host?>enlaces">Enlaces</a>													
						</div>
						<h1 id="titular_subseccion">Entidades Nacionales </h1>			
						<div class="row div_derecho">
								
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

			
		document.title = "Enlaces";						
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
				  
				  
				  
				  function cargarEntidadesWeb(ids)
				  {
						if (ids==1)
						{
							$(".menu-interno").html('<a href="<?php echo $host?>vista_previa/index.html">Inicio</a> <span>></span> <a href="<?php echo $host?>enlaces">Enlaces</a> <span>></span> <a href="<?php echo $host?>enlace/1/entidades-nacionales">Entidades Nacionales</a>');
						}
						else
						{
							$(".menu-interno").html('<a href="<?php echo $host?>vista_previa/index.html">Inicio</a> <span>></span> <a href="<?php echo $host?>enlaces">Enlaces</a> <span>></span> <a href="<?php echo $host?>enlace/2/entidades-internacionales">Entidades Internacionales</a>');
						}
						var parametros={selectfuncion:"cargarEntidadesWeb",valor:ids};
						$.ajax({
								data:  parametros,
								url:   'admin/functionsweb.php',
								type:  'post',
								beforeSend: function () {
										$("#resultado").html("Procesando, espere por favor...");
								},
								success:  function (response) {
										 $(".div_derecho").html(response);
								}
						});	
				  
				  }
				  
				  <?php 
				  if ($es_enlace==2)
				  {
				  ?>
				  
					$("#enlaces_internacionales").click();
					$("#titular_seccion").html("Entidades Internacionales");
					$("#titular_subseccion").html("Entidades Internacionales");
					$(".menu-interno").html('<a href="<?php echo $host?>vista_previa/index.html">Inicio</a> <span>></span> <a href="<?php echo $host?>enlaces">Enlaces</a> <span>></span> <a href="<?php echo $host?>enlace/2/entidades-internacionales">Entidades Internacionales</a>');
					
					<?php
				  }
				  else
				  {
				  ?>
				  
					$("#enlaces_nacionales").click();
					$("#titular_seccion").html("Entidades Nacionales");
					$("#titular_subseccion").html("Entidades Nacionales");
					$(".menu-interno").html('<a href="<?php echo $host?>vista_previa/index.html">Inicio</a> <span>></span> <a href="<?php echo $host?>enlaces">Enlaces</a> <span>></span> <a href="<?php echo $host?>enlace/1/entidades-nacionales">Entidades Nacionales</a>');
					<?php
				  }
				  ?>
				
				
    </script>
	<script src="js/functions.js"></script>
  </body>
</html>
