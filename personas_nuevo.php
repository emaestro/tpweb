<?php
	include('inc/cabecera.php');
	include('inc/menu.php');

	include("inc/db.php");

	$resultado = $conexion->query("SELECT p.* FROM personas p");

?>

<div class="container">

	<div class="row">
		<div class="col-md-8">

			<h1>Nueva Persona</h1>

			<form method="post"action="personas_nuevo_guarda.php"  class="form-horizontal">
				<div class="form-group">
					<label for="txtPaterno" class="col-sm-2 control-label">Paterno</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="txtPaterno" placeholder="Apellido paterno" name="txtPaterno">
					</div>
				</div>
				<div class="form-group">
					<label for="txtMaterno" class="col-sm-2 control-label">Materno</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="txtMaterno" placeholder="Apellido materno" name="txtMaterno">
					</div>
				</div>
				<div class="form-group">
					<label for="txtNombres" class="col-sm-2 control-label">Nombres</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="txtNombres" placeholder="Nombres" name="txtNombres">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<input type="submit" class="btn btn-primary"name="btnGuardar" value="Guardar">
					</div>
				</div>
 			</form>
		</div>
		<div class="col-md-4">
			<div class="alert alert-success">
				<strong>Bienvenidos</strong> al CRUD Personas.
			</div>
		</div>
	</div>

</div>

<?php
	include('inc/scripts.php');
	include('inc/pie.php');
?>