<?php
include 'main_page.php';
?>

<!-- Acción sobre el botón con id=boton y actualizamos el div con id=capa -->
<script type="text/javascript">
	$(document).ready(function() {
		$("#boton").click(function(event) {

			openPage("src/presentacion/test/prueba.php", "contendedor")
			
		});
	});
</script>