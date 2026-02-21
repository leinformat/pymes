<?php 
	$archivo = $_GET['delete'];
	unlink("../doc/".$archivo);
	print "<script>window.location='../delete.php?exito';</script>";