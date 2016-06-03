<?php include( "header.php"); include( "nav.php"); ?>
<div class="container">
	<?php include( "menu-slider.php"); ?>
	<br/>
	<div class="row" style="margin-right: 0px;margin-left: 0px;" id="subir">
		<div class="col-lg-3 col-sm-4 col-izquierda-2"> <img src="images/contactenos.png" class="img-responsive" /> </div>
		<div class="col-lg-9 col-sm-12 div_white">
			<div class="menu-interno"> <a href="<?php echo $host?>index">Inicio</a> <span>></span> <a href="">Transparencia</a> <span>> Solicitud de Acceso </div>
			<h1 id="titular_subseccion">SOLICITUD DE ACCESO A LA INFORMACIÓN PÚBLICA</h1>
			<hr style="margin-bottom:2px;">
			<h6 style="text-align:center;margin:2px 0px;">Texto Único Ordenado de la Ley Nº 27806, <br>Ley de Transparencia y Acceso a la Información Pública, <br>aprobado por Decreto Supremo Nº 043-20063-PCM</h6>
			<hr style="margin-top:2px;">

			<div id="formulario">
				<div class="row">
					<label class="col-sm-12">I. FUNCIONARIO RESPONSABLE DE ENTREGAR LA INFORMACIÓN</label>
					<div class="col-sm-3 padding5"><span>Dr. Germán Torres Zambrano</span>
					</div>
				</div>
				</br>
				<div class="row">
					<label class="col-sm-12">II. DATOS DEL SOLICITANTE</label>
					<div class="col-sm-3 padding5"><span>Apellidos y Nombres / <br>Razón Social</span>
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
							<option value="DNI" selected>DNI</option>
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
					<div class="col-sm-12 padding5"><span>Domicilio</span>
					</div>
				</div>
				</br>
				<div class="row">
					<div class="col-sm-3 padding5">
						<span>Av/ Calle/ Jr./ Psj.</span>
						<input class="form-control" type="text" id="avenida" />
					</div>
					<div class="col-sm-3 padding5">
						<span>Nº/ Dpto./ int.</span>
						<input class="form-control" type="text" id="numero" />
					</div>
					<div class="col-sm-3 padding5">
						<span>Distrito</span>
						<input class="form-control" type="text" id="distrito" />
					</div>
					<div class="col-sm-3 padding5">
						<span>Urbanización</span>
						<input class="form-control" type="text" id="urbanizacion" />
					</div>
				</div>
				</br>
				<div class="row">
					<div class="col-sm-3 padding5">
						<span>Provincia</span>
						<input class="form-control" type="text" id="provincia" />
					</div>
					<div class="col-sm-3 padding5">
						<span>Departamento</span>
						<input class="form-control" type="text" id="departamento" />
					</div>
					<div class="col-sm-3 padding5">
						<span>Correo Electrónico</span>
						<input class="form-control" type="text" id="correo" />
					</div>
					<div class="col-sm-3 padding5">
						<span>Teléfono</span>
						<input onKeyPress="return soloNumeros(event)" class="form-control" type="text" id="telefono" />
					</div>
				</div>
				</br>
				<div class="row">
					<label class="col-sm-12">III. INFORMACIÓN SOLICITADA</label>
					<textarea class="col-sm-12 form-control" rows="4" style="    margin: 2%;width: 96%;" id="informacion"></textarea>
				</div>
				</br>
				<div class="row">
					<label class="col-sm-12">IV. DEPENDENCIA DE LA CUAL SE REQUIERE LA INFORMACIÓN</label></div>
				<div class="row"> <span class="col-xs-6"><input  type="checkbox" class="checkbox_mensaje" value="Presidencia	"> Presidencia	</span>  <span class="col-xs-6"><input  type="checkbox" class="checkbox_mensaje" value="Gerencia General	"> Gerencia General	</span> <span class="col-xs-6"><input  type="checkbox" class="checkbox_mensaje" value="Organo de Control Institucional"> Organo de Control Institucional</span> <span class="col-xs-6"><input  type="checkbox" class="checkbox_mensaje" value="Unidad de Auditoría Interna"> Unidad de Auditoría Interna</span> <span class="col-xs-6"><input  type="checkbox" class="checkbox_mensaje" value="Oficial de Cumplimiento"> Oficial de Cumplimiento</span> <span class="col-xs-6"><input  type="checkbox" class="checkbox_mensaje" value="optiGerencia de Finanzason1"> Gerencia de Finanzas</span> <span class="col-xs-6"><input  type="checkbox" class="checkbox_mensaje" value="Gerencia de Intermediación e Innovación Financiera"> Gerencia de Intermediación e Innovación Financiera</span> <span class="col-xs-6"><input  type="checkbox" class="checkbox_mensaje" value="Gerencia de Negocios"> Gerencia de Negocios</span> <span class="col-xs-6"><input  type="checkbox" class="checkbox_mensaje" value="Gerencia de Fideicomisos y Comisiones de Confianza"> Gerencia de Fideicomisos y Comisiones de Confianza</span> <span class="col-xs-6"><input  type="checkbox" class="checkbox_mensaje" value="Gerencia de Medios"> Gerencia de Medios	</span> <span class="col-xs-6"><input  type="checkbox" class="checkbox_mensaje" value="Gerencia de Desarrollo"> Gerencia de Desarrollo</span> <span class="col-xs-6"><input  type="checkbox" class="checkbox_mensaje" value="Gerencia de Riesgos"> Gerencia de Riesgos	</span> <span class="col-xs-6"><input  type="checkbox" class="checkbox_mensaje" value="Gerencia de Planeamiento y Control de Gestión"> Gerencia de Planeamiento y Control de Gestión</span> <span class="col-xs-6"><input  type="checkbox" class="checkbox_mensaje" value="Gerencia de Asesoría Jurídica"> Gerencia de Asesoría Jurídica	</span> <span class="col-xs-6"><input  type="checkbox" class="checkbox_mensaje" value="Gerencia de Gestión Humana y Administración">  Gerencia de Gestión Humana y Administración</span> <span class="col-xs-6"><input  type="checkbox" class="checkbox_mensaje" value="Gerencia de Tecnologías de Información"> Gerencia de Tecnologías de Información		</span> <span class="col-xs-6"><input  type="checkbox" class="checkbox_mensaje" value="Dpto. de Marketing y Comunicaciones">  Dpto. de Marketing y Comunicaciones</span> </div>
				</br>
				<div class="row">
					<label class="col-sm-12">V. FORMA DE ENTREGA DE LA INFORMACIÓN</label></div>
				<div class="row"> 
					<span class="col-xs-6"><input  type="checkbox" class="checkbox_mensaje_2" value="Copia Simple"> Copia Simple</span> 
					<span class="col-xs-6"><input  type="checkbox" class="checkbox_mensaje_2" value="Correo Electrónico"> Correo Electrónico</span>
				</br>
				<div class="2-large columns" style="text-align:center;margin:15px 0px;">
					<input id="enviar_acceso" type="submit" class="button " value="Enviar" />
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