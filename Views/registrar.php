<?php
	require('head.php');
?>

<div id="content">
	<div class="row">
		<div class="col">
			<center><h1>Eres..</h1></center>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<center><label for="empresa"><h3>Empresa</h3></label></center>
			<center><input id="empresa" name="empresa" type="radio"></center>
		</div>
		<div class="col">
			<center><label for="particular"> <h3 class="text-center">Particular</h3></label></center>
			<center><input type="radio" name="Particular" id="particular"></center>
		</div>
	</div>
	
</div>
<script>
	$("#particular").click(function(){
		$("#content").load('form-particular.php');
	});

	
</script>