<?php include 'inc/header.php'; ?>

<SCRIPT LANGUAGE="JavaScript">
<!--
function clave()
{
	var clave = "123456";
	ingreso=prompt('Introduce la clave','');

	while (ingreso != clave)
	{
		ingreso=prompt('Clave Incorrecta, Ingrese Nuevamente','');
		break;
	}
	if (ingreso == clave) 
	{
		window.location="cargar.php";
	}
}
//-->
</SCRIPT>
		
	<div class="pymes-repository__repo-files">
						<?php 
						  $directorio = 'doc';
						  $explorar = scandir($directorio);
						  $total_archivos = count($explorar);
						  $total = $total_archivos - 2;
						?>
						 <H2>Nuestros Documentos.</H2>
						 <h3>Total Archivos: <?php echo $total; ?></h3>
						 <div class="pymes-repository__repo-files-container">
						  <?php

						  //SI HAY MENO DE 2 ARCHIVOS O CARPETAS MOSTRAR MENSAJE
						  if ($total_archivos <= 2) 
						  {
						  	echo "<div class='col-md-6'>
									 <H3>NO HAY ARCHIVOS</H3>   
								  </div>";
						  }
						  else
						  {
						  	// SI HAY MAS DE DOS ARCHIVOS EN EL DIRECTORIO ME LOS MUESTRA
						  	$dir = opendir($directorio);
							while ($archivo = readdir($dir))
							{
								//SI LOS ARCHIVOS O CARPETAS SON DIFERENTES A . Y .. MOSTRARLOS
								if ($archivo != '.' && $archivo != '..')
								{
								  echo "<div class='pymes-repository__file-container'>
											<i class='fa fa-file-text pymes-repository__file-icon'></i>
  											<a class='pymes-repository__file-name' target='_blank' href='doc/$archivo'>$archivo</a>
										</div>";
								}
							}	
								closedir($dir);

						  }
						?>
					</div>
		<a onclick="clave()"><button type="button" class="btn btn-danger pymes-repository__upload-file">Subir Archivo</button></a>				
			<!-- footer starts here -->
	</div>				  
	<?php include 'inc/footer.php';?>	