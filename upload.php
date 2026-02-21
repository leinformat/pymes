<?php require __DIR__ . '/services/auth.php'; ?>

<?php 
	include 'inc/header.php';
?>
 	<div class="container">

	<p>&nbsp;</p>
	<p>&nbsp;</p>    
    <DIV id="PANEL_0" class="panel panel-danger text-justify">
        <DIV class="panel-heading">
            <H3 class="panel-title">Envio de solicitud <?php echo $data['title']; ?></H3>
        </DIV>
        <DIV class="panel-body">
            <form  enctype="multipart/form-data">
                <label for="file-es" role="button">Seleccionar Archivos</label>
                <input class="subir" id="file-es" name="file-es[]" type="file" multiple>
                <SMALL class="form-text text-muted">Seleccionar archivos de Office 201X: docx, xlsx, pptx, pdf y txt hasta un maximo de 10.</SMALL>
            </form>
            <p>&nbsp;</p>
            <div class="alert alert-success" role="alert"></div>
        </DIV>
    </DIV> 
    <a class="btn btn-danger" href="./">Ver Lista de Archivos</a>   
	<a class="btn btn-warning" href="./delete.php">Eliminar Archivos</a>
    </div>
    <br><br><br><br><br><br><br><br>

<?php 
	include 'inc/footer.php';
 ?>	

<script src="js/jquery-2.1.1.js" type="text/javascript"></script>
<script src="./fileinput/js/fileinput.min.js" type="text/javascript"></script>
<script src="./fileinput/js/locales/es.js" type="text/javascript"></script>	
<script src="js/bootstrap.min.js" type="text/javascript"></script> 
<script src="js/upload.js" type="text/javascript"></script>