<?php
	session_start();
	session_unset();
	session_destroy();
	echo "<script>alert('Sesión cerrada'); window.location.href='../Views/index.php'</script>";
?>
