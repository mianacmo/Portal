<?php include( "header.php"); include( "nav.php"); ?>
<div class="container">
	<?php include( "menu-slider.php"); ?>
	<br/>
	<div class="row" style="margin-right: 0px;margin-left: 0px;" id="subir">
		<div class="col-lg-3 col-sm-4 col-izquierda-2"> <img src="images/contactenos.png" class="img-responsive" /> </div>
		<div class="col-lg-9 col-sm-12 div_white">
			<div class="menu-interno"> <a href="<?php echo $host?>index">Inicio</a> <span>></span> <a href="">Trabaja con Nosotros</a>
			<h1 id="titular_subseccion"></h1>
			<div id="formulario">
				<div class="row">
					<label class="col-sm-12">Trabaja con Nosotros</label>
					<div class="col-sm-3 padding5"><span>Nombres:  *</span>
					</div>
					<div class="col-sm-9">
						<input onkeypress="return soloLetras(event)" class="form-control" type="text" id="nombre" />
					</div>
				</div>
				</br>
				<div class="row">
					<div class="col-sm-3 padding5"><span>Apellido Paterno:  *</span>
					</div>
					<div class="col-sm-9">
						<input onkeypress="return soloLetras(event)" class="form-control" type="text" id="apellido_paterno" />
					</div>
				</div>
				</br>
				<div class="row">
					<div class="col-sm-3 padding5"><span>Apellido Materno:  *</span>
					</div>
					<div class="col-sm-9">
						<input onkeypress="return soloLetras(event)" class="form-control" type="text" id="apellido_materno" />
					</div>
				</div>
				</br>
				<div class="row">
					<div class="col-sm-3 padding5"><span>Dirección: *</span>
					</div>
					<div class="col-sm-9">
						<input class="form-control" type="text" id="direccion_contactarse" />
					</div>
				</div>
				</br>
				<div class="row">
					<div class="col-sm-3 padding5"><span>Email:  *</span>
					</div>
					<div class="col-sm-6">
						<input class="form-control" type="text" id="correo" />
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-sm-3 padding5"><span>Teléfono: *</span>
					</div>
					<div class="col-sm-6">
						<input onKeyPress="return soloNumeros(event)" class="form-control" type="text" id="telefono" />
					</div>
				</div>
				</br>
				<form id="file_upload_form" method="post" enctype="multipart/form-data" action="admin/subirArchivo.php">
					<div class="row">
						<div class="col-sm-3 padding5"><span>Adjuntar CV: *</span>
						</div>
						<div class="col-sm-6">
							<input class="form-control" type="file" id="file" name="file"/>
						</div>
						<div class="col-sm-3"><span>Formato .doc, .docx, .pdf <br>Peso Máximo 4 MB</span>
						</div>							
					</div>
					</br>
					<div class="row">
						<div class="col-sm-3 padding5"><span>Área de Estudios: *</span>
						</div>
						<div class="col-sm-4">
							<select class="form-control" id="area_select" name="area_select">
								<option value="" selected>Seleccione</option>
								<option value="administracion" >Administración</option>
								<option value="contabilidad">Contabilidad</option>
								<option value="derecho">Derecho</option>
								<option value="economia">Economía</option>
								<option value="ingeconomica">Ingeniería Económica</option>
								<option value="ingindustrial">Ingeniería Industrial</option>
								<option value="otros">Otros</option>
							</select>
						</div>					
					</div>
					<div style="display:none">
						<input type="text" id="archivo" />
					</div>
					<iframe src="" id="upload_target" name="upload_target"  style="border:0px solid white; display:none"onload="on_load(this)"></iframe>
				</form>
				</br>
				<div class="row">
					<div class="col-sm-3 padding5"><span>Nivel Alcanzado: *</span>
					</div>
					<div class="col-sm-4">
						<select class="form-control" id="nivel_select">
							<option value="" selected>Seleccione</option>
							<option value="Doctor">Doctor</option>
							<option value="Magister">Magister</option>
							<option value="Profesional">Profesional</option>
							<option value="Bachiller">Bachiller</option>
							<option value="Técnico">Técnico</option>
						</select>
					</div>
				</div>
				</br>
				<div class="2-large columns" style="text-align:center;margin:15px 0px;">
					<input id="enviar_trabajo" type="submit" class="button " value="Enviar"/>
				</div>
			</div>
			</br>
			</br>
			<div class="separador_div_derecho"> </div>
			<div class="subir-link"><a href="<?php echo "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>#subir">Subir <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span></a>
			</div>
		</div>
	</div>
	<br/>
	<?php include( "footer.php"); ?> </div>
<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="lightslider-master/src/js/lightslider.js"></script>
<script>
	function on_load(iframe) {
		try {
			var doc = iframe.contentDocument || iframe.contentWindow.document;
			$("#nombre").val(doc.body.innerHTML(0, 50));
		} catch (e) {
			console.log('exception: ' + e);
		}
	}
	cargar();

	function cargar() {
		var parametros = {
			selectfuncion: "listar_slider"
		};
		$.ajax({
			data: parametros,
			url: 'admin/functionsweb.php',
			type: 'post',
			beforeSend: function() {
				$("#resultado").html("Procesando, espere por favor...");
			},
			success: function(response) {
				var datos = response.split("##");
				var tiempo = parseInt(datos[1]) + 2000;
				margin = (50 - parseInt(datos[2]) * 5) + "%";
				$("#image-gallery").html(datos[0]);
				$('#image-gallery').lightSlider({
					adaptiveHeight: true,
					item: 1,
					loop: true,
					auto: true,
					speed: 2000,
					pause: tiempo,
					pager: false
				});
			}
		});
	}
	listar_footer();

	function listar_footer() {
		$.getJSON("admin/listarTextos.php", function(data) {
			var datos = data.split("##");
			var linea1 = datos[0];
			var linea2 = datos[1];
			var linea3 = datos[2];
			$("#footer_1").html(linea1);
			$("#footer_2").html(linea2);
			$("#footer_3").html(linea3);
		});
	}
</script>
<script src="js/functions2.js"></script>
</body>

</html>