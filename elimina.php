<?php 

	$archivo = $_GET['eliminar'];

	unlink("doc/".$archivo);
	print "<script>window.location='eliminar.php?exito';</script>";
	