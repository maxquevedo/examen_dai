<?php
	session_start();
	session_destroy();
	session_unset();
	echo "<script>alert('Sesion cerrada'); window.location.href='../Views/index.php'</script>";
?>
