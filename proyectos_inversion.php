<?php
	include("header.php");
	include("nav.php");
?>
	<link href="css/custom.css" rel="stylesheet">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-xs-12  col-xs-offset-0 div_white" >
				<div class="row"><img src="images/baner-header.jpg" class="img-responsive"/></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-xs-12  col-xs-offset-0 div_white" >
				<div class="menu-interno">
					<a href="index.php">Inicio</a> <span>></span> <a href="transparencia.php">Transparencia</a> <span>></span> <span id='titulo'></span>
				</div>
				<div id="contenido"></div>
				<div id="elementos">
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

	datosdepagina();

	function datosdepagina() {
		var parametros = {
			selectfuncion: "listar_datos",
			pagina: "6",
		};
		$.ajax({
			data: parametros,
			url: 'admin/functionsweb2.php',
			type: 'post',
			dataType: 'json',
			beforeSend: function() {
				$("#resultado").html("Procesando, espere por favor...");
			},
			success: function(response) {
				$("#titulo").html(response.titulo);
				$("#contenido").html(response.contenido);
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
	</body>

	</html>