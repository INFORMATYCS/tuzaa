<html>
	<head>
		<title>Tu Zaa</title>
		<script type="text/javascript">
			$(document).ready(function() {
				$("#boton").click(function(event) {
					alert('11111');
				});
				
				
				
				
				
				
				
				$( "#dialog" ).dialog({
					autoOpen: false,
					width: 400,
					position: { my: "center center", at: "center center", of: $("#contendedor"),within: $("#contendedor") },
					modal: true,
					buttons: [
						{
							text: "Ok",
							click: function() {
								$( this ).dialog( "close" );
							}
						},
						{
							text: "Cancel",
							click: function() {
								$( this ).dialog( "close" );
							}
						}
					]
				});
				
				
				$( "#dialog-link" ).click(function( event ) {
					$( "#dialog" ).dialog( "open" );
					event.preventDefault();
				});

				$( "#boton_post" ).click(function( event ) {
					$.post( "../public/login/25", function( data ) {
						console.log(data);
					});
				});
				
				

				
				
			});
		</script>
	</head>
	<body>
		Hi
		
		<input name="boton" id="boton" type="button" value="Otro" />
		
		
		
		<button id="dialog-link" class="ui-button">
		<span class="ui-icon ui-icon-newwin"></span>Open Dialog
	</button>
	

	<button id="boton_post" class="ui-button">
		<span class="ui-icon ui-icon-newwin"></span>Post
	</button>

	
	
	<div id="dialog" title="Dialog Title">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	</div>
	
	

	<table>
			<tr><td>a</td></tr>
			<tr><td>a</td></tr>
			<tr><td>a</td></tr>
			<tr><td>a</td></tr>
			<tr><td>a</td></tr>
			<tr><td>a</td></tr>	
			<tr><td>a</td></tr>			
	</table>
	
	</body>
</html>