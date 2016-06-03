<?php
	include("header.php");
	include("nav.php");
	echo var_dump($_SERVER);
?>

    <div class="container">

			<?php 
				include("menu-slider.php");
			?>
			<div class="row" align="center">
				<div class="col-lg-3 col-sm-6 bannercofide1">
								<a href="./productosyservicios/1/apoyo-a-la-inversion-productiva-de-infraestructura-y-de-medio-ambiente" target="_self" title=""><img src="./Cofide_files/pixel.gif" title="">
							</a>
				</div>
				<div class="col-lg-3 col-sm-6 bannercofide2">
								<a href="./productosyservicios/6/apoyo-a-la-mype" target="_self" title=""><img src="./Cofide_files/pixel.gif" title=""></a>
							</div>
				<div class="col-lg-3 col-sm-6 bannercofide3">
								<a href="./productosyservicios/9/apoyo-al-proceso-de-inclusiaon-financiera" target="_self" title=""><img src="./Cofide_files/pixel.gif" title=""></a>
							</div>
				<div class="col-lg-3 col-sm-6 bannercofide4">
								<a href="./busquedadelaexcelencia" target="_self" title=""><img src="./Cofide_files/pixel.gif" title=""></a>
							</div>
		</div>
		<br/>
		<div class="row">
				<div class="col-lg-12" style="display: -webkit-box;display:flex;">
						<img src="images/noticias_1.png" />
						<!-- <img src="images/noticias_2.png" style="width: 100%;height: 50px;"> -->
						<div style="background-image:url('images/noticias_2.png');" id="image_noticias_2"></div>
						<img src="images/noticias_3.png" />
						<a href="./noticias" class="ver_todas">VER TODAS </a>
						<img src="images/noti_flecha_izq.png" class="noticias_prev" />
						<img src="images/noti_flecha_der.png" class="noticias_next" />
				</div>
				
		</div>
		<br/>
		<div class="row">
				<div class="col-lg-6 col-sm-6 col-xs-6 noticia_div"  style="">
						<div class="row" style="    padding: 5px;padding-bottom: 5px;padding-top: 20px;">
								<div class="col-lg-3 col-sm-12" style="background-color:white;    overflow: hidden;height: 95px;" align="center">
									<a href="" class="linknoticia1"><img src="" class="img-responsive"  style="height:100px;"  id="imagen_noticia_1"/></a>
								</div>
								<div class="col-lg-9 col-sm-12" style="background-color:white;text-align:justify;">
										<a href="#" class="noticiahometitulo linknoticia1" id="titulo_noticia_1"></a>
										<a href="" class="linknoticia1"><p class="noticiahomedescripcion" id="descripcion_noticia_1"></p></a>
										<img src="images/noticiafecha.png" class="fondo_fecha"  />
										<span  class="fecha_noticia"  id="fecha_noticia_1"></span>
								</div>
						</div>
				</div>
				<div class="col-lg-6 col-sm-6 col-xs-6 noticia_div" style="">
						<div class="row" style="    padding: 5px;padding-bottom: 5px;padding-top: 20px;">
								<div class="col-lg-3 col-sm-12" style="background-color:white;    overflow: hidden;height: 95px;" align="center">
									<a href="" class="linknoticia2"><img src="" class="img-responsive" style="height:100px;" id="imagen_noticia_2"/></a>
								</div>
								<div class="col-lg-9 col-sm-12" style="background-color:white;text-align:justify;">
										<a href="#" class="noticiahometitulo linknoticia2" id="titulo_noticia_2"></a>
										<a href="" class="linknoticia2"><p class="noticiahomedescripcion" id="descripcion_noticia_2"></p></a>
										<img src="images/noticiafecha.png" class="fondo_fecha"  />
										<span  class="fecha_noticia" id="fecha_noticia_2"  ></span>
								</div>
						</div>
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

			
			var array_imagen=[];
			var array_titulo=[];
			var array_descripcion=[];
			var array_fecha=[];
			var array_links=[];
			var posicion=0;
			var condicion=0;
			
			cargarArrays();
			function cargarArrays() {

				  var parametros={selectfuncion:"listar_noticias_home"};
					  $.ajax({
								data:  parametros,
								url:   'admin/functionsweb.php',
								type:  'post',
								beforeSend: function () {
										$("#resultado").html("Procesando, espere por favor...");
								},
								success:  function (response) {
											console.log(response);
											var contenido="";
											var titulo="";
											$.each(JSON.parse(response), function(index, values) {		
												contenido=replaceAll(values[2],"###",'"');
												titulo=replaceAll(values[1],"###",'"');
												contenido=replaceAll(contenido,"$$$","'");
												titulo=replaceAll(titulo,"$$$","'");
												array_imagen[index]=values[0];
												array_titulo[index]=titulo;
												array_descripcion[index]=contenido;
												array_fecha[index]=values[3];
												array_links[index]=values[4];
											});
											
												
											
											$("#imagen_noticia_1").attr("src",array_imagen[posicion]);
											$("#titulo_noticia_1").html(array_titulo[posicion]);
											$("#descripcion_noticia_1").html(array_descripcion[posicion]);
											$("#fecha_noticia_1").html(array_fecha[posicion]);
											$(".linknoticia1").attr("href",array_links[posicion]);
											posicion++;
											$("#imagen_noticia_2").attr("src",array_imagen[posicion]);
											$("#titulo_noticia_2").html(array_titulo[posicion]);
											$("#descripcion_noticia_2").html(array_descripcion[posicion]);
											$("#fecha_noticia_2").html(array_fecha[posicion]);
											$(".linknoticia2").attr("href",array_links[posicion]);
											posicion--;		
								}
						});	
				}

		  
			
			$(".noticias_prev").click(function(){
				posicion=posicion - 2;				
				condicion=0;
				if (array_descripcion[posicion]==undefined)
				{
					condicion=1;
					posicion=posicion + 2;	
				}
				else
				{
					$("#imagen_noticia_1").attr("src",array_imagen[posicion]);
					$("#titulo_noticia_1").html(array_titulo[posicion]);
					$("#descripcion_noticia_1").html(array_descripcion[posicion]);
					$("#fecha_noticia_1").html(array_fecha[posicion]);
					$(".linknoticia1").attr("href",array_links[posicion]);
				}
				posicion++;				
				if (array_descripcion[posicion]==undefined  || condicion==1)
				{
					
				}
				else
				{
					$("#imagen_noticia_2").attr("src",array_imagen[posicion]);
					$("#titulo_noticia_2").html(array_titulo[posicion]);
					$("#descripcion_noticia_2").html(array_descripcion[posicion]);
					$("#fecha_noticia_2").html(array_fecha[posicion]);
					$(".linknoticia2").attr("href",array_links[posicion]);
				}
				posicion--;
			});
			
			$(".noticias_next").click(function(){
				posicion=posicion + 2;		
				condicion=0;				
				if (array_descripcion[posicion]==undefined)
				{
					 condicion=1;
					 posicion=posicion - 2;	
				}
				else
				{
					$("#imagen_noticia_1").attr("src",array_imagen[posicion]);
					$("#titulo_noticia_1").html(array_titulo[posicion]);
					$("#descripcion_noticia_1").html(array_descripcion[posicion]);
					$("#fecha_noticia_1").html(array_fecha[posicion]);
					$(".linknoticia1").attr("href",array_links[posicion]);
				}
				posicion++;				
				if (array_descripcion[posicion]==undefined || condicion==1)
				{
					if (condicion==0)
					{
						$("#imagen_noticia_1").attr("src",array_imagen[posicion-2]);
						$("#titulo_noticia_1").html(array_titulo[posicion-2]);
						$("#descripcion_noticia_1").html(array_descripcion[posicion-2]);
						$("#fecha_noticia_1").html(array_fecha[posicion-2]);
						$(".linknoticia1").attr("href",array_links[posicion-2]);
						$("#imagen_noticia_2").attr("src",array_imagen[posicion-1]);
						$("#titulo_noticia_2").html(array_titulo[posicion-1]);
						$("#descripcion_noticia_2").html(array_descripcion[posicion-1]);
						$("#fecha_noticia_2").html(array_fecha[posicion-1]);
						$(".linknoticia2").attr("href",array_links[posicion-1]);
					}
				}
				else
				{
					$("#imagen_noticia_2").attr("src",array_imagen[posicion]);
					$("#titulo_noticia_2").html(array_titulo[posicion]);
					$("#descripcion_noticia_2").html(array_descripcion[posicion]);
					$("#fecha_noticia_2").html(array_fecha[posicion]);
					$(".linknoticia2").attr("href",array_links[posicion]);
				}
				posicion--;
			});
			
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
								var linea4=datos[3];
								$("#footer_1").html(linea1);
								$("#footer_2").html(linea2);
								$("#footer_3").html(linea3);
								$("#contactenos_url").attr("href",linea4);
								
								
						}); 
					 
						  
				  }
				
    </script>
	<script src="js/functions.js"></script>
  </body>
</html>
