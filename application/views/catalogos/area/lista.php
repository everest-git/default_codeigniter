<div class="container">
	<h1>Areas</h1>
	<div class="pull-right"><a class="btn btn-success" href="<?php echo base_url(); ?>catalogos/agregar" role="button">Agregar área</a></div>
	<br/>
	<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Area</th>
      <th scope="col">Siglas</th>
      <th scope="col">Vigente</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  	<?php 
  		foreach ($areas as $row) { ?>
			<tr>
		      <th scope="row"><?php echo $row->id_area; ?></th>
		      <td><?php echo $row->area; ?></td>
		      <td><?php echo $row->siglas; ?></td>
		      <td><?php $retVal = ($row->vigente == 1) ? 'Si' : 'No' ; echo $retVal; ?></td>
		      <td><a href="<?php echo base_url(); ?>catalogo/detalle/area/<?php echo $row->id_area ?>">Detalle</a></td>
		    </tr>
			
	<?php } ?>
	
    
    
  </tbody>
</table>
</div>