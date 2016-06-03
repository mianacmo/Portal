<?php include( "header.php"); include( "nav.php"); ?>
<div class="container">
	<?php include( "menu-slider.php"); ?>
	<br/>
	<div class="row" style="margin-right: 0px;margin-left: 0px;" id="subir">
		<div class="col-lg-3 col-sm-4 col-izquierda-2"> <img src="images/contactenos.png" class="img-responsive" /> </div>
		<div class="col-lg-9 col-sm-12 div_white">
			<div class="menu-interno"> <a href="<?php echo $host?>index">Inicio</a> <span>></span> <a href="<?php echo $host?>contactenos">Contáctenos</a> <span>></span> <a href="<?php echo $host?>sugerencia">Sugerencia</a> </div>
			<h1 id="titular_subseccion">Contáctenos</h1>
			<div id="formulario">
				<div class="row">
					<label class="col-sm-12">I. DATOS PERSONALES</label>
					<div class="col-sm-3 padding5"><span>Nombres y Apellidos</span>
					</div>
					<div class="col-sm-9">
						<input onkeypress="return soloLetras(event)" class="form-control" type="text" id="nombre_apellido" />
					</div>
				</div>
				</br>
				<div class="row">
					<div class="col-sm-3 padding5"><span>Documento de Identidad</span>
					</div>
					<div class="col-sm-4">
						<select class="form-control" id="dni_select">
							<option value="" selected>Seleccione</option>
							<option value="DNI">DNI</option>
							<option value="LM">LM</option>
							<option value="CE">CE</option>
							<option value="Otro">Otro</option>
						</select>
					</div>
					<div class="col-sm-1 padding5"><span>Número</span>
					</div>
					<div class="col-sm-4">
						<input onKeyPress="return soloNumeros(event)" class="form-control" type="text" id="dni" />
					</div>
				</div>
				</br>
				<div class="row">
					<div class="col-sm-3 padding5"><span>Dirección para contactarse *</span>
					</div>
					<div class="col-sm-9">
						<input class="form-control" type="text" id="direccion_contactarse" />
					</div>
				</div>
				</br>
				<div class="row">
					<div class="col-sm-3 padding5"><span>Teléfono *</span>
					</div>
					<div class="col-sm-9">
						<input onKeyPress="return soloNumeros(event)" class="form-control" type="text" id="telefono" />
					</div>
				</div>
				</br>
				<div class="row">
					<div class="col-sm-3 padding5"><span>Correo Electrónico *</span>
					</div>
					<div class="col-sm-9">
						<input class="form-control" type="text" id="correo" />
					</div>
				</div>
				</br>
				<div class="row">
					<label class="col-sm-12">II. DATOS REFERENTES A LA SUGERENCIA, QUEJA O DENUNCIA</label> <span class="col-sm-12">Unidad(es) Organizativa(s) involucrada(s):</span> </div>
				</br>
				<div class="row"> <span class="col-xs-6"><input  type="checkbox" class="checkbox_mensaje" value="Gerencia General	"> Gerencia General	</span> <span class="col-xs-6"><input  type="checkbox" class="checkbox_mensaje" value="Organo de Control Institucional"> Organo de Control Institucional</span> <span class="col-xs-6"><input  type="checkbox" class="checkbox_mensaje" value="Unidad de Auditoría Interna"> Unidad de Auditoría Interna</span> <span class="col-xs-6"><input  type="checkbox" class="checkbox_mensaje" value="Oficial de Cumplimiento"> Oficial de Cumplimiento</span> <span class="col-xs-6"><input  type="checkbox" class="checkbox_mensaje" value="optiGerencia de Finanzason1"> Gerencia de Finanzas</span> <span class="col-xs-6"><input  type="checkbox" class="checkbox_mensaje" value="Gerencia de Intermediación e Innovación Financiera"> Gerencia de Intermediación e Innovación Financiera</span> <span class="col-xs-6"><input  type="checkbox" class="checkbox_mensaje" value="Gerencia de Negocios"> Gerencia de Negocios</span> <span class="col-xs-6"><input  type="checkbox" class="checkbox_mensaje" value="Gerencia de Fideicomisos y Comisiones de Confianza"> Gerencia de Fideicomisos y Comisiones de Confianza</span> <span class="col-xs-6"><input  type="checkbox" class="checkbox_mensaje" value="Gerencia de Medios"> Gerencia de Medios	</span> <span class="col-xs-6"><input  type="checkbox" class="checkbox_mensaje" value="Gerencia de Desarrollo"> Gerencia de Desarrollo</span> <span class="col-xs-6"><input  type="checkbox" class="checkbox_mensaje" value="Gerencia de Riesgos"> Gerencia de Riesgos	</span> <span class="col-xs-6"><input  type="checkbox" class="checkbox_mensaje" value="Gerencia de Planeamiento y Control de Gestión"> Gerencia de Planeamiento y Control de Gestión</span> <span class="col-xs-6"><input  type="checkbox" class="checkbox_mensaje" value="Gerencia de Asesoría Jurídica"> Gerencia de Asesoría Jurídica	</span> <span class="col-xs-6"><input  type="checkbox" class="checkbox_mensaje" value="Gerencia de Gestión Humana y Administración">  Gerencia de Gestión Humana y Administración</span> <span class="col-xs-6"><input  type="checkbox" class="checkbox_mensaje" value="Gerencia de Tecnologías de Información"> Gerencia de Tecnologías de Información		</span> <span class="col-xs-6"><input  type="checkbox" class="checkbox_mensaje" value="Dpto. de Marketing y Comunicaciones">  Dpto. de Marketing y Comunicaciones</span> </div>
				</br>
				<div class="row"> <span class="col-sm-12">Marque la casilla que proceda:</span> <span class="col-xs-4"><input  type="checkbox" class="checkbox_mensaje_2" value="Sugerencia"> Sugerencia	</span> <span class="col-xs-4"><input  type="checkbox" class="checkbox_mensaje_2" value="Queja"> Queja</span> <span class="col-xs-4"><input  type="checkbox" class="checkbox_mensaje_2" value="Denuncia"> Denuncia</span> </div>
				</br>
				<div class="row">
					<div class="col-sm-3 padding5"><span>Fecha de ocurrencia</span>
					</div>
					<div class="col-sm-9">
						<input class="form-control" type="text" id="fecha_ocurrencia" placeholder="dd/mm/yyyy" />
					</div>
				</div>
				</br>
				<div class="row">
					<label class="col-sm-12">III. MATERIA OBJETO DE LA SUGERENCIA QUEJA O DENUNCIA</label>
					<textarea class="col-sm-12 form-control" style="    margin: 2%;width: 96%;" id="mensaje_ocurrencia"></textarea>
				</div>
				</br>
				<div class="row">
					<p class="col-sm-12">Las sugerencias, quejas y denuncias que se formulen a través del presente formato son de carácter CONFIDENCIAL. Una vez evaluadas y concluidos los procesos correspondientes para su atención, COFIDE evaluará la publicación de los resultados en su portal web. Se considerarán recibidos en el día, aquellos formatos de sugerencias, quejas y denuncias que se hayan depositado físicamente en los buzones de la Corporación o recibidos a través de su sitio web hasta las 4 p.m. hora en que se recogerán y descargarán, respectivamente. Aquellos recibidos pasada las 4 p.m. se considerarán como recibidos al día laborable siguiente. </p>
					<p class="col-sm-12"> El envío de este formulario es gratuito. Gracias por su colaboración. </p>
					<p class="col-sm-12"> Podrá utilizar este formulario para casos de sugerencias, quejas o denuncias dirigidas a COFIDE, las cuales serán materia de atención por las áreas competentes y de conocimiento de la UAI. </p>
				</div>
				<div class="row">
					<div class="col-sm-3 padding5"><span>Fecha</span>
					</div>
					<div class="col-sm-9">
						<input class="form-control" type="text" id="fecha" disabled value="<?php echo date(" d/m/Y "); ?>" />
					</div>
				</div>
				</br>
				<div class="row">
					<div class="col-sm-3 padding5"><span>Nombres y Apellidos</span>
					</div>
					<div class="col-sm-9">
						<input onkeypress="return soloLetras(event)" class="form-control" type="text" id="nombre_apellido_2" />
					</div>
				</div>
				</br>
				<div class="row">
					<div class="col-sm-3 padding5"><span>DNI</span>
					</div>
					<div class="col-sm-9">
						<input onKeyPress="return soloNumeros(event)" class="form-control" type="text" id="dni_2" />
					</div>
				</div>
				</br>
				<div class="2-large columns" style="text-align:center;margin:15px 0px;">
					<input id="enviar_sugerencia" type="submit" class="button " value="Enviar" />
					<input type="submit" class="button  secondary" value="Limpiar" id="limpiar" /> </br>
					<label id="mensaje"> </label>
				</div>
			</div>
			</br>
			</br>
			<div class="separador_div_derecho"> </div>
			<div class="subir-link"><a href="<?php echo " http:// ".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>#subir">Subir <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span></a>
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
	cargarSeccionContenido(0, 0);

	function cargarSeccionContenido(id, id2) {
		var parametros = {
			selectfuncion: "cargar_seccion_contenido_id",
			valor: id,
			valor2: id2,
			valor3: "10"
		};
		$.ajax({
			data: parametros,
			url: 'admin/functionsweb.php',
			type: 'post',
			beforeSend: function() {
				$("#resultado").html("Procesando, espere por favor...");
			},
			success: function(response) {
				$.each(JSON.parse(response), function(index, values) {
					$("#titular_subseccion").html(values[0]);
					var items = values[1];
					items = items.split("___");
					$(".contactenos-telefono").html("<strong>Teléfono:</strong><br>" + items[0]);
					$(".contactenos-fax").html("<strong>Fax:</strong><br>" + items[1]);
					$(".contactenos-horario").html("<strong>Horario de atención:</strong><br>" + items[2]);
					$(".contactenos-correo").html("<strong>Correo electrónico:</strong><br>" + items[3]);
					$(".contactenos-sugerencia").html("<strong>Sugerencias, Quejas y denuncias:</strong><br>" + items[4]);
					$(".contactenos-denuncia").html("<strong>Denuncias:</strong><br>" + items[5]);
				})
			}
		});
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