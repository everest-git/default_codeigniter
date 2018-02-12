<div class="container">
	
	<form>
		<h1>Area</h1>
		
		<div class="form-group">
			<label for="id_area">ID</label>
			<input type="text" class="form-control" id="txt_id_area" placeholder="ID" value="<?php echo $id_area ?>" readonly>
		</div>
		<div class="form-group">
			<label for="area">Area</label>
			<input type="text" class="form-control" id="txt_area" placeholder="Area" value="<?php echo $area ?>">
		</div>
		<div class="form-group">
			<label for="siglas">Siglas</label>
			<input type="text" class="form-control" id="txt_siglas" placeholder="Siglas" value="<?php echo $siglas ?>"> 
		</div>
		<input class="btn btn-success" type="button" value="Guardar y Nuevo">
		<input class="btn btn-primary" type="button" value="Guardar y Cerrar">
		<input class="btn btn-danger" type="button" value="Cancelar">
	</form>
</div>
