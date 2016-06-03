<?php include( "header.php"); include( "nav.php"); ?>
<div class="container">
	<?php include( "menu-slider.php"); ?>
	<br/>
	<div class="row" style="margin-right: 0px;margin-left: 0px;" id="subir">
		<div class="col-lg-3 col-sm-4 col-izquierda-2"> <img src="images/contactenos.png" class="img-responsive" /> </div>
		<div class="col-lg-9 col-sm-12 div_white">
			<div class="menu-interno"> <a href="<?php echo $host?>index">Inicio</a> <span>></span> <a href="">Investor Relations Contact</a>
			<h1 id="titular_subseccion"></h1>
			<div id="formulario">
				<div class="row">
					<label class="col-sm-12">Investor Relations Contact</label>
					<div class="col-sm-3 padding5"><span>Name  *</span>
					</div>
					<div class="col-sm-9">
						<input onkeypress="return soloLetras(event)" class="form-control" type="text" id="nombre_apellido" />
					</div>
				</div>
				</br>
				<div class="row">
					<div class="col-sm-3 padding5"><span>Email  *</span>
					</div>
					<div class="col-sm-9">
						<input class="form-control" type="text" id="correo" />
					</div>
				</div>
				</br>
				<div class="row">
					<div class="col-sm-3 padding5"><span>Comment  *</span>
					</div>
					<div class="col-sm-9">
						<textarea class="form-control" id="mensaje_ocurrencia"></textarea>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-sm-3 padding5"><span>Attach File  *</span>
					</div>
					<div class="col-sm-9">
						<input class="form-control" type="file" id="file" />
					</div>
				</div>
				</br>
				<div class="2-large columns" style="text-align:center;margin:15px 0px;">
					<input id="send" type="submit" class="button " value="Send" />
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