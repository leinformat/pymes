<?php include 'inc/header.php'; ?>	
		
	<div class="container text-center seccion ">
		<div class="row  text-justify">
			<div class="sombra text-justify">
				<div class="col-md-12">
					
						<?php 
						  $directorio = 'doc';
						  $explorar = scandir($directorio);
						  $total_archivos = count($explorar);
						  $total = $total_archivos - 2;
						?>
						 <H2>Nuestros Documentos. </H2>
						 <h3 style="color: #E91621;">Haga click Sobre el Archivo que desea Eliminar</h3><h3>total archivos: <?php echo $total; ?></h3>
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
								  echo "<div class='col-md-2'>
									      <ul class='list-group'>
  											<li class='list-group-item fichero lista fa fa-file-text'><a href='elimina.php?eliminar=$archivo'>$archivo</a></li>
													 </ul>
													</div>";
								}
							}	
								closedir($dir);

						  }
						?>
				</div>
			</div>
		</div>
		<?php if (isset($_GET['exito'])){
                          echo "<div class='alert alert-success alert-dismissible'>
                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>
                    <h4><i class='icon fa fa-info'></i> Archivo eliminado Satisfactoriamente!</h4>
                  </div>";
                      }
                      ?>
		<a href="./"><button type="button" class="btn btn-danger">Ver Lista de Archivos</button></a>   
	<a href="cargar.php"><button type="button" class="btn btn-warning">Subir Archivos</button></a>
	</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>					
			<!-- footer starts here -->

	<?php include 'inc/footer.php';?>	